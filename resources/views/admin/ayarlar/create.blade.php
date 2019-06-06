@extends('admin/template')

@section('icerik')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Kayıt Güncelle</h5>
                </div>
                <div class="widget-content nopadding">

                    <form action="{{url('yonetim/ayarlar/update')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="control-group">
                            <label class="control-label">Ögrenci Numarası :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_numarasi" value="{{$ogrenci->ogr_numarasi}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci İsim :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_adi" value="{{$ogrenci->ogr_adi}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci Soyisim :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_soyadi" value="{{$ogrenci->ogr_soyadi}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci Telofon :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_telefon" value="{{$ogrenci->ogr_telefon}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci Email :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="email" value="{{$ogrenci->email}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Sifreniz :</label>
                            <div class="controls">
                                <input type="text"  class="span11" name="ogr_sifre" value="{{$ogrenci->ogr_sifre}}"  />
                            </div>
                        </div>



                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Güncelle</button>
                        </div>
                    </form>
                </div>


        </div>

    </div>



@endsection


@section('css')

@endsection
@section('js')

@endsection