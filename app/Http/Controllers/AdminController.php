<?php

namespace App\Http\Controllers;

use App\notlar;
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


    public function ogrtgüncelle(Request $request, $id)
    {
        $ogretmen=Ogretmen::find($id);
        $ogretmen->ogrt_adi=$request->ogrt_adi;
        $ogretmen->ogrt_soyadi=$request->ogrt_soyadi;
        $ogretmen->email=$request->email;
        $ogretmen->ogrt_telefon=$request->ogrt_telefon;
        $ogretmen->ogrt_sifre=$request->ogrt_sifre;
        $ogretmen->save();
        $ogretmenler=Ogretmen::all();
        return view('admin.ayarlar.ekle.ogretmenListe',compact('ogretmenler'));

    }



     public  function ogrtdüzen($id){

        $ogretmen=Ogretmen::find($id);

        return view('admin.ayarlar.ekle.ogrt-edit',compact('ogretmen'));
    }

}
