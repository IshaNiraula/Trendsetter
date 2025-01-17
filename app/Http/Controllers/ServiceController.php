<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use File;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('position', 'asc')->get();
        return view('admin.service.list',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.service.add');
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
            $service = new Service();
            $service->title = $request->title;
            $service->slug = $slug;
            $service->description = $request->description;
            $service->filename = $name;
            $service->position = $request->position;
            $service->mtitle = $request->mtitle;
            $service->mdescription = $request->mdescription;
            $service->mkeywords = $request->mkeywords;
            $save_service = $service->save();
            if($save_service){
                return redirect()->route('admin.service.list')->with('success','service has been added successfully.');
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
       $services = Service::orderBy('updated_at','desc')->get();
       $service = Service::where('slug', $slug)->first();
       return view('client.service-details')->with(['services' => $services, 'service' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $service = Service::where("id",$id)->first();
        $service = Service::find($id);
        return view('admin.service.edit',compact('service'));
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
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'mtitle' => 'required|max:255',
            'mdescription' => 'required',
            'mkeywords' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $service = Service::find($id);
        if (!$service) {
            return back()->with('error', 'Service not found');
        }
    
        $slug = Str::slug($request->title, '-');
    
        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path() . '/uploads/service', $name);
    
            // Delete the previous image if it exists
            if (File::exists(public_path('uploads/service/' . $service->filename))) {
                File::delete(public_path('uploads/service/' . $service->filename));
            }
            $service->filename = $name;
        }
    
        $service->title = $request->title;
        $service->slug = $slug;
        $service->description = $request->description;
        $service->position = $request->position;
        $service->mtitle = $request->mtitle;
        $service->mdescription = $request->mdescription;
        $service->mkeywords = $request->mkeywords;
    
        $save_service = $service->save();
        if ($save_service) {
            return redirect()->route('admin.service.list')->with('success', 'Service has been updated successfully.');
        } else {
            return back()->with('error', 'Something went wrong');
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
        $service = Service::find($id);
        $filename = $service->filename;
     if (File::exists(public_path('uploads/service/'.$filename))) {
        File::delete(public_path('uploads/service/'.$filename));
      }
        $service->delete();
        return redirect()->route('admin.service.list')->with('success','service has been deleted successfully.');
    }

    public function serviceEditorUpload (Request $request) 
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
            $request->file('upload')->move(public_path().'/uploads/editor/service', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/editor/service/'.$filenametostore);
            $message = 'File uploaded successfully';
            $result = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $result;
        }
    }
}
