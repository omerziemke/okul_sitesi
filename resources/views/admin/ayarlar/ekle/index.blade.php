@extends('admin.template')

@section('icerik')
    <div style="float: right; margin:15px 5px 0;"><a href="{{route("ekle")}}" class="btn btn-success">Ögrenci Ekle</a></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Ögrenci liste</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Ögrenci Numarası</th>
                    <th>Ögrenci İsmi</th>
                    <th>Ögrenci Soyisim</th>
                    <th>Ögrenci Email</th>
                    <th>Ögrenci Telefon</th>
                    <th>Ögrenci Sifre</th>
                    <th>Ögrenci Devamsızlık</th>
                    <th>Düzünle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>

                @foreach($ogrenciler as $ogrenci)

                    <tr class="gradeX">
                        <td>{{$ogrenci->ogr_numarasi}}</td>
                        <td>{{$ogrenci->ogr_adi}}</td>
                        <td>{{$ogrenci->ogr_soyadi}}</td>
                        <td>{{$ogrenci->email}}</td>
                        <td>{{$ogrenci->ogr_telefon}}</td>
                        <td>{{$ogrenci->ogr_sifre}}</td>
                        <td>{{$ogrenci->ogr_devamsizlik}}</td>


                        <form action="{{route('düzenle',$ogrenci->id)}}" method="post">
                            {{csrf_field()}}
                            <td>
                                <button type="submit" value="Sil" class="btn btn-success btn-mini">Düzenle</button>
                            </td></form>
                        <form action="{{route('sil',$ogrenci->id)}}" method="post">
                        {{csrf_field()}}
                        <td>
                            <button type="submit" value="Sil" class="btn btn-danger btn-mini">Sil</button>
                        </td>

                        </form>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>



@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('/admin/css/uniform.css')}}" />
    <link rel="stylesheet" href="{{asset('/admin/css/select2.css')}}" />

@endsection
@section('js')
    <script src="{{asset('/admin/js/excanvas.min.js')}}"></script>
    <script src="{{asset('/admin/js/jquery.min.js')}}"></script>

    <script src="/admin/js/jquery.ui.custom.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>

    <script src="/admin/js/jquery.dataTables.min.js"></script>
    <script src="/admin/js/matrix.tables.js"></script>
@endsection