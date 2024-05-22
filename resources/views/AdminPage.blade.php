@extends('index2')
@section('MainContent')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard - Admin</title>
  <style>
    body {
      /* Set the background image */
      background-color: var(--color-secondary);
      background-image: url("../img/hero-bg.png");

      /* Set the background size and repeat properties */
      background-size: cover;
      background-repeat: no-repeat;

      /* Set the background position */
      background-position: center center;

      /* Set the background attachment property */
      background-attachment: fixed;

      /* Set the background color */
      background-color: #cccccc;
    }
  </style>
</head>
<body>
  <main id="main">
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10" >
        <div class="container-xl px-4" >
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                            Dashboard Admin
                        </h1>
                        <div class="page-header-subtitle">Halaman Admin</div>
                    </div>
                </div>
            </div>
        </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-n10">
            <div class="row">
                <div class="col-xxl-4 col-xl-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body h-100 p-5">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-xxl-12">
                                    <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                        <h1 class="text-primary">Selamat Datang Admin <!--nama ....-->!</h1>
                                        <!-- menampilkan nama dari pengguna yang telah login ke website-->
                                        <p class="text-gray-700 mb-0">Selamat Berkerja dan Tetap Semangat !</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-12 text-center"><img src="{{asset('dashboard')}}/assets/img/bem.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </main>
</body>
</html>
@endsection