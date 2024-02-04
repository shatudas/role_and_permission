<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Roles & Permission</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

    
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                     <span class=""><i class="fa fa-gear"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">{{ Auth::User()->name }}</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" 
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="dropdown-item">
                        Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                     </form>
                    </div>
                </li>
            </ul>
        </nav>

        @include('backend.layouts.sideber')

        @yield('content')


        <footer class="main-footer">
            <strong> Roles & Permission In Laravel </strong>
        </footer>

 
        <aside class="control-sidebar control-sidebar-dark">
        </aside>

    </div>


    <script src="{{ asset('backend') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/chart.js/Chart.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/sparklines/sparkline.js"></script>
    <script src="{{ asset('backend') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="{{ asset('backend') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('backend') }}/dist/js/adminlte.js"></script>
    <script src="{{ asset('backend') }}/dist/js/demo.js"></script>
    <script src="{{ asset('backend') }}/dist/js/pages/dashboard.js"></script>
</body>
</html>
