<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteLogo;
use File;


class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = SiteLogo::all();
        return view('admin.site.list',compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('admin.media.add');
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
            'name'=> 'required',
            'pdf_file'=> 'required'
        ]);

        $current = Carbon::now()->format('YmdHs');
        if($request->hasfile('pdf_file')){
            $file = $request->file('pdf_file');
            $filename = $current .'_' . $file->getClientOriginalName();
            $file->move(public_path()."/uploads/media/",$filename);
            $mediaFile = new MediaFile();
            $mediaFile->name= $request->name;
            $mediaFile->filename = $filename;
            $saved = $mediaFile->save();
            if($saved){
                return redirect()->route('admin.media.list')->with('success','file has been saved');
            } else {
                return back()->with('error','something went wrong');
            }
        }else{
            return back()->with('error','something went wrong');
        }
     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file = MediaFile::where('id', $id)->first();
        return view('admin.media.edit',compact('file'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = MediaFile::find($id);
        $filename = $file->filename;
        if (File::exists(public_path('uploads/media/'.$filename))) {
            File::delete(public_path('uploads/media/'.$filename));
            }
        $file->delete();
        return redirect()->route('admin.media.list')->with('success','file has been deleted successfully.');
    }
}
