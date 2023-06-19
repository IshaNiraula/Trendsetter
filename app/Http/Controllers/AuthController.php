<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Session;
class AuthController extends Controller
{
    public function registerAdmin(Request $request) {
        $request->validate([
            'fullname'=> 'required',
            'email'=> 'required|email|unique:admins',
            'password'=> 'required|min:5|max:12',
        ]);

        $admin = new Admin();
        $admin->fullname = $request->fullname;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $saveAdmin = $admin->save();
        if($saveAdmin){
           return back()->with('success', 'admin has been saved successfully');
        }else {
               return back()->with('error', 'something went wrong');
        }
    }

    public function loginAdmin(Request $request){
            
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:5|max:12',
        ]);

        $admin = Admin::where('email', "=", $request->email)->first();

        if($admin){
            if(Hash::check($request->password, $admin->password)){
             $request->session()->put('adminId', $admin->id);
             return redirect('/admin/dashboard');
            }else{
               return back()->with('error',"password or email is wrong");
            }
        }else {
             return back()->with('error',"user not found");
        }
    }

    public function logoutAdmin(){
        if(Session::has('adminId')){
            Session::pull('adminId');
            return redirect('/login')->with('success','successfully logged out');
        }
    }
}
