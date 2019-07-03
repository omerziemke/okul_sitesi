@extends('admin.template')

@section('icerik')
    <div style="float: right; margin:15px 5px 0;"><a href="{{route("ogretmen.index")}}" class="btn btn-success">Ögretmen Ekle</a></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Ögretmen liste</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Ögretmen İsim</th>
                    <th>Ögretmen Soyisim</th>
                    <th>Ögretmen Email</th>
                    <th>Ögretmen Telefon</th>
                    <th>Ögretmen Sifre</th>
                    <th>Düzünle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>

                @foreach($ogretmenler as $ogretmen)

                    <tr class="gradeX">
                        <td>{{$ogretmen->ogrt_adi}}</td>
                        <td>{{$ogretmen->ogrt_soyadi}}</td>
                        <td>{{$ogretmen->email}}</td>
                        <td>{{$ogretmen->ogrt_telefon}}</td>
                        <td>{{$ogretmen->ogrt_sifre}}</td>



                       
                             <form action="{{route('ogrtdüzelt',$ogretmen->id)}}" method="post">
                            {{csrf_field()}}
                            <td>
                                <button type="submit" value="Düzenle" class="btn btn-success btn-mini">Düzenle</button>
                            </td>

                        </form>
                        <form action="{{route('ogrtsil',$ogretmen->id)}}" method="post">
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