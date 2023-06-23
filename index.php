<?php
// menghubungkan file index dengan functions
require './admin/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>SISTEM INFORMASI GEOGRAFIS WISATA PROVINSI JAWA BARAT</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon" /> -->
  <link href="./user/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" /> -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="./user/assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="./user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="./user/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="./user/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="./user/assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="./user/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="./user/assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto">
        <a href="http://localhost/wisata_jabar/index.php" style="color: #e4e01b">SIG<span class="text-white" style="letter-spacing: 1px">Jabar</span></a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Kategori</a></li>
          <!-- <li><a class="nav-link scrollto" href="#faq">Peta</a></li> -->
          <li><a class="nav-link scrollto" href="#portfolio">Daftar Wisata</a></li>
          <li><a class="nav-link scrollto" href="#contact">Saran</a></li>
          <li><a class="getstarted scrollto" target="_blank" href="./admin/login.php">Login Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <span>SISTEM INFORMASI GEOGRAFIS WISATA ALAM</span>
          <h1>PROVINSI JAWA BARAT</h1>
          <h2>Sistem informasi ini merupakan aplikasi pemetaan geografis tempat wisata alam di wilayah Jawa
            Barat.
            Aplikasi ini memuat informasi dan lokasi dari tempat wisata tersebut.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Tentang Kami</a>
            <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="" class="img-fluid animated" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <p>
              Kami adalah tim yang berdedikasi dalam menyediakan informasi lengkap dan terkini tentang
              tempat-tempat wisata di Jawa Barat. Dengan menggunakan sistem informasi geografis yang
              canggih, kami memudahkan Anda untuk menjelajahi
              berbagai destinasi menarik, mulai dari gunung yang megah hingga pantai yang eksotis.
            </p>
            <p>
              Website kami dilengkapi dengan beragam fitur yang akan membantu Anda dalam merencanakan
              perjalanan wisata yang sempurna. Anda dapat menemukan informasi tentang nama wisata, alamat,
              harga tiket, deskripsi dan lokasi wisata.
              Selain itu, kami menyediakan peta interaktif yang memudahkan Anda untuk menavigasi sekitar
              daerah tujuan Anda.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <p>
              Kami berkomitmen untuk memberikan pengalaman pengguna yang unggul dan informatif. Tim kami
              secara rutin memperbarui informasi yang ada, sehingga Anda dapat memperoleh data terkini
              tentang tempat-tempat wisata di Provinsi
              Jawa Barat.
            </p>
            <p>Selamat mengeksplorasi keindahan Provinsi Jawa Barat melalui Sistem Informasi Geografis
              Wisata kami! Nikmati perjalanan Anda dan rasakan keajaiban yang ada di setiap sudut
              destinasi wisata yang kami tawarkan.</p>
            <div data-aos="zoom-in" data-aos-delay="400">
              <a href="#services" class="btn-learn-more">Lihat Kategori</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Kategori Wisata</h2>
          <p>
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
            ea. Quia fugiat sit in iste
            officiis commodi quidem hic quas.
          </p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box text-center">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4>Gunung</h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box text-center">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4>Pantai</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box text-center">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4>Air Terjun</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box text-center">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4>Bukit</h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#portfolio">Lihat Wisata</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Daftar Wisata</h2>
          <p>
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
            ea. Quia fugiat sit in iste
            officiis commodi quidem hic quas.
          </p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-gunung">Gunung</li>
          <li data-filter=".filter-pantai">Pantai</li>
          <li data-filter=".filter-curug">Air Terjun</li>
          <li data-filter=".filter-bukit">Bukit</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <!-- kategori wisata gunung -->
          <?php $i = 1; ?>
          <?php
          $data_all = kategori_gunung();
          foreach ($data_all as $data_gunung) : ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-gunung">
              <!-- <div class="portfolio-img"><img src="./user/assets/img/portfolio/portfolio-1.jpg"
                                class="img-fluid" alt="" /></div> -->
              <div class="portfolio-img"><img src="file/<?= $data_gunung['foto']; ?>" class="img-fluid" alt="" /></div>
              <div class="portfolio-info">
                <h4><?= ucwords($data_gunung['nama_wisata']); ?></h4>
                <!-- <p>Rp <?= number_format($data_gunung['harga_tiket']); ?></p> -->
                <!-- <a href="./user/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a> -->
                <a href="file/<?= $data_gunung['foto']; ?>" data-gallery=" portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                <a href="user/detail_wisata.php?wisata=<?= $data_gunung['id_wisata'] ?>" class="details-link" title="Lihat Detail Wisata"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <?php $i++; ?>
          <?php endforeach; ?>

          <!-- kategori wisata pantai -->
          <?php $i = 1; ?>
          <?php
          $data_all = kategori_pantai();
          foreach ($data_all as $data_pantai) : ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-pantai">
              <div class="portfolio-img"><img src="file/<?= $data_pantai['foto']; ?>" class="img-fluid" alt="" /></div>
              <div class="portfolio-info">
                <h4><?= ucwords($data_pantai['nama_wisata']); ?></h4>
                <!-- <p>Rp <?= number_format($data_pantai['harga_tiket']); ?></p> -->
                <a href="file/<?= $data_pantai['foto']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                <a href="user/detail_wisata.php?wisata=<?= $data_pantai['id_wisata'] ?>" class="details-link" title="Lihat Detail Wisata"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <?php $i++; ?>
          <?php endforeach; ?>

          <!-- kategori wisata curug -->
          <?php $i = 1; ?>
          <?php
          $data_all = kategori_curug();
          foreach ($data_all as $data_curug) : ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-curug">
              <div class="portfolio-img"><img src="file/<?= $data_curug['foto']; ?>" class="img-fluid" alt="" /></div>
              <div class="portfolio-info">
                <h4><?= ucwords($data_curug['nama_wisata']); ?></h4>
                <!-- <p>Rp <?= number_format($data_curug['harga_tiket']); ?></p> -->
                <a href="file/<?= $data_curug['foto']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                <a href="user/detail_wisata.php?wisata=<?= $data_curug['id_wisata'] ?>" class="details-link" title="Lihat Detail Wisata"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <?php $i++; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="section-title">
          <h2>Saran</h2>
          <p>
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
            ea. Quia fugiat sit in iste
            officiis commodi quidem hic quas.
          </p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
          <div class="col-md-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.088572686025!2d106.76723937387932!3d-6.3825685624282595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef2ab43f74e3%3A0x3b81b9425eb8064c!2sJl.%20Swadaya%20II%2C%20Meruyung%2C%20Kec.%20Limo%2C%20Kota%20Depok%2C%20Jawa%20Barat%2016515!5e0!3m2!1sid!2sid!4v1687117233494!5m2!1sid!2sid" width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <img src="user/assets/img/why-us.png" alt="" class="img-fluid" /> -->
          </div>
          <div class="offset-1 col-md-6">
            <form action="" method="post" class="row g-3 needs-validation" novalidate>
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Nama</label>
                <input type="text" class="form-control" id="validationCustom01" name="nama" placeholder="Masukkan nama" required />
                <div class="valid-feedback">Nama sudah diisi!</div>
                <div class="invalid-feedback">Nama harus diisi!</div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="email" class="form-control" id="validationCustom02" name="email" placeholder="Masukkan email" required />
                <div class="valid-feedback">Email sudah diisi!</div>
                <div class="invalid-feedback">Email harus diisi!</div>
              </div>

              <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Nomor Telpon</label>
                <input type="text" class="form-control" id="validationCustom02" name="no_telp" placeholder="Masukkan nomor telepon" required />
                <div class="valid-feedback">Nomor telepon sudah diisi!</div>
                <div class="invalid-feedback">Nomor telepon harus diisi!</div>
              </div>

              <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Saran</label>
                <textarea class="form-control" id="validationCustom01" name="saran" placeholder="Masukkan saran" rows="5" required></textarea>
                <div class="valid-feedback">Saran sudah diisi!</div>
                <div class="invalid-feedback">Saran harus diisi!</div>
              </div>

              <!-- <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Saya menyetujui peraturan yang berlaku
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div> -->

              <div class="col-12">
                <button class="btn btn-primary" type="submit" name="input_saran">Kirim saran</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

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

    <div class="container footer-bottom clearfix">
      <div class="copyright text-center">
        &copy; Copyright <strong><span style="color: #e4e01b">SIG JawaBarat</span></strong>. All Rights Reserved
      </div>
      <!-- <div class="credits">Designed by <a href="https://bootstrapmade.com/">Farhan Kamil</a></div> -->
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./user/assets/vendor/aos/aos.js"></script>
  <script src="./user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./user/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./user/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./user/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="./user/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./user/assets/js/main.js"></script>

  <!-- validasi form saran -->
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      "use strict";

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll(".needs-validation");

      // Loop over them and prevent submission
      Array.from(forms).forEach((form) => {
        form.addEventListener(
          "submit",
          (event) => {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add("was-validated");
          },
          false
        );
      });
    })();
  </script>
</body>

</html>