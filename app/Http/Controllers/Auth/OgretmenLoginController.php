<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OgretmenLoginController extends Controller
{
  

   public function __construct()
    {
       //$this->middleware('guest:ogretmen');
    }


  public function showLoginForm()
    {
      
        return view('auth.ogretmen-login');
    }


   public function login(Request $request)
    {

    	 $this->validate($request,[
             'email'=>'required|email',
           'password'=>'required|min:6'
         ]);
      
        if (Auth::guard('ogretmen')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect()->intended(route('ogretmen.dashboard'));
       }
       return redirect()->back()->withInput($request->only('email','remember'));
    }
    




    public function giris()
    {
        return view('admin/kullanicilar/kullanıcıtemplate');
    }


}
