<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{


    public function __construct()
    {
       $this->middleware('guest:admin');
    }



    public function showLoginForm()
    {
      
        return view('auth.admin-login');
    }



    public function giris()
    {
        return view('admin/template');
    }




    public function login(LoginRequest $request)
    {

         $this->validate($request,[
             'email'=>'required|email',
           'password'=>'required|min:6'
         ]);

       
       if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect()->intended(route('admin.dashboard'));
       }
       return redirect()->back()->withInput($request->only('email','remember'));
    }


}
