<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Adventra</title>
    @yield('script')

    @include('includes.admin.link')
    @yield('link')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake rounded-circle" src="{{ asset('img/logo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
            <h1>Loading</h1>
        </div> --}}

        <!-- Navbar -->
        @include('includes.admin.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('includes.admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        @include('includes.admin.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('includes.admin.script')
</body>

</html>
