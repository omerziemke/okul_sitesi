<?php

namespace App\Http\Controllers;

use App\Ogretmen;
use Illuminate\Http\Request;

class OgretmenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create');
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
    public function giris()
    {
        return view('admin.kullanicilar.kullanıcıtemplate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ogretmen= new Ogretmen();
        $ogretmen->ogrt_adi=$request->ogrt_adi;
        $ogretmen->ogrt_soyadi=$request->ogrt_soyadi;
        $ogretmen->ogrt_telefon=$request->ogrt_telefon;
        $ogretmen->ogrt_sifre=$request->ogrt_sifre;
        $ogretmen->email=$request->email;
        $ogretmen->save();
        return view('admin.ayarlar.ekle.ogretmenListe');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ogretmen  $ogretmen
     * @return \Illuminate\Http\Response
     */
    public function show(Ogretmen $ogretmen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ogretmen  $ogretmen
     * @return \Illuminate\Http\Response
     */
    public function edit(Ogretmen $ogretmen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ogretmen  $ogretmen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ogretmen $ogretmen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ogretmen  $ogretmen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ogretmen $ogretmen)
    {
        //
    }
}
