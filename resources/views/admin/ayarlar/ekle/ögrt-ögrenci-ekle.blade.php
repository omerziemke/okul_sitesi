@extends('admin.kullanicilar.kullanıcıtemplate')

@section('icerik')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Ögrenci Ekle</h5>
                </div>
                <div class="widget-content nopadding">

                    <form action="{{route('kaydet2')}}" method="post" class="form-horizontal" >
                        {{csrf_field()}}
                        <div class="contro l-group">
                            <label class="control-label">Ögrenci Numarası :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_numarasi" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci İsim :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_adi"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci Soyisim :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_soyadi" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci Telofon :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_telefon"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci Email :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="email"  />
                            </div>
                        </div> <div class="control-group">
                            <label class="control-label">Ögrenci Devamsızlık :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogr_devamsizlik"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Sifreniz :</label>
                            <div class="controls">
                                <input type="text"  class="span11" name="ogr_sifre"   />
                            </div>
                        </div>



                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Ekle</button>
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