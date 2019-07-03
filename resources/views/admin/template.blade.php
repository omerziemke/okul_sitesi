<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/admin/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/admin/css/fullcalendar.css" />
    <link rel="stylesheet" href="/admin/css/matrix-style.css" />
    <link rel="stylesheet" href="/admin/css/matrix-media.css" />
    <link href="/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="/admin/css/jquery.gritter.css" />
    @yield('css')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Not Sistemi</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i>Profilim</a></li>
                <li class="divider"></li>
                <li><a href="{{route('cikis')}}"><i class="icon-key"></i>Cikis</a></li>
            </ul>
        </li>
    </ul>>
    </div>

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class=""><a href="{{route('yonetim.index')}}"><i class="icon icon-home"></i> <span>Yönetim Anasayfa</span></a> </li>
        <li class=""><a href="{{route('ekle.index')}}"><i class="icon icon-home"></i> <span>Kayit Ekle</span></a> </li>
        <li class=""><a href="{{route('ogretmen.index')}}"><i class="icon icon-home"></i> <span>Ögretmen Kayit Ekle</span></a> </li>
        <li class=""><a href="{{route('ekle.index')}}"><i class="icon icon-home"></i> <span>Ögrenci Kayit Yönetimi</span></a> </li>
        <li class=""><a href="{{route('adminogrenci.notlar')}}"><i class="icon icon-home"></i> <span>Ögrenci Notları</span></a> </li>
         <li class=""><a href="{{route('yonetim.ogrtdüzenle')}}"><i class="icon icon-home"></i> <span>Ögretmen Kayıt</span></a> </li>
        
        <li class=""><a href="{{route('iletisim')}}"><i class="icon icon-home"></i> <span>Email Gönder</span></a> </li>
        
    </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

@yield('icerik')
        </div>

            </div>



<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="/admin/js/excanvas.min.js"></script>
<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/jquery.ui.custom.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>
<script src="/admin/js/jquery.flot.min.js"></script>
<script src="/admin/js/jquery.flot.resize.min.js"></script>
<script src="/admin/js/jquery.peity.min.js"></script>
<script src="/admin/js/fullcalendar.min.js"></script>
<script src="/admin/js/matrix.js"></script>
<script src="/admin/js/matrix.dashboard.js"></script>
<script src="/admin/js/jquery.gritter.min.js"></script>
<script src="/admin/js/matrix.interface.js"></script>
<script src="/admin/js/matrix.chat.js"></script>
<script src="/admin/js/jquery.validate.js"></script>
<script src="/admin/js/matrix.form_validation.js"></script>
<script src="/admin/js/jquery.wizard.js"></script>
<script src="/admin/js/jquery.uniform.js"></script>
<script src="/admin/js/select2.min.js"></script>
<script src="/admin/js/matrix.popover.js"></script>
<script src="/admin/js/jquery.dataTables.min.js"></script>
<script src="/admin/js/matrix.tables.js"></script>
@yield('js')
<script type="text/javascript">


</script>
</body>
</html>
