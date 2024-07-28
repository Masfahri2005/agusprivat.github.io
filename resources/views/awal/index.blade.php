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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('landing/css/main.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Jun 14 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="landing/img/logo.png" alt=""> -->
            <h1 class="sitename">Agus Privat</h1>
          </a>
          <nav id="navmenu" class="navmenu d-none d-xl-block">
            <ul class="d-flex mb-0">
              <li class="mx-2"><a href="#hero">Menu</a></li>
              <li class="mx-2"><a href="#about">Profil</a></li>
              <li class="mx-2"><a href="#why-us">Pertanyaan</a></li>
              <li class="mx-2"><a href="#services">Layanan</a></li>
              <li class="mx-2"><a href="#contact">Kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
      
          <div class="header-actions d-flex align-items-center">
            <a class="btn-getstarted me-3" href="{{ '/murid' }}">Data Murid</a>
            
          </div>
        </div>
      </header>
      
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1>Agus Privat</h1>
                        <p>
                            Kak Agus siap mendampingi Anda dalam proses
                            belajar, membantu mengatasi kesulitan dan
                            mencapai keberhasilan akademik.
                        </p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('landing/img/awal-1.jpg') }}" class="img-fluid animated" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Profil Pengajar</h2>
            </div>
            <!-- End Section Title -->
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('landing/img/profil-pengajar.png') }}" class="img-fluid" alt="Foto Kak Agus"
                            style="margin-right: 30px" />
                    </div>
                    <div class="col-lg-1"></div>
                    <!-- Menambahkan kolom kosong -->
                    <div class="col-lg-7 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Kak Agus Privat</h3>
                        <p>
                            <strong>Moto:</strong> Mengajar adalah sebuah
                            seni menikmati kehidupan dimana membantu,
                            melihat, dan menyaksikan keberhasilan dan
                            kesuksesan anak didik menjadi sebuah kebanggaan
                            dan rasa syukur yang besar.
                        </p>
                        <h4>Jangkauan Mengajar:</h4>
                        <ul>
                            <li>
                                <i class="bi bi-check2-circle"></i> Les
                                Privat Offline: JABODETABEK
                            </li>
                            <li>
                                <i class="bi bi-check2-circle"></i> Les
                                Privat Online: Nasional
                            </li>
                        </ul>
                        <h4>Lulusan Dari:</h4>
                        <ul>
                            <li>
                                <i class="bi bi-check2-circle"></i> SMAN 30
                                Jakarta
                            </li>
                            <li>
                                <i class="bi bi-check2-circle"></i> UI -
                                Teknik Mesin
                            </li>
                        </ul>
                        <h4>Pengalaman Mengajar:</h4>
                        <ul>
                            <li>
                                <i class="bi bi-check2-circle"></i> Mengajar
                                Bimbel SSC, NF, GO
                            </li>
                            <li>
                                <i class="bi bi-check2-circle"></i> Mengajar
                                Les Privat Matematika, Fisika, Kimia lebih
                                dari 20 Tahun
                            </li>
                        </ul>
                        <h4>Tentang Kak Agus:</h4>
                        <p>
                            Saya seorang pengajar privat yang berkomitmen
                            dan profesional. Dalam mengajar, saya lebih
                            mengutamakan suasana yang relaks dan santai
                            namun tetap fokus agar siswa/i tidak tegang dan
                            lebih berani mengutarakan permasalahan
                            pelajarannya. Saya selalu menekankan agar siswa
                            privat tidak takut salah dalam setiap
                            latihan-latihan.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Why Us Section -->
        <section id="why-us" class="section why-us" data-builder="section">
            <div class="container-fluid">
                <div class="row gy-4">
                    <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
                        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                            <h3>
                                <span>Kenapa Memilih</span><strong> Les Privat Bersama Kak Agus?</strong>
                            </h3>
                            <p>
                                Banyak orang tua memiliki berbagai pertanyaan sebelum memutuskan untuk mendaftarkan anak mereka dalam les privat. Berikut adalah beberapa pertanyaan yang sering diajukan mengenai layanan les privat bersama Kak Agus.
                            </p>
                        </div>

                        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                            <div class="faq-item faq-active">
                                <h3>
                                    <span>01</span> Apa saja jenis les privat yang tersedia?
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Kak Agus menawarkan berbagai jenis les privat termasuk les privat online, les privat offline, les privat kelompok, dan juga layanan joki tugas. 
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->

                            <div class="faq-item">
                                <h3>
                                    <span>02</span> Bagaimana cara les privat online dan offline?
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Les privat online dilakukan melalui platform video konferensi yang interaktif, sedangkan les privat offline dilakukan dengan kunjungan ke rumah siswa di wilayah JABODETABEK. 
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->

                            <div class="faq-item">
                                <h3>
                                    <span>03</span> Apakah ada les privat kelompok?
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Ya, kak Agus juga menyediakan les privat kelompok yang memungkinkan beberapa siswa belajar bersama dalam satu sesi. 
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->

                            <div class="faq-item">
                                <h3>
                                    <span>04</span> Bagaimana cara mendaftar untuk les privat?
                                </h3>
                                <div class="faq-content">
                                    <p>
                                        Anda dapat menghubungi kak langsung melalui nomor kontak yang tersedia. 
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <!-- End Faq item-->
                        </div>
                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                        <img src="{{ asset('landing/img/awal-2.png') }}"
                            class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>
                </div>
            </div>
        </section>
        <!-- /Why Us Section -->

        <!-- Services Section -->
        <section id="services" class="services section bg-white">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan Privat</h2>
                <p>
                    Berikut adalah layanan yang disediakan oleh Agus Privat untuk membantu Anda mencapai tujuan pendidikan.
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <!-- Les Privat Online -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-laptop icon"></i>
                            </div>
                            <h4>
                                <a href="service-details.html" class="stretched-link">Les Privat Online</a>
                            </h4>
                            <p>
                                Layanan les privat online interaktif melalui platform video konferensi untuk kenyamanan belajar dari rumah.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <!-- Les Privat Offline -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-house icon"></i>
                            </div>
                            <h4>
                                <a href="service-details.html" class="stretched-link">Les Privat Offline</a>
                            </h4>
                            <p>
                                Layanan les privat tatap muka dengan kunjungan ke rumah siswa untuk wilayah JABODETABEK.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <!-- Les Privat Kelompok -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-people icon"></i>
                            </div>
                            <h4>
                                <a href="service-details.html" class="stretched-link">Les Privat Kelompok</a>
                            </h4>
                            <p>
                                Layanan les privat kelompok yang memungkinkan beberapa siswa belajar bersama dalam satu sesi.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <!-- Joki Tugas -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-file-earmark-text icon"></i>
                            </div>
                            <h4>
                                <a href="service-details.html" class="stretched-link">Joki Tugas</a>
                            </h4>
                            <p>
                               Kak Agus Juga Menawarkan Bantuan khusus untuk menyelesaikan tugas sekolah/kampus anda.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- /Services Section -->

       <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section bg-white">
            <img src="{{ asset('landing/img/cta-bg.jpg') }}" alt="" />
            <div class="container">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-9 text-center text-xl-start">
                        <h3>Gabung Les Privat Bersama Kak Agus!</h3>
                        <p>
                            Jangan lewatkan kesempatan untuk meningkatkan kemampuan belajar Anda dengan les privat yang efektif bersama Kak Agus. Baik itu les privat online, offline, atau kelompok, Kak Agus siap membantu Anda mencapai tujuan akademis Anda dengan cara yang nyaman dan sesuai kebutuhan. 
                            Daftar sekarang untuk mendapatkan pengalaman belajar yang berkualitas dan dukungan penuh dari tutor berpengalaman.
                        </p>
                    </div>
                    <div class="col-xl-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="https://wa.me/081284888239">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Call To Action Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>
                    Berikut informasi Tentang Alamat, Nomor telepon , Email Kak Agus agar anda dapat bertanya langsung kepada pengajar
                </p>
            </div>
            <!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <div class="info-wrap d-flex justify-content-between" style="flex-wrap: wrap;">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Alamat</h3>
                                    <p>
                                    Perumahan Bukit Waringin Blok I 1 No.27
                                    </p>
                                    <p>
                                    RT 006/014, Kecamatan.Bojonggede,Kabupaten Bogor
                                    </p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Telepon</h3>
                                    <p>0812-8488-8239</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email</h3>
                                    <p>Garnindyo@gmail.com</p>
                                </div>
                            </div>
                            <!-- End Info Item -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.193492404426!2d106.78425007415078!3d-6.497170493494962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c24f18643501%3A0x4a1e6b4acc366e82!2sJl.%20Perumahan%20Bukit%20Waringin%20Blk.%20I1%20No.27%2C%20Cimanggis%2C%20Kecamatan%20Bojonggede%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat%2016920!5e0!3m2!1sid!2sid!4v1721982250856!5m2!1sid!2sid" 
                            width="1230" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact Section -->

    </main>
    <footer id="footer" class="footer">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">Agus Privat </span>
                    </a>
                    <div class="footer-contact pt-3">
                        <strong>Alamat:</strong>
                        <span> Perumahan Bukit Waringin Blok I 1 No.27</span>
                        <span>RT 006/014, Kecamatan.Bojonggede,Kabupaten Bogor</span>
                        <p class="mt-3">
                            <strong>Telepon:</strong>
                            <span>0812-8488-5239</span>
                        </p>
                        <p>
                            <strong>Email:</strong>
                            <span>Garnindyo@gmail.com</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Menu</h4>
                    <ul>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#hero">Menu</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#about">Profil</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#why-us">Pertanyaan</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#services">Layanan</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#contact">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Beberapa Layanan</h4>
                    <ul>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#">Les Privat Online</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#">Les Privat Offline</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#">Les Privat Group</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#">Joki Tugas</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h4>Sosial Media</h4>
                    <p>
                        Mari Follow sosial media kak agus agar anda dapat mengetahui seputar info menarik lainya.
                    </p>
                    <div class="social-links d-flex">
                        <a href="https://youtube.com/@agprivatchannel3597?si=Zg_fYoQDC2zFpRYc"><i class="bi bi-youtube"></i></a>
                        <a href="https://vt.tiktok.com/ZSYG8DJxJ/"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/reel/C9eE8M6Bzdn/?igsh=Z2xtODd5b3dlNzls"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/reel/1032481895120331"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>  
            </div>
        </div>
        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span>
                <strong class="px-1 sitename">Agus Privat</strong>
                <span>2024-2025</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Develope by
                <a href="#">Muhammad Fakhrizal</a>
            </div>
        </div>
    </footer>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
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