@extends('admin.template')

@section('icerik')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Ögrenci Düzenle</h5>
                </div>
                <div class="widget-content nopadding">

                    <form action="{{route('güncelle',$ogrenci->id)}}"  method="POST" class="form-horizontal" >
                        {{csrf_field()}}


                        <div class="contro l-group">
                            <label class="control-label">Ögrenci Numarası :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_numarasi" value="{{$ogrenci->ogr_numarasi}}" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci İsim :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_adi" value="{{$ogrenci->ogr_adi}}" required/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci Soyisim :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_soyadi" value="{{$ogrenci->ogr_soyadi}}" required/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci Telofon :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_telefon" value="{{$ogrenci->ogr_telefon}}"  required/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci Email :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="email" value="{{$ogrenci->email}}"  required/>
                            </div>
                        </div> <div class="control-group">
                            <label class="control-label">Ögrenci Devamsızlık :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_devamsizlik" value="{{$ogrenci->ogr_devamsizlik}}"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Sifreniz :</label>
                            <div class="controls">
                                <input type="text"  class="span11" name="ogr_sifre" value="{{$ogrenci->ogr_sifre}}"   required/>
                            </div>
                        </div>



                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Düzenle</button>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </div>





@endsection


@section('css')

@endsection
@section('js')

@endsection