<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarrierForm;
use File;
use App\Mail\CarrierMail;
use Illuminate\Support\Facades\Mail;

class CarrierFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formsData = CarrierForm::all();
        return view('admin.carrier.formList',compact('formsData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' =>'required',
            'location' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'position' =>'required',
            'salary' => 'required',
            'date' =>'required',
            'experience' => 'required',
            'e_status' =>'required',
            'resume' => 'required|mimes:pdf|max:10000',
            'r_status' => 'required',
            'captcha' => 'required|captcha', // this will validate captcha
        ]);

        if($request->hasfile('resume')){
            $name = $request->file('resume')->getClientOriginalName();
            $request->file('resume')->move(public_path(). '/uploads/resume', $name);
            $form = new CarrierForm();
            $form->name = $request->name;
            $form->location = $request->location;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->position = $request->position;
            $form->salary = $request->salary;
            $form->date = $request->date;
            $form->experience = $request->experience;
            $form->e_status = $request->e_status;
            $form->resume = $name;
            $form->r_status = $request->r_status;
            $form->referer_name = $request->referer_name;
            $form->referer_email = $request->referer_email;
            $save_form = $form->save();
            if($save_form){
                $mailData = [
                    "name" => $request->name,
                    "email" => $request->email,
                    'phone' => $request->phone,
                    'location' => $request->location,
                    'position' => $request->position,
                    'salary' =>$request->salary,
                    'date' => $request->date,
                    'experience' => $request->experience,
                    'e_status' => $request->e_status,
                    'resume' => $name,
                    'r_status' => $request->r_status,
                    'referer_name' =>$request->referer_name,
                    'referer_email'=> $request->referer_email,
                    'subject' => $request->subject,
                    'message' => $request->message
                ];
                Mail::to("jadanconstructiongroup@gmail.com")->send(new CarrierMail($mailData));
                return redirect('/thank-you')->with('success','Form has been submmited successfully');
            }else {
                return back()->with('error','something went wrong');
            }
        }else {
            return back()->with('error','please choose your resume');
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
        //
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
        $form = CarrierForm::find($id);
        $filename = $form->resume;
        if (File::exists(public_path('uploads/resume/'.$filename))) {
            File::delete(public_path('uploads/resume/'.$filename));
            }
        $form->delete();
        return redirect()->route('admin.carrier.form.list')->with('success','Data has been deleted successfully.');
    }
}
