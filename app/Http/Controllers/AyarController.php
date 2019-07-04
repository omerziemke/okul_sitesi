<?php

namespace App\Http\Controllers;

use App\Mail\iletisimformu;
use App\notlar;
use App\Ogretmen;
use Illuminate\Http\Request;
use App\ayar;
use Illuminate\Support\Facades\Mail;

class AyarController extends Controller
{
   


    public function cikis()
    {
        auth()->logout();
        return  redirect('/');
    }




    public function adminnotlar ()
    {
        $ogrenciler=notlar::all();
        return view("admin.ayarlar.ekle.ögr_listte",compact('ogrenciler'));
    }
   




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

   




    public function iletisim()
    {
     return view('admin/iletisimformu');
    }





    public function iletisimgonder(Request $request)
    {

       $bilgiler=array(
           'adsoyad'=>request('adsoyad'),
           'email'=>request('email'),
           'mesaj'=>request('mesaj')
       );
       $email=$request->email;
       Mail::to($email)->send(new iletisimformu($bilgiler));
       return view('admin.template');
    }

}
