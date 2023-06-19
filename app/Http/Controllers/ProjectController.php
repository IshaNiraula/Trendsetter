<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCat;
use File;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $projects = Project::all();
       return view('admin.project.list',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = ProjectCat::all();
        return view('admin.project.add',compact('cats'));
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
            'name'=>'required',
            'cat_id'=> 'required',
            'image'=> 'required'
        ]);

        if($request->hasFile('image')){
            $current = Carbon::now()->format('YmdHs');
            $slug = Str::slug($request->name,'-');
            $imagename = $current ."_". $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path().'/uploads/project', $imagename);
            $project = new Project();
            $project->name = $request->name;
            $project->slug = $slug;
            $project->cat_id = $request->cat_id;
            $project->description = $request->description;
            $project->image = $imagename;
            $project->client_name = $request->client_name;
            $project->location = $request->location;
            $project->completed_at = $request->completed_at;
            $project->project_value = $request->project_value;
            $project->manager = $request->manager;
            $project->designer = $request->designer;
            $project->brochure_link = $request->brochure_link;
            $success = $project->save(); 
            if($success){
                return redirect()->route('admin.project.list')->with('success','project has been added successfully.');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $cats = ProjectCat::all();
        $project = Project::where('slug', $slug)->first();
        return view('admin.project.edit',compact('project','cats'));
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
        $slug = Str::slug($request->name,'-');
        if($request->hasfile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path(). '/uploads/project',$name);
            $project = project::find($id);
            $filename = $project->image;
            if (File::exists(public_path('uploads/project/'.$filename))) {
               File::delete(public_path('uploads/project/'.$filename));
               }
            $project->name = $request->name;
            $project->slug = $slug;
            $project->cat_id = $request->cat_id;
            $project->description = $request->description;
            $project->image = $name;
            $project->client_name = $request->client_name;
            $project->location = $request->location;
            $project->completed_at = $request->completed_at;
            $project->project_value = $request->project_value;
            $project->manager = $request->manager;
            $project->designer = $request->designer;
            $project->brochure_link = $request->brochure_link;
            $save_project = $project->save();
            if($save_project){
                return redirect()->route('admin.project.list')->with('success','project has been updated successfully.');
            }else {
                return back()->with('error','something went wrong');
            }
        }else {
            $project = project::find($id);
            $filename = $project->image;
            $project->name = $request->name;
            $project->slug = $slug;
            $project->cat_id = $request->cat_id;
            $project->description = $request->description;
            $project->image = $filename;
            $project->client_name = $request->client_name;
            $project->location = $request->location;
            $project->completed_at = $request->completed_at;
            $project->project_value = $request->project_value;
            $project->manager = $request->manager;
            $project->designer = $request->designer;
            $project->brochure_link = $request->brochure_link;
            $save_project = $project->save();
            if($save_project){
                return redirect()->route('admin.project.list')->with('success','project has been updated successfully.');
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
        $project = Project::find($id);
        $filename = $project->filename;
        if (File::exists(public_path('uploads/project/'.$filename))) {
            File::delete(public_path('uploads/project/'.$filename));
            }
        $project->delete();
        return redirect()->route('admin.project.list')->with('success','project has been deleted successfully.');
    }

    public function projectEditorUpload (Request $request) 
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
            $request->file('upload')->move(public_path().'/uploads/editor/project', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/editor/project/'.$filenametostore);
            $message = 'File uploaded successfully';
            $result = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $result;
        }
    }
    
}
