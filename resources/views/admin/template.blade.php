<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
    <link href="{{asset('Gambar/logo-resepku.png')}}" rel="icon">
    <link href="{{asset('Gambar/logo-resepku.png')}}" rel="apple-touch-icon">
    <title>Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cantarell">
    <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sansita Swashed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sniglet' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sriracha' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Viga' rel='stylesheet'>
    <link href='https://fontawesome.com/v5/icons/' rel='stylesheet'>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('AdminLte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLte/dist/css/adminlte.min.css')}}">
    <style>
    body {
        font-family: 'Cantarell';
    }

    h4 {
        font-family: "Sriracha";
    }

    h3 {
        font-family: "Sriracha";
        size: 22px;
    }

    .resep {
        font-family: "Sniglet";
    }

    body {
        font-family: "Viga";
    }

    .flex-fill {
        flex: 1
    }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark fixed-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{route('berandaadmin')}}" class="nav-link ">Beranda</a>
                </li>
            </ul>

            @yield('headbar')

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                @yield('headbarsearch')

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link"
                        onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                        <i class="fa fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        @yield('konten')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('beranda')}}" class="brand-link bg-dark">
                <img src="{{asset('Gambar/logoo.png')}}" alt="Resepku Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">ResepKu</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar sidebar-light">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('storage/Gambar/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-dark">{{auth()->user()->name}}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        @yield('sidebar')

                        <li class="nav-item">
                            <a href="{{route('logout')}}" class="nav-link"
                                onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                                <i class="fa fa-sign-out-alt nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark ">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2022-2023 <a href="#">Rifqi Irfansyah</a>.</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('AdminLte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('AdminLte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('AdminLte/dist/js/adminlte.min.js')}}"></script>
</body>

</html>