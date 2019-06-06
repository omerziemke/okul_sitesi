<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{

    public function index()
    {
        $ogrenciler=Student::all();

        return view('admin.ayarlar.ekle.index',compact('ogrenciler'));
    }


   public function kaydet(Request $request){



       $ogrenci= new Student();
       $ogrenci->ogr_adi=$request->ogr_adi;
       $ogrenci->ogr_soyadi=$request->ogr_soyadi;
       $ogrenci->ogr_numarasi=$request->ogr_numarasi;
       $ogrenci->ogr_devamsizlik=$request->ogr_devamsizlik;
       $ogrenci->ogr_telefon=$request->ogr_telefon;
       $ogrenci->ogr_sifre=$request->ogr_sifre;
       $ogrenci->email=$request->email;


       $ogrenci->save();

       $ogrenciler=Student::all();
       return view('admin.ayarlar.ekle.index',compact('ogrenciler'));

   }
}
