<?php

namespace App\Http\Controllers;

use App\notlar;
use Illuminate\Http\Request;
use App\ayar;

class AyarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function index()
    {
        $ogrenci=ayar::find(1);

        return view('admin.ayarlar.create',compact('ogrenci'));
    }
*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function cikis()
    {
        auth()->logout();
        return  redirect('/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function adminnotlar ()
    {
        $ogrenciler=notlar::all();
        return view("admin.ayarlar.ekle.ögr_listte",compact('ogrenciler'));
    }
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
       $this->validate(request(),array(
           'ogr_numarasi'=>'required',
           'ogr_adi'=>'required',
           'ogr_soyadi'=>'required',
           'ogr_telefon'=>'required',
           'ogr_sifre'=>'required',
           'email'=>'required',
    ));
         $ayar=ayar::find(1);

             $ayar->ogr_numarasi=request('ogr_numarasi');
             $ayar->ogr_adi=request('ogr_adi');
             $ayar->ogr_soyadi=request('ogr_soyadi');
             $ayar->ogr_telefon=request('ogr_telefon');
             $ayar->ogr_sifre=request('ogr_sifre');
             $ayar->email=request('email');
             $ayar->save();

        return view('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
