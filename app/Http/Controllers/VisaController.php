<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visa;
use File;
use Illuminate\Support\Str;

class VisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visas = Visa::orderBy('created_at', 'desc')->get();
        return view('admin.visa.list',compact('visas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.visa.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required',
            'description'=> 'required'
        ]);

        $slug = Str::slug($request->title,'-');

        if($request->hasfile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path(). '/uploads/service',$name);
            $visa = new Visa();
            $visa->title = $request->title;
            $visa->slug = $slug;
            $visa->description = $request->description;
            $visa->filename = $name;
            $save_visa = $visa->save();
            if($save_visa){
                return redirect()->route('admin.visa.list')->with('success','visa has been added successfully.');
            }else {
                return back()->with('error','something went wrong');
            }
        }else {
            return back()->with('error','please choose an image');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      
       $visas = Visa::orderBy('updated_at','desc')->get();
       $visa = Visa::where('slug', $slug)->first();
       return view('client.visa-details')->with(['visas' => $visas, 'visa' => $visa]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $service = Visa::where("id",$id)->first();
        $visa = Visa::find($id);
        return view('admin.visa.edit',compact('visa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slug = Str::slug($request->title,'-');
        if($request->hasfile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path(). '/uploads/service',$name);
            $visa = Visa::find($id);
            $filename = $visa->filename;
            if (File::exists(public_path('uploads/visa/'.$filename))) {
               File::delete(public_path('uploads/visa/'.$filename));
               }
            $visa->title = $request->title;
            $visa->slug = $slug;
            $visa->description = $request->description;
            $visa->filename = $name;
            $save_visa = $visa->save();
            if($save_visa){
                return redirect()->route('admin.visa.list')->with('success','visa has been updated successfully.');
            }else {
                return back()->with('error','something went wrong');
            }
        }else {
            $visa = Visa::find($id);
            $filename = $visa->filename;
            $visa->title = $request->title;
            $visa->slug = $slug;
            $visa->description = $request->description;
            $visa->filename = $filename;
            $save_visa = $visa->save();
            if($save_visa){
                return redirect()->route('admin.visa.list')->with('success','visa has been updated successfully.');
            }else {
                return back()->with('error','something went wrong');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visa = Visa::find($id);
        $filename = $visa->filename;
     if (File::exists(public_path('uploads/visa/'.$filename))) {
        File::delete(public_path('uploads/visa/'.$filename));
      }
        $visa->delete();
        return redirect()->route('admin.visa.list')->with('success','visa has been deleted successfully.');
    }

    public function visaEditorUpload (Request $request) 
    {
          if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->move(public_path().'/uploads/editor/visa', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/editor/visa/'.$filenametostore);
            $message = 'File uploaded successfully';
            $result = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $result;
        }
    }
}
