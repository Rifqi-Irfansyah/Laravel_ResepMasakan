<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ResepKu</title>

    <!-- Favicons -->
    <link href="{{asset('Gambar/logo-resepku.png')}}" rel="icon">
    <link href="{{asset('Gambar/logo-resepku.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{('Arsha/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{('Arsha/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{('Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{('Arsha/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{('Arsha/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{('Arsha/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{('Arsha/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{('Arsha/assets/css/style.css')}}" rel="stylesheet">

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

    <style>
    body {
        background-color: #000;
        color: #000;
    }
    </style>
    @if(Session::has('dark'))
    <link rel="stylesheet" href="{{asset('AdminLte/dist/css/adminlte2.min.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('AdminLte/dist/css/adminlte.min.css')}}">
    @endif

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


    @yield('konten')



    <!-- jQuery -->
    <script src="{{asset('AdminLte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('AdminLte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('AdminLte/dist/js/adminlte.min.js')}}"></script>

    <!-- Vendor JS Files -->
    <script src="{{('Arsha/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{('Arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{('Arsha/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{('Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{('Arsha/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{('Arsha/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{('Arsha/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>