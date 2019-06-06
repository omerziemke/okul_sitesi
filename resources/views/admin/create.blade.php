@extends('admin/template')

@section('icerik')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Ögretmen Ekle</h5>
                </div>
                <div class="widget-content nopadding">

                    <form action="{{route('ogretmen.ekle')}}" method="post" class="form-horizontal" >
                        {{csrf_field()}}

                        <div class="control-group">
                            <label class="control-label">Ögretmen İsim :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogrt_adi" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögretmen Soyisim :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogrt_soyadi" required/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögretmen Telofon :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="ogrt_telefon" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ögretmen Email :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="email"  required/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Sifreniz :</label>
                            <div class="controls">
                                <input type="text"  class="span11" name="ogrt_sifre"  required />
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