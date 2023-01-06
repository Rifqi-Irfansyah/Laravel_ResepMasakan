<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link href="{{asset('Gambar/logo-resepku.png')}}" rel="icon">
    <link href="{{asset('Gambar/logo-resepku.png')}}" rel="apple-touch-icon">
    <title>
        Admin | ResepKu
    </title>
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

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset('Argon/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('Argon/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('Argon/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('Argon/assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLte/dist/css/adminlte.min.css')}}">
    <style>
    .bg-success {
        border-radius: 10px 10px;
    }

    .btn-secondary {
        border-radius: 10px 10px;
    }

    body {
        font-family: "Viga";
    }
    </style>

</head>

<body class="g-sidenav-show bg-white">
    <aside
        class="sidenav bg-primary navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="{{route('beranda')}}">
                <img src="{{asset('Gambar/logo-resepku.png')}}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 text-white font-weight-bold">ResepKu</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('berandaadmin')}}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-white text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1 text-white">Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('editresep')}}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-white text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1 text-white">Edit Resep</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('resepadmin')}}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-white text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1 text-white">Resep Makanan</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('logout')}}"
                        onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1 text-white">Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar bg-dark navbar-main navbar-expand-lg px-0 my-3 mx-4 shadow-none border-radius-xl"
            id="navbarBlur">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Tables</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <form action="/editresep/cari" method="GET">
                            <div class="input-group">
                                <span class="input-group-text text-body" type="submit"><i class="fas fa-search"
                                        aria-hidden="true"></i></span>
                                <input class="form-control" type="text" placeholder="Search" name="cari"
                                    value="{{ old('cari') }}">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="{{route('logout')}}" class="nav-link text-white p-0"
                                onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                                <i class="ni ni-single-02 text-danger text-sm opacity-10"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        @yield('content')

        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                            document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="{{asset('Argon/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('Argon/assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('Argon/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('Argon/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script src="{{asset('AdminLte/plugins/jquery/jquery.min.js')}}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('Argon/assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>
</body>

</html>