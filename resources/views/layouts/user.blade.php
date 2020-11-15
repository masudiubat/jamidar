<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.user.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('partials.user.header')
        <!-- /.navbar -->

        <!-- Main Sidebar -->
        @include('partials.user.sidebar')
        <!-- /. Main Sidebar -->

        <!-- Content Wrapper. Contains page content -->
        @include('partials.user.breathcam')
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer">
        @include('partials.user.footer')
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('partials.user.default-js')
</body>

</html>