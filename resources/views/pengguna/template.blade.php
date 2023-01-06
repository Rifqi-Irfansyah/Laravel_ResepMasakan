<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ResepKu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('Gambar/logo-resepku.png')}}" rel="icon">
    <link href="{{asset('Gambar/logo-resepku.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('Arsha/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('Arsha/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('Arsha/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('Arsha/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('Arsha/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('Arsha/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset('Arsha/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v4.8.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

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
    <link rel="stylesheet" href="{{asset('AdminLte/dist/css/adminlte.min.css')}}">

    <style>
    .bg-success {
        border-radius: 10px 10px;
    }

    .btn-secondary {
        border-radius: 10px 10px;
    }

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

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="{{route('beranda')}}">ResepKu</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#resep">
                            Resep Makanan</a>
                    </li>
                    </li>
                    <li class="dropdown"><a class="nav-link scrollto" href="#kategori"><span>Kategori Makanan</span>
                            <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="nav-item">
                                <a href="{{route('makananBerat')}}">
                                    Makanan Berat
                                    <i class="fas fa-bread-slice nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('makananRingan')}}">
                                    Makanan Ringan
                                    <i class="fas fa-hamburger"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('minuman')}}">
                                    Minuman
                                    <i class="fas fa-mug-hot"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link scrollto" href="#bahan"><span>Bahan - Bahan</span>
                            <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="nav-item">
                                <a href="{{route('telur')}}">
                                    Telur
                                    <i class="fas fa-egg nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('ayam')}}">Daging Ayam
                                    <i class="fas fa-drumstick-bite nav-icon"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('sapi')}}">
                                    Daging Sapi
                                    <i class="fas fa-bacon nav-icon"></i>
                                </a>
                            </li>
                            <a href="{{route('buah')}}">
                                Buah-buahan
                                <i class="fas fa-apple-alt nav-icon"></i>
                            </a>
                        </ul>
                    </li>
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">Masuk Sebagai Admin</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    @yield('konten')


    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>ResepKu</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->

            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('Arsha/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('Arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Arsha/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('Arsha/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('Arsha/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('Arsha/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('Arsha/assets/js/main.js')}}"></script>

    <!-- jQuery -->
    <script src="{{asset('AdminLte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('AdminLte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('AdminLte/dist/js/adminlte.min.js')}}"></script>

</body>

</html>