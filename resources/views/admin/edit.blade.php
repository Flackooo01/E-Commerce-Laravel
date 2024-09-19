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
{{--
    <link rel="stylesheet" href="{{asset('/admin_panel/css/style.datatable.css')}}">  --}}

    {{-- data table script --}}

    <!-- Datatables css -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.bootstrap5.css">

    {{-- modal --}}
    <!-- MDB -->
    {{-- <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet"/> --}}



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
                    <li ><a href="{{url('admin/product/category')}}"><i class="icon-grid"></i>Category </a></li>
                    <li><a href="{{url('admin/product/create')}}"><i class="icon-grid"></i> Add Product </a></li>
                    <li class="active"><a href="{{url('admin/user/table')}}"><i class="icon-grid"></i> Table</a></li>
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
                <h2 class="h5 no-margin-bottom">Tables</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ul>
        </div>

        {{-- content --}}
        @include('admin.product.edit')
        {{-- End of Content --}}

        {{-- Footer --}}
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


{{-- data table Script --}}

<script src="{{asset('/admin_panel/js/data_table.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.bootstrap5.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>



</body>
</html>
