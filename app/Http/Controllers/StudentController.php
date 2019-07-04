<?php

namespace App\Http\Controllers;

use App\Ekle;
use App\notlar;
use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{

    public function index()
    {
        $ogrenciler=Student::all();

        return view('admin.ayarlar.ekle.index',compact('ogrenciler'));
    }





    public function index2()
    {
        $ogrenciler=Student::all();

        return view('admin.ayarlar.ekle.ögretmenİndex',compact('ogrenciler'));
    }





   public function kaydet(Request $request){

       $ogrenci= new Student();
       $notogrenci=new notlar();
       $ogrenci->ogr_adi=$request->ogr_adi;
       $notogrenci->isim=$request->ogr_adi;
       $notogrenci->soyisim=$request->ogr_soyadi;
       $notogrenci->Numarasi=$request->ogr_numarasi;
       $ogrenci->ogr_soyadi=$request->ogr_soyadi;
       $ogrenci->ogr_numarasi=$request->ogr_numarasi;
       $ogrenci->ogr_devamsizlik=$request->ogr_devamsizlik;
       $ogrenci->ogr_telefon=$request->ogr_telefon;
       $ogrenci->ogr_sifre=$request->ogr_sifre;
       $ogrenci->email=$request->email;

       $notogrenci->save();
       $ogrenci->save();

       $ogrenciler=Student::all();
       return view('admin.ayarlar.ekle.index',compact('ogrenciler'));

   }
   



    public function notlar ()
    {
        $ogrenciler=notlar::all();
        return view("admin.ayarlar.ekle.ögr_göster",compact('ogrenciler'));
    }




    public function notgir ($id)
    {
        $ogrenci=notlar::find($id);
        return view("admin.ayarlar.ekle.not_düzen",compact('ogrenci'));
    }



    
    public function güncelle_not (Request $request,$id)
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

        $ogrenciler=Student::all();
        return view('admin.ayarlar.ekle.index',compact('ogrenciler'));

    }
}
