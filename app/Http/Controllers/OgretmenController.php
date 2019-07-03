<?php

namespace App\Http\Controllers;

use App\notlar;
use App\Ogretmen;
use App\Student;
use Illuminate\Http\Request;

class OgretmenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
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



    public  function düzen($id){

        $ogrenci=Ekle::find($id);

        return view('admin.ayarlar.ekle.ögrt-ögrenci-edit',compact('ogrenci'));
    }




 public function ogrtdüzenle()
    {    $ogretmenler=Ogretmen::all();
        return view('admin.ayarlar.ekle.ogretmenListe',compact('ogretmenler'));
    }





    public function notlar()
    {
        $ogrenciler=notlar::all();
        return view("admin.kullanicilar.ögrt_not_girme",compact('ogrenciler'));
    }




    public function ogrt_not_gir($id)
    {
        $ogrenci=notlar::find($id);
        return view("admin.ayarlar.ekle.ogrt_not_düzen",compact('ogrenci'));
    }



     public function ögr_kaydet(Request $request){



        $ogrenci= new Student();
        $notogrenci=new notlar();
        $notogrenci->isim=$request->ogr_adi;
        $notogrenci->soyisim=$request->ogr_soyadi;
        $notogrenci->Numarasi=$request->ogr_numarasi;
        $ogrenci->ogr_adi=$request->ogr_adi;
        $ogrenci->ogr_soyadi=$request->ogr_soyadi;
        $ogrenci->ogr_numarasi=$request->ogr_numarasi;
        $ogrenci->ogr_devamsizlik=$request->ogr_devamsizlik;
        $ogrenci->ogr_telefon=$request->ogr_telefon;
        $ogrenci->ogr_sifre=$request->ogr_sifre;
        $ogrenci->email=$request->email;
        $notogrenci->save();


        $ogrenci->save();

        $ogrenciler=Student::all();
        return view('admin.ayarlar.ekle.ögretmenİndex',compact('ogrenciler'));

    }



    public function ogrt_not_güncelle(Request $request,$id)
    {
        $ogrenci=notlar::find($id);
        $ogrenci->Numarasi=$request->Numarasi;
        $ogrenci->isim=$request->isim;
        $ogrenci->soyisim=$request->soyisim;
        $ogrenci->Fizik=$request->Fizik;
        $ogrenci->Kimya=$request->Kimya;
        $ogrenci->Biyoloji=$request->Biyoloji;
        $ogrenci->Matematik=$request->Matematik;
        $ogrenci->Edebiyat=$request->Edebiyat;

        $ogrenci->save();

        $ogrenciler=notlar::all();
        return view('admin.kullanicilar.kullanıcıtemplate',compact('ogrenciler'));
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
        $ogretmenler=Ogretmen::all();
        return view('admin.ayarlar.ekle.ogretmenListe',compact('ogretmenler'));


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
