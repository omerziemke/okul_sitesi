<?php

namespace App\Http\Controllers;

use App\Ogretmen;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use App\Ekle;
use Illuminate\Support\Facades\Hash;

class EkleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ayarlar.ekle.ekle');
    }
    public function git()
    {
        return view('admin.ayarlar.ekle.ekle');
    }
    public function git2()
    {
        return view('admin.ayarlar.ekle.ögrt-ögrenci-ekle');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),array(
            'ogr_numarasi'=>'required',
            'ogr_adi'=>'required',
            'ogr_soyadi'=>'required',
            'ogr_telefon'=>'required',
            'ogr_sifre'=>'required',
            'ogr_devamsizlik'=>'required',
            'email'=>'required',
        ));
        $ogrenci= new Ekle();
        $ogrenci->ogr_adi=$request->ogr_adi;
        $ogrenci->ogr_soyadi=$request->ogr_soyadi;
        $ogrenci->ogr_numarasi=$request->ogr_numarasi;
        $ogrenci->ogr_devamsizlik=$request->ogr_devamsizlik;
        $ogrenci->ogr_telefon=$request->ogr_telefon;
        $ogrenci->ogr_sifre=$request->ogr_sifre;
        $ogrenci->email=$request->email;
        $ogrenci->save();
        return view('admin.ayarlar.ekle.ekle');

    }
    public function login()
    {
    return view('welcome');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public  function düzen($id){

        $ogrenci=Ekle::find($id);

        return view('admin.ayarlar.ekle.edit',compact('ogrenci'));
    }
    public  function düzen2($id){

        $ogrenci=Ekle::find($id);

        return view('admin.ayarlar.ekle.ögrt-ögrenci-edit',compact('ogrenci'));
    }

    public  function ogrtdüzen($id){

        $ogretmen=Ogretmen::find($id);

        return view('admin.ayarlar.ekle.ogrt-edit',compact('ogretmen'));
    }


    public function edit($id)
    {
        $ogrenci=Ekle::find($id);
        $tumogrenciler=Ekle::all();
        return view('admin.ekle.edit',compact('ogrenci','tumogrenciler'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function güncelle(Request $request, $id)
    {
        $ogrenci=Ekle::find($id);
        $ogrenci->ogr_numarasi=$request->ogr_numarasi;
        $ogrenci->ogr_adi=$request->ogr_adi;
        $ogrenci->ogr_soyadi=$request->ogr_soyadi;
        $ogrenci->email=$request->email;
        $ogrenci->ogr_telefon=$request->ogr_telefon;
        $ogrenci->ogr_devamsizlik=$request->ogr_devamsizlik;
        $ogrenci->ogr_sifre=$request->ogr_sifre;
        $ogrenci->save();
        $ogrenciler=Student::all();
        return view('admin.ayarlar.ekle.index',compact('ogrenciler'));

    }
    public function güncelle2(Request $request, $id)
    {
        $ogrenci=Ekle::find($id);
        $ogrenci->ogr_numarasi=$request->ogr_numarasi;
        $ogrenci->ogr_adi=$request->ogr_adi;
        $ogrenci->ogr_soyadi=$request->ogr_soyadi;
        $ogrenci->email=$request->email;
        $ogrenci->ogr_telefon=$request->ogr_telefon;
        $ogrenci->ogr_devamsizlik=$request->ogr_devamsizlik;
        $ogrenci->ogr_sifre=$request->ogr_sifre;
        $ogrenci->save();
        $ogrenciler=Student::all();
        return view('admin.ayarlar.ekle.ögretmenİndex',compact('ogrenciler'));

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        $ogrenciler=Student::all();
        return view('admin.ayarlar.ekle.index',compact('ogrenciler'));

    }
    public function destroy2($id)
    {
        Student::destroy($id);
        $ogrenciler=Student::all();
        return view('admin.ayarlar.ekle.ögretmenİndex',compact('ogrenciler'));

    }
    public function ogrtsil($id)
    {
        Ogretmen::destroy($id);
        $ogretmenler=Ogretmen::all();
        return view('admin.ayarlar.ekle.ogretmenListe',compact('ogretmenler'));

    }
    public  function kullaniciekle()
    {
        return view('admin.kullanicilar.create');
    }
    public function kullanicikayit(Request $request)
    {
        $kullanici =new User();
        $kullanici->name=$request->name;
        $kullanici->email=$request->email;
        $kullanici->yetki=$request->yetki;
        if (($request->password)!=($request->password_confirmation)){
            return back();
        }else{
              $kullanici->password=$request->password;

        } $kullanici->save();
        return view('admin.index');

    }
    public function ogrtdüzenle()
    {    $ogretmenler=Ogretmen::all();
        return view('admin.ayarlar.ekle.ogretmenListe',compact('ogretmenler'));
    }

}
