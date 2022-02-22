@extends('layouts.base')
@section('body')
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        @include('layouts.nav')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.sidenav')

        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('layouts.content-header')
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            {{ $slot }}
        </section>
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
@endsection