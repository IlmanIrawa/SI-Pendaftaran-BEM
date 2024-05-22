<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/dashboard">Home</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                    <!-- Check if user is authenticated -->
                    @if (Auth::check())
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- Display user's profile picture -->
                            @if (Auth::user()->profile != NULL)
                                <img class="img-fluid" src="{{ Storage::url(Auth::user()->profile) }}" />
                            @else
                                <img class="img-fluid" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" />
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                            <!-- Display user's name, email, and profile picture -->
                            <h6 class="dropdown-header d-flex align-items-center">
                                @if (Auth::user()->profile != NULL)
                                    <img class="dropdown-user-img" src="{{ Storage::url(Auth::user()->profile) }}" />
                                @else
                                    <img class="dropdown-user-img" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" />
                                @endif
                
                                <div class="dropdown-user-details">
                                    <div class="dropdown-user-details-name"><!--{{ Auth::user()->name }}--></div>
                                    <div class="dropdown-user-details-email"><!--{{ Auth::user()->email }}--></div>
                                </div>
                            </h6>
                            <div class="dropdown-divider"></div>
                            <!-- Display account settings link -->
                            <a class="dropdown-item" href="#">
                                <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                                Account
                            </a>
                            <!-- Display logout button -->
                            <form action="/logout" method="post">
                                <button type="submit" class="dropdown-item">
                                    <div class="dropdown-item-icon"><i data-feather="log-out"> </i></div>
                                    Logout
                                </button>
                            </form>
                        @endif
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Halaman</div>
                            <a class="nav-link" href="/dbmhs">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="/status_pendaftaran">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                                Status Pendaftar
                            </a>
                            <a class="nav-link" href="/pendaftaran">
                                <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></div>
                                pendaftaran
                            </a>
                            <a class="nav-link" href="/LandingPage">
                                <div class="sb-nav-link-icon"><i class="fas fa-user" ></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <!--<div class="sidenav-footer-title">.....</div>-->
                        <!-- untuk menampilkan nama user atau pengguna yang sedang menggunakan web tersebut -->
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                        <!-- main section -->
                            <section class="content">
                                <div class="container-fluid">
                                     @yield('MainContent')
                                </div><!-- /.container-fluid -->
                            </section>
                </main>
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
                
                  </footer><!-- End Footer -->
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
