<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectCat;
use File;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class ProjectCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = ProjectCat::all();
      return view('admin.category.list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admin.category.add');
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
            ]);

            if($request->hasFile('image')){
                $current = Carbon::now()->format('YmdHs');
                $slug = Str::slug($request->name,'-');
                $filename = $current . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path(). '/uploads/project_cat/', $filename);
                $cat = new ProjectCat();
                $cat->name = $request->input('name');
                $cat->slug = $slug;
                $cat->image = $filename;
                $success =  $cat->save();
                if($success){
                    return redirect()->route('admin.category.list')->with('success','service has been added successfully.');
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
        $cat = ProjectCat::where('slug', $slug)->first();
        return view('admin.category.edit',compact('cat'));
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
        if($request->hasFile('image')){
            $current = Carbon::now()->format('YmdHs');
            $slug = Str::slug($request->name,'-');
            $filename = $current. $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path(). '/uploads/project_cat', $filename);
            $cat = ProjectCat::find($id);
            $prevfilename = $cat->image;
            if (File::exists(public_path('uploads/project_cat/'.$prevfilename))) {
               File::delete(public_path('uploads/project_cat/'.$prevfilename));
               }
               $cat->name = $request->input('name');
               $cat->slug = $slug;
               $cat->image = $filename;
               $success =  $cat->save();
               if($success){
                   return redirect()->route('admin.category.list')->with('success','category has been added successfully.');
               }else {
                   return back()->with('error','something went wrong');
               }   

        }else {
               $cat = ProjectCat::find($id);
               $filename = $cat->image;
               $cat->name = $request->input('name');
               $cat->slug = $slug;
               $cat->image = $filename;
               $success =  $cat->save();
               if($success){
                   return redirect()->route('admin.category.list')->with('success','category has been added successfully.');
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
        $cat = ProjectCat::find($id);
        $filename = $cat->image;
        if (File::exists(public_path('uploads/project_cat/'.$filename))) {
            File::delete(public_path('uploads/project_cat/'.$filename));
            }
        $cat->delete();
        return redirect()->route('admin.category.list')->with('success','category has been deleted successfully.');
    }
}
 