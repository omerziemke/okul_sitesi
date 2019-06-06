@extends('admin/template')

@section('icerik')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Yeni Ögrenci Ekle</h5>
                </div>
                <div class="widget-content nopadding">

                    <form method="POST" action="{{ route('kullanici.kayit') }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="contro l-group">
                            <label class="control-label">Yetki :</label>
                            <div class="controls">
                                <select name="yetki" class="span11">
                                    <option value="" selected>Standart Kullanıcı</option>
                                    <option value="admin" >Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="contro l-group">
                            <label class="control-label">Kullanıcı :</label>
                            <div class="controls">
                                <input id="name" type="text" class="span11 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>


                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Ögrenci Email :</label>
                            <div class="controls">
                                <input id="email" type="email" class="span11 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>



                        <div class="control-group">
                            <label class="control-label">Sifreniz :</label>
                            <div class="controls">
                                <input id="password" type="password" class="span11 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Sifreniz Tekrar :</label>
                            <div class="controls">
                                <input id="password" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">


                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Kullanıcı Ekle</button>
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