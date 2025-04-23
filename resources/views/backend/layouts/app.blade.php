<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <title>AdminLTE 3 | Dashboard</title> --}}
  <meta name="keywords" content="Laravel, PHP, Blade, Meta Tags">
  <meta name="author" content="MD. Mazharul Islam">
  <title>@yield('title', 'Default Title')</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> --}}
  <link rel="stylesheet" href="{{url(asset('ui/plugins/fontawesome-free/css/all.min.css'))}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{url(asset('ui/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'))}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url(asset('ui/plugins/icheck-bootstrap/icheck-bootstrap.min.css'))}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url(asset('ui/plugins/jqvmap/jqvmap.min.css"'))}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url(asset('ui/dist/css/adminlte.min.css'))}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url(asset('ui/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'))}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url(asset('ui/plugins/daterangepicker/daterangepicker.css'))}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url(asset('ui/plugins/summernote/summernote-bs4.min.css'))}}">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap4.min.css" />

  @stack('çss')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{url(asset('ui/dist/img/AdminLTELogo.png'))}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('backend.partials.topbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  @include('backend.partials.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        @yield('content')
    
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    @include('backend.partials.footer')


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url(asset('ui/plugins/jquery/jquery.min.js'))}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url(asset('ui/plugins/jquery-ui/jquery-ui.min.js'))}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url(asset('ui/plugins/bootstrap/js/bootstrap.bundle.min.js'))}}"></script>
<!-- ChartJS -->
<script src="{{url(asset('plugins/chart.js/Chart.min.js'))}}"></script>
<!-- Sparkline -->
<script src="{{url(asset('ui/plugins/sparklines/sparkline.js'))}}"></script>
<!-- JQVMap -->
<script src="{{url(asset('ui/plugins/jqvmap/jquery.vmap.min.js'))}}"></script>
<script src="{{url(asset('ui/plugins/jqvmap/maps/jquery.vmap.usa.js'))}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url(asset('ui/plugins/jquery-knob/jquery.knob.min.js'))}}"></script>
<!-- daterangepicker -->
<script src="{{url(asset('ui/plugins/moment/moment.min.js'))}}"></script>
<script src="{{url(asset('ui/plugins/daterangepicker/daterangepicker.js'))}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url(asset('ui/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'))}}"></script>
<!-- Summernote -->
<script src="{{url(asset('plugins/summernote/summernote-bs4.min.js'))}}"></script>
<!-- overlayScrollbars -->
<script src="{{url(asset('ui/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'))}}"></script>
<!-- AdminLTE App -->
<script src="{{url(asset('ui/dist/js/adminlte.js'))}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url(asset('ui/dist/js/demo.js'))}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url(asset('ui/dist/js/pages/dashboard.js'))}}"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap4.min.js"></script>
@stack('js')
</body>
</html>
