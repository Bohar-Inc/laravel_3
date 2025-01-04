<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
@include('layouts.partials._head')
    @vite('resources/js/app.js')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
@include('layouts.partials._navbar')
@include('layouts.partials._sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
        @include('flash::message')
        <!-- Content Header (Page header) -->
        @yield('content')

    </div>
    <!-- /.content-wrapper -->
@include('layouts.partials._footer')
</div>
<!-- ./wrapper -->
@include('layouts.partials._footer-script')
</body>
</html>
