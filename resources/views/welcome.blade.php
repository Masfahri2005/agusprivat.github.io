<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Home - Agus Privat</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('landing/img/logo-agprivat.png') }}" rel="icon" />
    <link href="{{ asset('landing/img/logo-agprivat.png') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('landing/css/main.css') }}" rel="stylesheet" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        #hero {
            background: linear-gradient(45deg, #37517e, #6377af);
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .auth-links {
            display: flex;
            gap: 10px;
        }

        .auth-links a {
            font-size: 14px;
            color: #fff;
            text-decoration: none;
            padding: 5px 15px;
            border: 2px solid transparent;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .auth-links a.nav-link {
            background-color: #37517e;
        }

        .auth-links a.nav-link:hover {
            background-color: #6377af;
            border: 2px solid #fff;
        }

        .sitename {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .sitename img {
            margin-right: 10px;
        }

        .navmenu ul {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }

        .navmenu ul li {
            display: inline;
            margin-right: 20px;
        }

        .navmenu ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .navmenu ul li a:hover {
            text-decoration: underline;
        }

        .btn-getstarted {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        }

        .btn-getstarted:hover {
            background-color: #45a049;
        }

        #scroll-top {
            background: #4caf50;
        }

        .hero-img img {
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('landing/img/logo-agprivat.png') }}" class="img-fluid animated" alt="" />
                <h1 class="sitename">Agus Privat</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul class="d-flex align-items-center">
                    @if (Route::has('login'))
                        <div class="auth-links">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            @else
                                <a href="{{ '/awal' }}" class="nav-link">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section d-flex align-items-center">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                        <h1>Agus Privat</h1>
                        <p>Kak Agus siap mendampingi Anda dalam proses belajar, membantu mengatasi kesulitan dan mencapai keberhasilan akademik.</p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('landing/img/awal-1.jpg') }}" class="img-fluid animated" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('landing/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landing/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('landing/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('landing/js/main.js') }}"></script>
</body>

</html>
