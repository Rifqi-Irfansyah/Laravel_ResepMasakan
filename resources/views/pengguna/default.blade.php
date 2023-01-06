<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ResepKu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- source gambar: freepik -->
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

    <!--==Using-Font-Awesome-for-Icons=============================-->
    <script src="https://kit.fontawesome.com/6bd6c771de.js" crossorigin="anonymous"></script>
    <!--==Swiper-css===============================================-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

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
    <link rel="stylesheet" href="{{asset('AdminLte/dist/css/adminlte.min.css')}}" rel="stylesheet">

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
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="{{route('beranda')}}">ResepKu</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#resep">Resep Makanan</a>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center bg-white">
        <div class="container-fluid">

            <!-- [url=https://postimg.cc/fVLWP6tZ][img][/img][/url][url=https://poemsonly.com/category/sad]really sad poems that will make you cry[/url] -->

            <div class="bg-image" style="
                    background-image    : url('https://i.postimg.cc/nLJnQ93Z/bg-resep.jpg');
                    background-size     :cover;
                    background-repeat   :no-repeat;
                    background-position :center center;
                    
                ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                            data-aos="fade-up" data-aos-delay="200">
                            <h1>Resep Yang Anda <br>Cari Ada Disini !!</h1>
                            <h2>Temukanlah Resep Kesukaan Anda <br>dan Cobalah Membuatnya</h2>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                            <img src="{{('Arsha/assets/img/hero-img2.png')}}" class="img-fluid animated" alt="">
                        </div>
                    </div>
                </div>

            </div>
    </section><!-- End Hero -->
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>About Us</h2>
            </div>
            <div class="row content text-dark">
                <div class="col-lg-6">
                    <p>
                        ResepKu adalah sebuah website yang dapat memberikan berbagai resep modern, dengan adanya
                        Resepku anda bisa mengetahui resep makanan atau minuman. Anda dapat membuat makanan sendiri
                        tanpa harus membeli
                    </p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Anda dapat mencari resep - resep sesuai dengan kategori ataupun sesuai dengan bahan-bahan
                        persediaan di dapur anda
                    </p>
                </div>
            </div>
        </div>
    </section><!-- End About Us Section -->

    <section id="carousel" class="konten">
        <div class="container col-lg-10" data-aos="fade-up">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{('Arsha/assets/img/1.png')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{('Arsha/assets/img/2.png')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{('Arsha/assets/img/3.png')}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!--==Slider Kategori==============-->
    <section id="kategori" class="konten">
        <div class="cotainer" data-aos="fade-up">
            <div class="container">
                <div class="card bg-success mx-3">
                    <div class="swiper mySwiper card-body bg-success mx-3">
                        <h5>Kategori</h5>
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-content px-3 py-3" align="center">
                                        <div class="image">
                                            <img src="{{ asset('Gambar/kategori1.png') }}" alt="">
                                        </div>
                                        <div class="text-secondary">Makanan Berat</div>
                                        <a width="100%" href="{{route('makananBerat')}}"
                                            class="btn btn-block btn-secondary">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-content px-3 py-3" align="center">
                                        <div class="image">
                                            <img src="{{ asset('Gambar/kategori2.png') }}" alt="">
                                        </div>
                                        <div class="text-secondary">Makanan Ringan</div>
                                        <a width="100%" href="{{route('makananRingan')}}"
                                            class="btn btn-block btn-secondary">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-content px-3 py-3" align="center">
                                        <div class="image">
                                            <img src="{{ asset('Gambar/kategori3.png') }}" alt="">
                                        </div>
                                        <div class="text-secondary">Minuman</div>
                                        <a width="100%" href="{{route('minuman')}}"
                                            class="btn btn-block btn-secondary">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Slider -->


    <!--==Slider Bahan==============-->
    <section id="bahan" class="konten">
        <div class="cotainer" data-aos="fade-up">
            <div class="container">
                <div class="card bg-success mx-3">
                    <div class="swiper mySwiper card-body bg-success mx-3">
                        <h5><strong>Bahan - Bahan</strong></h5>
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-content px-3 py-3" align="center">
                                        <div class="image">
                                            <img src="{{ asset('Gambar/bahan1.png') }}" alt="">
                                        </div>
                                        <div class="text-secondary">Bahan Telur</div>
                                        <a width="100%" href="{{route('telur')}}"
                                            class="btn btn-block btn-secondary">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-content px-3 py-3" align="center">
                                        <div class="image">
                                            <img src="{{ asset('Gambar/bahan2.png') }}" alt="">
                                        </div>
                                        <div class="text-secondary">Bahan Daging Ayam</div>
                                        <a width="100%" href="{{route('ayam')}}"
                                            class="btn btn-block btn-secondary">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-content px-3 py-3" align="center">
                                        <div class="image">
                                            <img src="{{ asset('Gambar/bahan3.png') }}" alt="">
                                        </div>
                                        <div class="text-secondary">Bahan Daging Sapi</div>
                                        <a width="100%" href="{{route('sapi')}}"
                                            class="btn btn-block btn-secondary">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-content px-3 py-3" align="center">
                                        <div class="image">
                                            <img src="{{ asset('Gambar/bahan4.png') }}" alt="">
                                        </div>
                                        <div class="text-secondary">Bahan Buah - Buahan</div>
                                        <a width="100%" href="{{route('buah')}}"
                                            class="btn btn-block btn-secondary">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- End Section Slider -->

    <section id="resep" class="konten">
        <div class="container" data-aos="fade-up">
            <div class="card-body">
                <div class="section-title">
                    <h2><strong>Resep Masakan</strong></h2>
                </div>
                <div class=" row">
                    @php $no = 1; @endphp
                    @foreach($resep as $g)
                    <div class="col-sm-4">
                        <div class="container">
                            <div class="card bg-success border-lg">
                                <div class="card-body">
                                    <h5 class="card-title ml-1">{{ $g->nama }}</h5><br>
                                    <div class="" height="100px" width="100px">
                                        <img class="rounded" src="{{ asset('storage/Gambar/'.$g->namagambar) }}"
                                            alt="default" style="object-fit:cover;
                                            ">
                                        <div class="text-secondary">views: {{ $g->view }}</div>
                                        <a width="100%" href="/detailresep/{{ $g->id }}"
                                            class="btn btn-block btn-secondary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>ResepKu</span></strong>. img: Freepik, FrisianFlag ect.
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

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            500: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });
    </script>

</body>

</html>