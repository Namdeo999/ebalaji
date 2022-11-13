<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('page_title')</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.min.css') }}" />//
        <link rel="stylesheet" href="{{ asset('assets/user/css/fontawesome-free/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/user/css/tempusdominus-bootstrap-4.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/user/css/icheck-bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/user/css/jqvmap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/user/css/adminlte.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/user/css/OverlayScrollbars.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/user/css/daterangepicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/user/css/summernote-bs4.min.css') }}" />

        {{-- <link rel="stylesheet" href="{{ asset('assets/common/css/core.css') }}" /> --}}
        {{-- <link rel="stylesheet" href="{{ asset('assets/common/css/theme-default.css') }}" /> --}}

        <script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>

        <style>
            .sidebar .nav-link p{
                color:black;
            }
            .nav-sidebar>.nav-item .nav-icon {
                color:black;
            }
        </style>
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
                @include('layouts.user.header')
            </nav>
            <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #f4f6f9; ">
                @include('layouts.user.sidenav')
            </aside>

            <div class="container-fluid pt-4 pb-4">
                <div class="content-wrapper">
                    <section class="content ">
                        @yield('style')
                        @yield('content')
                        @yield('script')
                    </section>
                </div>
            </div>

            <aside class="control-sidebar control-sidebar-dark">
                @include('layouts.user.sidesetting')
            </aside>

            <footer class="main-footer fixed-bottom" style="padding: 5px;">
                <strong>Copyright &copy; 2021-2022 <a href="https://ebalajipay.com">Ebajaji Services</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block ">
                  <b>Version</b> 1.1
                </div>
            </footer>

        </div>
    </body>
    <script src="{{ asset('assets/user/js/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('assets/user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/sparkline.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/user/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/adminlte.js') }}"></script>
    <script src="{{ asset('assets/user/js/dashboard.js') }}"></script>
</html>
