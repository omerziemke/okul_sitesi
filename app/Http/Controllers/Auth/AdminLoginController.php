<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {

    }
    public function showLoginForm(){
      dd(Auth::guard('admin'));
        return view('auth.admin-login');
    }
    public function giris(){
        return view('admin/template');
    }

    public function login(Request $request)
    {
       $this->validate($request,[
           'email'=>'required|email',
           'password'=>'required|min:6'
       ]);
       if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect()->intended(route('admin.giris'));
       }
       return redirect()->back()->withInput($request->only('email','remember'));
    }

    // public function guard()
    // {
    //   return Auth::guard('admin');
    // }


}
