<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrier;

class CarrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $carriers = Carrier::all();
          return view('admin.carrier.list',compact('carriers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.carrier.add');
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
            'description'=> 'required',
            'status'=> 'required',
        ]);
        $carrier = new Carrier();
        $carrier->title = $request->title;
        $carrier->description = $request->description;
        $carrier->status = $request->status;
        $success = $carrier->save();
        if ($success) {
            return redirect()->route('admin.carrier.list')->with('success', 'Carrier added!');
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
        $carrier = Carrier::find($id);
        return view('admin.carrier.edit',compact('carrier'));
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
            'title'=> 'required',
            'description'=> 'required',
            'status'=> 'required',
        ]);
        $carrier = Carrier::find($id);
        $carrier->title = $request->title;
        $carrier->description = $request->description;
        $carrier->status = $request->status;
        $success = $carrier->save();
        if ($success) {
            return redirect()->route('admin.carrier.list')->with('success', 'Carrier updated!');
        }else{
            return back()->with('error','something went wrong');
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
        $carrier = Carrier::find($id);
        $success = $carrier->delete();
        if ($success) {
            return redirect()->route('admin.carrier.list')->with('success', 'Carrier deleted!');

        }else{
            return back()->with('error','something went wrong');
        }
    }
}
