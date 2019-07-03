<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EkleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
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
