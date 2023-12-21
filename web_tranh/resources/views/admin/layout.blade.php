<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.header.header')


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('/admin/images/AdminLTELogo.png') }} " alt="AdminLTELogo"
                height="60" width="60">
        </div>

        @include('admin.header.menu')

        @include('admin.header.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->
        @include('admin.footer.footer')


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('admin.footer.js')
</body>

</html>
