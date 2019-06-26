<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function userdemo(){
        return view('admin.kullanicilar.kullanıcıtemplate');
    }
    public function admindemo(){
      return view('admin.template');
    }
}
