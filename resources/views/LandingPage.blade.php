<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Landing Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('landing')}}/assets/img/logo-stmik.png" rel="icon">
  <link href="{{asset('landing')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="{{asset('landing')}}/https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('landing')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('landing')}}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{asset('landing')}}/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('landing')}}/assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{asset('landing')}}/index.html" class="logo d-flex align-items-center">
        
        <img src="{{asset('landing')}}/assets/img/bem.png" alt="">
        <h1>BEM STMIK Bandung</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{asset('landing')}}/LandingPage" class="active">Home</a></li>
          <li><a href="#info">Info</a></li>
          <li><a href="#">Alur Pendaftaran</a></li>
          <li><a href="#">Persyaratan</a></li>
          <li><a class="get-a-quote" href="/Login">login</a></li>
          <li><a class="get-a-quote" href="/register">registrasi</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">SELAMAT DATANG </h2>
          <p data-aos="fade-up" data-aos-delay="100">Sistem Informasi Pendaftaran Anggota BEM STMIK Bandung, Mari Bergabung Bersama Kami Menjadi Anggota BEM STMIK Bandung Mengukir Prestasi untuk Bersama Membangun Negeri. Ikut Berkontribusi Dalam memajukan STMIK Bandung dan Sama - Sama Berkreasi Mengimplementasikan Imajinasi dan kreativitas </p>

          <form action="/Login" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="Ayo Segera Bergabung !!">
            <button type="submit" class="btn btn-primary">Bergabung</button>
          </form>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <!-- terhubung ke database dengan memperlihatkan jumlah pendaftar -->
                <span data-purecounter-start="0" data-purecounter-end="103" data-purecounter-duration="1" class="purecounter"></span>
                <p>Pendaftar</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <!-- terhubung ke database dengan memperlihatkan jumlah yang di terima -->
                <span data-purecounter-start="0" data-purecounter-end="94" data-purecounter-duration="1" class="purecounter"></span>
                <p>ACC </p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <!-- terhubung ke database dengan memperlihatkan jumlah ditolak -->
                <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                <p>TMS</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <!-- terhubung ke database dengan memperlihatkan jumlah di proses -->
                <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                <p>Proses</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="{{asset('landing')}}/assets/img/landing.png" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" id="info">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="{{asset('landing')}}/assets/img/pelantikan.jpg" class="img-fluid" alt="">
            <a href="{{asset('landing')}}/https://www.youtube.com" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>Info</h3>
            <p>
              Recruitment anggota baru BEM STMIK Bandung Merupakan agenda tahunan yang manjadi program kerja BEM STMIK Bandung pada divisi kaderisasi, untuk melanjutkan kepengurusan dan regenerasi anggota dengan tujuan :
            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Menjaga Kelangsungan Hidup Organisasi</h5>
                  <p>Organisasi tidak dapat berjalan tanpa adanya pengurus. Oleh karena itu, regenerasi kepengurusan diperlukan untuk memastikan organisasi tetap memiliki pengurus yang mampu memimpin dan menjalankan organisasi.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Meningkatkan Motivasi dan Semangat Anggota</h5>
                  <p>Regenerasi kepengurusan dapat meningkatkan motivasi dan semangat anggota organisasi. Hal ini karena anggota organisasi akan melihat adanya peluang untuk menjadi pemimpin dan berkontribusi lebih banyak bagi organisasi.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Mewujudkan Demokrasi</h5>
                  <p>Regenerasi kepengurusan merupakan salah satu bentuk demokrasi dalam organisasi. Hal ini memberikan kesempatan bagi semua anggota organisasi untuk menjadi pemimpin.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Dokumentsi Kegiatan</span>
          <h2>Documentasi Kegiatan</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('landing')}}/assets/img/baksos.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Peduli Sesama</a></h3>
              <p>kegiatan pembagian takjil gratis kepada orang yang membutuhkan disekitar kampus STMIK Bandung dan penyerahan santunan untuk anak yatim</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('landing')}}/assets/img/seminar.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Peningkatan Keterampilan Mahasiswa</a></h3>
              <p>membuat kegiatan kegiatan untuk meningkatkan skill mahasiswa mulai dari mengadakan seminar, pelarihan-pelatihan dll.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('landing')}}/assets/img/oprec.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">PSPT</a></h3>
              <p>PSPT merupakan pengenalan sistem perguruan tinggi yang diadakan ketika penerimaan mahasiswa baru</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('landing')}}/assets/img/lomba.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Perlombaan</a></h3>
              <p>menjadi wadah untuk mahasiswa menunjukan kemampuannya mulai dari akademik maupun non akademik dengan mengadakan perlombaan antar Prodi dan angkatan</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('landing')}}/assets/img/makrab.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Jelajah Alam</a></h3>
              <p>menikmati alam dengan kegiatan jelajah alam mulai dari naik gunung, kemah bersama, panjat tebing dll</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('landing')}}/assets/img/studi.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Studi Banding</a></h3>
              <p>melakukan studi banding ke BEM di universitas lain untuk saling belajar dan menambah pengetahuan dan relasi</p>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Quote</h3>
            <p>"Anak muda adalah permata yang bersinar dalam gelapnya masa depan. Mereka adalah aset berharga bangsa, jika mereka memilih untuk mengasah bakat dan kreativitasnya untuk berkarya, mereka akan menjadi pilar-pilar kejayaan yang tak tergoyahkan."</p>
            <a class="cta-btn" href="#">Mari Berkarya</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
        <div class="section-header">
          <span>Alur Pendaftaran</span>
          <h2>Alur Pendaftaran</h2>

        </div>
          <div class="col-md-5">
            <img src="{{asset('landing')}}/assets/img/features-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Pendaftaran Online melalui web sistem informasi pendaftaran BEM STMIK Bandung.</h3>
            <p class="fst-italic">
              peserta melakukan pendaftaran melalui website sistem informasi pendaftaran anggota BEM STMIK Bandung yang nantinya akan dilakukan verifikasi dan ACC oleh admin untuk melanjutkan ke tahap selanjutnya
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Registrasi akun.</li>
              <li><i class="bi bi-check"></i> Login.</li>
              <li><i class="bi bi-check"></i> Verifikasi Admin.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{asset('landing')}}/assets/img/hero-img.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Tes Wawancara </h3>
            <p class="fst-italic">
              mengetes kemampuan calon anggota BEM STMIK Bandung mengenai wawasan kebangsaan dan sejauh mana mengetahui tentang Organisasi 
            </p>
            <p>
              pewawancara merupakan pengurus harian BEM STMIK Bandung
            </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{asset('landing')}}/assets/img/features-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Tes Minat Dan Bakat</h3>
            <p>Tes minat bakat dengan cara menampilkan minat dan bakat yang dimiliki calon anggota supaya mengetahui keahlian dalam bidang apa</p>
            <ul>
              <li><i class="bi bi-check"></i> Dilakukan di kampus STMIK Bandung.</li>
              <li><i class="bi bi-check"></i> Diperbolehkan membawa alat peraga.</li>
              <li><i class="bi bi-check"></i> penilai merupakan pengurus harian BEM STMIK Bandung.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{asset('landing')}}/assets/img/komputer.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Integrasi Nilai Akhir dan Pengumuman</h3>
            <p class="fst-italic">
              pengintegrasian nilai akhir mulai dari sleksi pertama sampai sleksi terakhir
            </p>
            <p>
              pengumuman calon anggota yang lolos sleksi akan dilampirkan dan di infokan pada instagram BEM STMIK Bandung
            </p>
          </div>
        </div><!-- Features Item -->

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Pricing Section ======= -->
  
    </section><!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('landing')}}/assets/img/testimonials/coba2.jpeg" class="testimonial-img" alt="">
                <h3>Komeng</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('landing')}}/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Komeng</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('landing')}}/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Komeng</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('landing')}}/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Komeng</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('landing')}}/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Komeng</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Persyaratan Sleksi</span>
          <h2>Persyaratan Sleksi</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    Mahasiswa Aktif STMIK Bandung dengan menunjukan KTM
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    melampirkan KTM sebagai bukti valid bahwa yang bersangkutan merupakan mahasiswa aktif di STMIK Bandung
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    Curiculum Vitae
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Desain Curiculum Vitae bebas tidak ada standar khusus
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    Surat Pendaftaran yang ditujukan kepada sekretariat BEM STMIK Bandung
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Format Surat pendaftaran dapat diunduh pada link yang dibagikan di instagram BEM STMIK Bandung
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    Pass Foto ukuran 4x6 4 lembar
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    Pass foto berlatar merah untuk laki-laki dan berlatar biru untuk peserta perempuan
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    Sertifikat Keahlian (Optional)
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    optional, boleh dilampirkan sebagai nilai plus atau pun tidak melampirkan juga tidak menjadi masalah
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="{{asset('landing')}}/index.html" class="logo d-flex align-items-center">
            <span>BEM STMIK Bandung</span>
          </a>
          <p>Sekretariat Jl. Cikutra No. 113 Kota Bandung, Jawa Barat</p>
          <div class="social-links d-flex mt-4">
            <a href="{{asset('landing')}}/#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="{{asset('landing')}}/#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{asset('landing')}}/#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="{{asset('landing')}}/#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{asset('landing')}}/#">Home</a></li>
            <li><a href="{{asset('landing')}}/#">Info</a></li>
            <li><a href="{{asset('landing')}}/#">Alur Pendaftaran</a></li>
            <li><a href="{{asset('landing')}}/#">Persyaratan</a></li>
            <li><a href="{{asset('landing')}}/#">Daftar</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Terkait</h4>
          <ul>
            <li><a href="{{asset('landing')}}/#"></a></li>
            <li><a href="{{asset('landing')}}/#">STMIK Bandung</a></li>
            <li><a href="{{asset('landing')}}/#">HIMA IF STMIK Bandung</a></li>
            <li><a href="{{asset('landing')}}/#">HIMA SI STMIK Bandung</a></li>
            <li><a href="{{asset('landing')}}/#">Forum Minat Bakat STMIK Bandung</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            
            <strong>Phone:</strong> 08888909876789<br>
            <strong>Email:</strong> info@BEM-STMIK-BDG.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BEM STMIK Bandung</span></strong>. 2024
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="{{asset('landing')}}/#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('landing')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('landing')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('landing')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('landing')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('landing')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('landing')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('landing')}}/assets/js/main.js"></script>

</body>

</html>