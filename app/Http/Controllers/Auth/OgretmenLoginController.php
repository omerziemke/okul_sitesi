<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OgretmenLoginController extends Controller
{
  



    public function giris()
    {
        return view('admin/kullanicilar/kullanıcıtemplate');
    }


}
