<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard Pendidikan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eStartup - v4.6.0
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div id="logo">
                <h1><a href="#"><span>Portal</span>Belajar</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>

                    <li><a class="nav-link scrollto" href="#features">Features</a></li>
                    <li><a class="nav-link scrollto" href="/Login">Log Out</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-in">
            <h1>Selamat Datang <?= $nama['nama']; ?> di Portal Pendidikan</h1>
            <h2>Portal Pendidikan Terpadu Untuk Membangun Negeri</h2>
            <img src="<?= base_url(); ?>/assets/img/hero-img.png" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
            <a href="#get-started" class="btn-get-started scrollto">Mulai Belajar</a>

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Get Started Section ======= -->
        <section id="get-started" class="padd-section text-center">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">

                    <h2>Pendekatan Belajar Sistematis </h2>
                    <p class="separator">Integer cursus bibendum augue ac cursus .</p>

                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="feature-block">

                            <img src="<?= base_url(); ?>/assets/img/svg/cloud.svg" alt="img">
                            <h4>Memperkenalkan</h4>
                            <p>Memperkenalkan materi yang akan dipelajari</p>
                            <a href="#">read more</a>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="feature-block">

                            <img src="<?= base_url(); ?>/assets/img/svg/planet.svg" alt="img">
                            <h4>Menyukai</h4>
                            <p>Menyukai materi yang dipelajari</p>
                            <a href="#">read more</a>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="feature-block">

                            <img src="<?= base_url(); ?>/assets/img/svg/asteroid.svg" alt="img">
                            <h4>Memahami</h4>
                            <p>Memahami materi yang disampaikan</p>
                            <a href="#">read more</a>

                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End Get Started Section -->



        <!-- ======= Features Section ======= -->
        <section id="features" class="padd-section text-center">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Kelas Unggulan</h2>
                    <p class="separator">Integer cursus bibendum augue ac cursus .</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="<?= base_url(); ?>/assets/img/svg/paint-palette.svg" alt="img">
                            <h4>Desain Seni Rupa</h4>
                            <p>Mengembangkan skill melukis di atas canva</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="<?= base_url(); ?>/assets/img/svg/vector.svg" alt="img">
                            <h4>Desain Digital</h4>
                            <p>Mengembangkan skill dengan software editor dan desain</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="<?= base_url(); ?>/assets/img/svg/design-tool.svg" alt="img">
                            <h4>Matematika</h4>
                            <p>Menumbuhkan skill logika matematis</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="<?= base_url(); ?>/assets/img/svg/asteroid.svg" alt="img">
                            <h4>Astronomi</h4>
                            <p>Mempelajari Objek Luar Angkasa</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="<?= base_url(); ?>/assets/img/svg/asteroid.svg" alt="img">
                            <h4>Geografi</h4>
                            <p>Mempelajari kondisi permukaan bumi</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="<?= base_url(); ?>/assets/img/svg/cloud-computing.svg" alt="img">
                            <h4>Geologi</h4>
                            <p>Memplejari bebatuan di Bumi</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="<?= base_url(); ?>/assets/img/svg/pixel.svg" alt="img">
                            <h4>Coding Art</h4>
                            <p>Menjadi seniman dalam bidang Coding </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="<?= base_url(); ?>/assets/img/svg/code.svg" alt="img">
                            <h4>Coding</h4>
                            <p>Menjadi programmer handal</p>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Features Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-4">
                    <div class="footer-logo">

                        <a class="navbar-brand" href="#">Portal Pendidikan</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>Abou Us</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>Abou Us</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>Support</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">faq</a></li>
                            <li><a href="#">Editor help</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>Abou Us</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <div class="copyrights">
            <div class="container">

                <div class="credits">
                    <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
        -->

                </div>
            </div>
        </div>

    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>

</body>

</html>