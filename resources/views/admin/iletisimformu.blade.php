@extends('admin/template')

@section('icerik')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>İletişim Formu</h5>
                </div>
                <div class="widget-content nopadding">

                    <form  action="{{ route('iletisim.gonder') }}" method="POST" class="form-horizontal" >
                        @csrf


                        <div class="control-group">
                            <label class="control-label">Ad Soyad :</label>
                            <div class="controls">
                                <input id="email" type="text" class="span11" name="adsoyad" required>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Email :</label>
                                <div class="controls">
                                    <input id="email" type="text" class="span11 " name="email" required>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Mesajınız :</label>
                                    <div class="controls">
                                        <input id="email" type="text" class="span11" name="mesaj" required>
                                    </div>


                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Formu Gönder</button>
                            </div>
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