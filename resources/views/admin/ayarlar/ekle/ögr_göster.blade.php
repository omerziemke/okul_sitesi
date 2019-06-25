@extends('admin.ögrenci-template')

@section('icerik')
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Ögretmen liste</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Ögrenci Numarasi</th>
                    <th>Ögrenci İsim</th>
                    <th>Ögrenci Soyisim</th>
                    <th>Fizik</th>
                    <th>Kimya</th>
                    <th>Biyoloji</th>
                    <th>Edebiyat</th>
                    <th>Matematik</th>

                </tr>
                </thead>
                <tbody>

                @foreach($ogrenciler as $ogrenci)

                    <tr class="gradeX">
                        <td>{{$ogrenci->Numarasi}}</td>
                        <td>{{$ogrenci->isim}}</td>
                        <td>{{$ogrenci->soyisim}}</td>
                        <td>{{$ogrenci->Fizik}}</td>
                        <td>{{$ogrenci->Kimya}}</td>
                        <td>{{$ogrenci->Biyoloji}}</td>
                        <td>{{$ogrenci->Edebiyat}}</td>
                        <td>{{$ogrenci->Matematik}}</td>

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