<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lab ICT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">

  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  {{-- {{ asset('vendor/swiper/swiper-bundle.min.css') }} --}}
  {{-- <link href="{{ asset('vendor/bootstrap-home/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" > --}}
  {{-- <!-- {{ asset('js/sb-admin-2.min.js') }}" --> --}}

  <!-- =======================================================
  * Template Name: Appland - v4.7.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="{{ route('utama')}}">Lab ICT</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#jadwal">Jadwal</a></li>
          <li><a class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
          @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <li><a class="getstarted scrollto" href="{{ route('home') }}">Login</a></li>
                    @else
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
                    @endauth
                </div>
            @endif
          {{-- <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Hai Labkomers!</h1>
            <h2>Selamat Datang di Laboratorium ICT Universitas Budi Luhur</h2>
            <p>Jangan Lupa Tetap Patuhi Protokol Kesehatan:</p>
            <div class="content d-flex flex-column justify-content-center">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                    <p><i class="fa-solid fa-mask-face"></i> Memakai Masker</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up">
                    <p><i class="fa-solid fa-people-group"></i> Tidak Berkerumun</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up">
                    <p><i class="fa-solid fa-people-arrows-left-right"></i> Menjaga Jarak</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up">
                    <p><i class="fa-solid fa-pump-soap"></i> Gunakan Hand Sanitizer</p>
                </div>
            </div>

          </div>

        </div>

        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="{{ asset('img/orang.png') }}" class="img-fluid" alt="">

        </div>
      </div>

    </div>

  </section><!-- End Hero -->

        <main id="main">
            <section id="jadwal" class="features">
                <div class="container">
                    <div class="section-title mb-5">
                        <h2>Jadwal {{$skrg}}</h2>
                        <div class="dropdown show d-flex justified" >
                            <a style="background: #143454;color: white !important" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hari
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{route('utama')}}#jadwal">Semua Data</a>
                                <a class="dropdown-item" href="{{url('hari/Senin')}}#jadwal">Senin</a>
                                <a class="dropdown-item" href="{{url('hari/Selasa')}}#jadwal">Selasa</a>
                                <a class="dropdown-item" href="{{url('hari/Rabu')}}#jadwal">Rabu</a>
                                <a class="dropdown-item" href="{{url('hari/Kamis')}}#jadwal">Kamis</a>
                                <a class="dropdown-item" href="{{url('hari/Jumat')}}#jadwal">Jumat</a>
                                <a class="dropdown-item" href="{{url('hari/Sabtu')}}#jadwal">Sabtu</a>
                            </div>

                        </div>

                        <?php
                            $i = $jml;
                            $j = 1;

                            $a = (int)ceil($i / 5);
                            // @dd($a);



                        ?>


                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @if ($i>=1)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    @while ($j<$a)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$j}}"></li>
                                        <?php $j++;?>
                                    @endwhile


                                @endif
                            </ol>
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div data-aos="fade-up" class="table-responsive mt-2 ">
                                        @if ($i==0)
                                            <img src="{{asset('img/nodata.png')}}" alt="">
                                        @else
                                        <table id="datatablesSimple" class="table table-striped table-hover ">
                                            <thead>
                                                <tr>
                                                    <th style="background-color: #143454; color: white">Matkul</th>
                                                    <th>Jam</th>
                                                    <th>Kelompok</th>
                                                    <th>Ruang</th>
                                                    <th>Nama Dosen</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                        @foreach ($jadwal->slice(0,5) as  $jw)
                                            <tr>
                                                <td>{{$jw->matakuliah->nama_matkul}}</td>
                                                <td>{{ date('H:i', strtotime($jw->jam_mulai)) }} - {{ date('H:i', strtotime($jw->jam_selesai)) }}</td>
                                                <td>{{ $jw->kelompok}}</td>
                                                <td>{{ $jw->ruangan->ruangan}}</td>
                                                <td>{{ $jw->dosen->nama_dosen}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                            <?php $j = 0;?>
                            @php
                                $x=5;
                            @endphp
                            @while ($j<$a-1)

                            <div class="carousel-item">
                                <div data-aos="fade-up" class="table-responsive mt-2 ">
                                    <table id="datatablesSimple" class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th style="background-color: #143454; color: white">Matkul</th>
                                                <th>Jam</th>
                                                <th>Kelompok</th>
                                                <th>Ruang</th>
                                                <th>Nama Dosen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jadwal->slice($x,5) as  $jw)
                                            <tr>
                                                <td>{{$jw->matakuliah->nama_matkul}}</td>
                                                <td>{{ date('H:i', strtotime($jw->jam_mulai)) }} - {{ date('H:i', strtotime($jw->jam_selesai)) }}</td>
                                                <td>{{ $jw->kelompok}}</td>
                                                <td>{{ $jw->ruangan->ruangan}}</td>
                                                <td>{{ $jw->dosen->nama_dosen}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @php
                                $j++;
                                $x = $x + 5;
                            @endphp

                            @endwhile


                            {{-- @if ($i>5)
                            <div class="carousel-item">
                                <div data-aos="fade-up" class="table-responsive mt-2 ">
                                    <table id="datatablesSimple" class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th style="background-color: #143454; color: white">Matkul</th>
                                                <th>Jam</th>
                                                <th>Kelompok</th>
                                                <th>Ruang</th>
                                                <th>Nama Dosen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jadwal->slice(5, 5) as  $jw)
                                            <tr>
                                                <td>{{$jw->matakuliah->nama_matkul}}</td>
                                                <td>{{ date('H:i', strtotime($jw->jam_mulai)) }} - {{ date('H:i', strtotime($jw->jam_selesai)) }}</td>
                                                <td>{{ $jw->kelompok}}</td>
                                                <td>{{ $jw->ruangan->ruangan}}</td>
                                                <td>{{ $jw->dosen->nama_dosen}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <section id="footer" class="content d-flex flex-column justify-content-center">

        <img data-aos="fade-up" class="content d-flex flex-column justify-content-center" src="{{ asset('img/footer.png') }}" alt="">

    </section>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>LAB ICT</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        Designed by CALAS 2022
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#    " class="back-to-top d-flex align-items-center justify-content-center text-white"><i class="fa-solid fa-arrow-up"></i></a>

  <!-- Vendor JS Files -->
    {{-- {{ asset('vendor/swiper/swiper-bundle.min.css') }} --}}
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
