<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Dark Bootstrap Admin </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('/admin_panel/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('/admin_panel/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('/admin_panel/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('/admin_panel/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('/admin_panel/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('/admin_panel/img/favicon.ico')}}">
<!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
    {{-- header --}}
    @include('admin.admin_components.admin_header')
<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{asset('/admin_panel/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5">Mark Stephen</h1>
                <p>Web Designer</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <span class="heading">Main</span>
        <ul class="list-unstyled">
                    <li><a href="{{route('dashboard')}}"><i class="icon-home"></i>Home </a></li>
                    <li class="active"><a href="{{url('admin/product/category')}}"><i class="icon-grid"></i>Category </a></li>
                    <li><a href="{{url('admin/product/create')}}"><i class="icon-grid"></i> Add Product </a></li>
                    <li><a href="{{url('admin/user/table')}}"><i class="icon-grid"></i> Table</a></li>
                    {{-- <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
                    <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li> --}}
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
                        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                        </ul>
                    </li>
                {{-- <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
                </ul><span class="heading">Extras</span>
                <ul class="list-unstyled">
                <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
                <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
                <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li> --}}
        </ul>
    </nav>
    <!-- Sidebar Navigation end-->

    <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Category</h2>
            </div>
        </div>

        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ul>
        </div>
        @include('admin.admin_components.admin_footer')
    </div>
</div>
<!-- JavaScript files-->
<script src="{{asset('/admin_panel/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/admin_panel/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('/admin_panel/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/admin_panel/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset('/admin_panel/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('/admin_panel/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('/admin_panel/js/charts-home.js')}}"></script>
<script src="{{asset('/admin_panel/js/front.js')}}"></script>

</body>
</html>

