<?php
// menghubungkan file index dengan functions
require '../admin/functions.php';

//get id wisata
$id = $_GET['wisata'];

?>

<script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio Details - Arsha Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto">
                <a href="http://localhost/wisata_jabar/index.php" style="color: #e4e01b">SIG<span class="text-white" style="letter-spacing: 1px">Jabar</span></a>
            </h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="http://localhost/wisata_jabar/index.php">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="http://localhost/wisata_jabar/index.php">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="http://localhost/wisata_jabar/index.php">Kategori</a></li>
                    <li><a class="nav-link scrollto" href="http://localhost/wisata_jabar/index.php">Daftar Wisata</a>
                    </li>
                    <li><a class="nav-link scrollto" href="http://localhost/wisata_jabar/index.php">Saran</a></li>
                    <!-- <li class="dropdown">
              <a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown">
                  <a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li> -->
                    <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                    <li><a class="getstarted scrollto" href="../admin/login.php">Login Admin</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <?php $i = 1; ?>
                <?php
                $data_all = tampil_wisata_2("SELECT * FROM tbl_wisata WHERE id_wisata = '$id' ORDER BY id_wisata DESC");
                foreach ($data_all as $data_row) : ?>

                    <ol>
                        <li><a href="../index.php" style="color: #233553;">Beranda</a></li>
                        <li>Detail Wisata</li>
                    </ol>
                    <h2><?= ucwords($data_row['nama_wisata']); ?></h2>

                    <?php $i++; ?>
                <?php endforeach; ?>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <?php $i = 1; ?>
                <?php
                $data_all = tampil_wisata_2("SELECT * FROM tbl_wisata WHERE id_wisata = '$id' ORDER BY id_wisata DESC");
                foreach ($data_all as $data_row) : ?>

                    <div class="row gy-4">

                        <div class="col-lg-8">
                            <div class="portfolio-details-slider swiper">
                                <div class="swiper-wrapper align-items-center">
                                    <img src="../file/<?= $data_row['foto']; ?>" alt="">

                                    <!-- <div class="swiper-slide">
                                        <img src="../file/<?= $data_row['foto']; ?>" alt="">
                                    </div> -->

                                    <!-- <div class="swiper-slide">
                                    <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                                </div> -->

                                    <!-- <div class="swiper-slide">
                                    <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                                </div> -->

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="portfolio-info">
                                <h3>Informasi Wisata</h3>
                                <ul>
                                    <li><strong>Nama Wisata</strong>: <?= ucwords($data_row['nama_wisata']); ?></li>
                                    <li><strong>Harga Tiket</strong>: Rp. <?= number_format($data_row['harga_tiket']); ?>
                                    <li><strong>Alamat</strong>: <?= ucwords($data_row['alamat']); ?></li>
                                    </li>
                                    <li><strong>Deskripsi</strong>: <?= ucwords($data_row['deskripsi']); ?></li>
                                </ul>
                            </div>

                            <!-- <div class="portfolio-description">
                                <h2>This is an example of portfolio detail</h2>
                                <p>
                                    Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi
                                    labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque
                                    itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur
                                    dignissimos. Sequi nulla at esse enim cum deserunt eius.
                                </p>
                            </div> -->
                        </div>

                    </div>

                    <div class="row mt-5" style="display: flex; justify-content: center; align-items: center;">
                        <div class="col-md-9 text-center">
                            <h4>Lokasi Wisata</h4>
                            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                            <div><?= ucwords($data_row['maps']); ?></div>
                        </div>
                    </div>

                    <?php $i++; ?>
                <?php endforeach; ?>


            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <!-- <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h4>Join Our Newsletter</h4>
              <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
              <form action="" method="post"><input type="email" name="email" /><input type="submit" value="Subscribe" /></form>
            </div>
          </div>
        </div>
      </div> -->

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>SIG<span>Jabar</span></h3>
                        <p>
                            Jl.Swadaya II Rt 01/01<br />
                            Kel.Meruyung Kec.Limo<br />
                            Kota Depok <br /><br />
                            <strong>Telepon:</strong> +62 8161 1203 62<br />
                            <strong>Email:</strong> sigjabar@gmail.com<br />
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Link Tautan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Kategori Wisata</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Daftar Wisata</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Saran</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Kategori Wisata</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Gunung</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pantai</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Curug</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media Kami</h4>
                        <p>Berikut beberapa akun media sosial kami</p>
                        <div class="social-links mt-3">
                            <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
                            <!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix ">
            <div class="copyright text-center">
                &copy; Copyright <strong><span style="color: #e4e01b;">SIG JawaBarat</span></strong>. All Rights
                Reserved
            </div>
            <!-- <div class="credits">Designed by <a href="https://bootstrapmade.com/">Farhan Kamil</a></div> -->
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>