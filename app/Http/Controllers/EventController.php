<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use File;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('created_at', 'desc')->get();
        return view('admin.event.list',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.event.add');
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
            $request->file('image')->move(public_path(). '/uploads/event',$name);
            $event = new Event();
            $event->title = $request->title;
            $event->slug = $slug;
            $event->description = $request->description;
            $event->filename = $name;
            $event->position = $request->position;
            $save_event = $event->save();
            if($save_event){
                return redirect()->route('admin.event.list')->with('success','event has been added successfully.');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = Event::orderBy('updated_at','desc')->get();
       $event = Event::where('slug', $slug)->first();
       return view('client.event-details')->with(['events' => $events, 'event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin.event.edit',compact('event'));
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
            $request->file('image')->move(public_path(). '/uploads/event',$name);
            $event = Event::find($id);
            $filename = $event->filename;
            if (File::exists(public_path('uploads/event/'.$filename))) {
               File::delete(public_path('uploads/event/'.$filename));
               }
            $event->title = $request->title;
            $event->slug = $slug;
            $event->description = $request->description;
            $event->filename = $name;
            $event->position = $request->position;
            $save_event = $event->save();
            if($save_event){
                return redirect()->route('admin.event.list')->with('success','event has been updated successfully.');
            }else {
                return back()->with('error','something went wrong');
            }
        }else {
            $event = Event::find($id);
            $filename = $event->filename;
            $event->title = $request->title;
            $event->slug = $slug;
            $event->description = $request->description;
            $event->filename = $filename;
            $event->position = $request->position;
            $save_event = $event->save();
            if($save_event){
                return redirect()->route('admin.event.list')->with('success','event has been updated successfully.');
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
        $event = Event::find($id);
        $filename = $event->filename;
     if (File::exists(public_path('uploads/event/'.$filename))) {
        File::delete(public_path('uploads/event/'.$filename));
      }
        $event->delete();
        return redirect()->route('admin.event.list')->with('success','event has been deleted successfully.');
    }

    public function eventEditorUpload (Request $request) 
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
            $request->file('upload')->move(public_path().'/uploads/editor/event', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/editor/event/'.$filenametostore);
            $message = 'File uploaded successfully';
            $result = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $result;
        }
    }
}
