<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/','EkleController@login')->name('anasayfa');

Route::group(['prefix'=>'yonetim','middleware'=>'admin'],function(){
    Route::get('/','OkulController@index')->name('yonetim.index');
   // Route::post('/','OkulController@index')->name('yonetim.index');
    //Route::resource('ayarlar','AyarController');
    Route::post('ayarlar/{id}','AyarController@update')->name('ayarlar.update');
    Route::get('cikis','AyarController@cikis')->name('cikis');

    Route::get('/ogrtdüzen','EkleController@ogrtdüzenle')->name('ogrtdüzenle');
    Route::post('/ogrtdüzenn/{id}','EkleController@ogrtdüzen')->name('ogrtdüzen');

    Route::get('/ekle','EkleController@index')->name('ekle.index');
    Route::post('/ekle/store','EkleController@store')->name('ekle.store');

    Route::post('kaydet','StudentController@kaydet')->name('kaydet');
    Route::post('kaydet2','StudentController@kaydet2')->name('kaydet2');
    Route::get('ekle/index','StudentController@index')->name('ekle.index');
    Route::get('ekle/index2','StudentController@index2')->name('ekle.index2');
    Route::get('ogrenci/notlar','StudentController@notlar')->name('ogrenci.notlar');
    Route::post('ogrenci/notgir/{id}','StudentController@notgir')->name('notgir');
    Route::post('güncelle/not/{id}','StudentController@güncelle_not')->name('güncelle/not');

    Route::get('adminogrenci/notlar','AyarController@adminnotlar')->name('adminogrenci.notlar');

    Route::get('iletisim','AyarController@iletisim')->name('iletisim');
    Route::post('iletisim','AyarController@iletisimgonder')->name('iletisim.gonder');


    Route::resource('ekle','EkleController');
    Route::post('ekle/düzen2/{id}','EkleController@düzen2')->name('düzenle2');
    Route::post('ekle/düzen/{id}','EkleController@düzen')->name('düzenle');
    Route::get('ekle/edit','EkleController@edit')->name('ekle.edit');
    Route::get('ekle','EkleController@git')->name('ekle');
    Route::get('ekle2','EkleController@git2')->name('ekle2');

    Route::post('sil/{id}','EkleController@destroy')->name('sil');
    Route::post('sil2/{id}','EkleController@destroy2')->name('sil2');
    Route::post('ogrtsil/{id}','EkleController@ogrtsil')->name('ogrtsil');
    Route::post('güncelle/{id}','EkleController@güncelle')->name('güncelle');
    Route::post('güncelle2/{id}','EkleController@güncelle2')->name('güncelle2');
    Route::post('ogrtgüncelle/{id}','EkleController@ogrtgüncelle')->name('ogrtgüncelle');

    Route::get('ogretmen/index','OgretmenController@index')->name('ogretmen.index');
    Route::post('ogretmen/ekle','OgretmenController@store')->name('ogretmen.ekle');
    Route::get('ogretmen/giris','OgretmenController@giris')->name('ogretmen.giris');
    Route::get('ögrt_ogrenci/notlar','OgretmenController@notlar')->name('ogretmen.notlar');
    Route::post('ogrtnotgir/{id}','OgretmenController@ogrt_not_gir')->name('ogretmen.notgir');
    Route::post('ogrtgüncelle/not/{id}','OgretmenController@ogrt_not_güncelle')->name('ogrtgüncelle.not');

    Route::get('kullaniciekle','EkleController@kullaniciekle')->name('kullanici.ekle');
    Route::post('kullanicikayit','EkleController@kullanicikayit')->name('kullanici.kayit');
    Route::get('/admin', 'AdminController@index')->name('admin');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin'],function (){
    Route::get('home', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/giris', 'Auth\AdminLoginController@giris')->name('admin.giris');

});


Route::get('ogretmen/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');