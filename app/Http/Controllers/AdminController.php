<?php

namespace App\Http\Controllers;

use App\notlar;
use App\Ogretmen;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.template');
    }

/*
 public function ogr_list()
    {

        $ogr=Ogretmen::all();
        dd("$ogr");
        return view('admin.ayarlar.ekle.ogretmenListe',compact('ogr'));
    }
*/



     public  function ogrtdüzen($id){

        $ogretmen=Ogretmen::find($id);

        return view('admin.ayarlar.ekle.ogrt-edit',compact('ogretmen'));
    }

}
