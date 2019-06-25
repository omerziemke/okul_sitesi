@extends('admin.kullanicilar.kullanıcıtemplate')

@section('icerik')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Ögrenci Notları Düzenle</h5>
                </div>
                <div class="widget-content nopadding">

                    <form action="{{route('ogrtgüncelle.not',$ogrenci->id)}}"  method="POST" class="form-horizontal" >
                        {{csrf_field()}}


                        <div class="contro l-group">
                            <label class="control-label">Ögrenci Numarası :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="Numarasi" value="{{$ogrenci->Numarasi}}" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci İsim :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="isim" value="{{$ogrenci->isim}}" required/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögrenci Soyisim :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="soyisim" value="{{$ogrenci->soyisim}}" required/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Fizik :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="Fizik" value="{{$ogrenci->Fizik}}"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Kimya :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="Kimya" value="{{$ogrenci->Kimya}}"  />
                            </div>
                        </div> <div class="control-group">
                            <label class="control-label">Biyoloji :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="Biyoloji" value="{{$ogrenci->Biyoloji}}"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Matematik :</label>
                            <div class="controls">
                                <input type="text"  class="span11" name="Matematik" value="{{$ogrenci->Matematik}}"   />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Edebiyat :</label>
                            <div class="controls">
                                <input type="text"  class="span11" name="Edebiyat" value="{{$ogrenci->Edebiyat}}"   />
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