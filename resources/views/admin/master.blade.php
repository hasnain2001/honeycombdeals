<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2024 08:07:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | HCD</title>
       <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">
    <link href="{{ asset('css/summernote-bs4.min.css') }}" rel="stylesheet">

<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min2167.css?v=3.2.0') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">


    <style>
        .navbar-username {
    font-size: 2.40rem; /* Adjust the size as needed */
}

    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">



  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      @if (Auth::check())
        <a class="nav-link navbar-username dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle text-success"></i>
          <span class="text-dark font-weight-bold">{{ Auth::user()->name }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Profile</span>
          <div class="dropdown-divider"></div>
          <a href="profile" class="dropdown-item">
            <i class="fas fa-user mr-2 text-primary"></i> My Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt mr-2 text-danger"></i> Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      @else
        <a class="nav-link" href="{{ route('login') }}">
          <i class="far fa-user-circle"></i>
          Guest
        </a>
      @endif
    </li>
  </ul>
</nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="{{ route('dashboard') }}" class="brand-link">
                <img src="{{ asset('front/assets/images/icon.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">HoneyCombDeals</span>
            </a>

            <div class="sidebar">

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Setup Manager
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.category') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Categories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.store') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stores</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.coupon') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Coupons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.network') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Network</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.blog') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Blog</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>

            </div>

        </aside>

        {{-- Main Content Here --}}
            @yield('main-content')
        {{-- Main Content Here --}}


        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io/">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote(
             {height:600,
            }
        ); // Replace '#summernote' with the ID of your textarea
    });
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/super-build/ckeditor.js"></script>
<script src="{{ asset('front/assets/js/ckeditor.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>


    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>

    <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>

    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <script src="{{ asset('admin/dist/js/adminlte2167.js?v=3.2.0') }}"></script>

    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>

    <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
</body>


</html>
