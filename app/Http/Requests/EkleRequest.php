<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EkleRequest extends FormRequest
{
    

    public function authorize()
    {
        return false;
    }



    public function rules()
    {
        return [
            'ogr_numarasi'=>'required',
            'ogr_adi'=>'required',
            'ogr_soyadi'=>'required',
            'ogr_telefon'=>'required',
            'ogr_sifre'=>'required',
            'ogr_devamsizlik'=>'required',
            'email'=>'required',
        ];
    }

    
}
