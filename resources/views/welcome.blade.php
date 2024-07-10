<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Landing Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/stt-nf-logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Jun 27 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">    
    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Banilab</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#faskes-sort-table">Faskes</a></li>
            <li class="dropdown"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
              <ul>
                <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                <li><a href="{{ route('admin.index') }}">Admin Page</a></li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf <!-- Tambahkan CSRF token -->
                      <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </a>
                  </form>
              </li>
              </ul>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="#daftar-faskes">Daftar Faskes</a>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <h2>DIREKTORI</h2>
          <h2>FASILITAS KESEHATAN</h2>
          {{-- <p>Web ini dibuat untuk memenuhi tugas Ujian Akhir Semester (UAS)</p> --}}
        </div><!-- End Welcome -->

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h3>Tujuan dari Banilab</h3>
              <p class="text-justify">
                Banilab adalah project yang dikerjakan untuk memenuhi tugas dari Matakuliah Pemrograman Web 2 yang diajar oleh Yth. Dr. Sirojul Munir S.Si., M.Kom
              </p>
              <div class="text-center">
                <a href="https://www.instagram.com/rojulman/" class="more-btn"><i class="bi bi-instagram"></i><span> rojulman</span></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-4">

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                    <i class="fa-regular fa-hospital"></i>
                    <h4>Faskes Tingkat 1</h4>
                    <p>Fasilitas kesehatan yang berada dekat tempat tinggal pasien.
                      Tujuan dari faskes tingkat 1 agar bisa menjadi tempat pertama untuk 
                      dikunjungi ketika berobat dengan BPJS Kesehatan.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                    <i class="fa-regular fa-hospital"></i>
                    <h4>Faskes Tingkat 2</h4>
                    <p>Faskes tingkat 2 adalah tempat pelayanan lanjutan. 
                      Contohnya: fasilitas kesehatan spesialitis dengan dokter spesialis 
                      atau dokter gigi spesialis.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                    <i class="fa-regular fa-hospital"></i>
                    <h4>Faskes Tingkat 3</h4>
                    <p>Tempat pelayanan saat faskes tingkat 2 tidak sanggup lagi menangani 
                      pasien berdasarkan kebutuhan mereka. Contohnya:
                      klinik utama atau yang setara, rumah sakit umum dan rumah sakit khusus.</p>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>
          </div>
        </div><!-- End  Content-->

      </div>
    </section><!-- /Hero Section -->

    </br>

    <section id="faskes-sort-table" class="faskes-sort-table section">
      <div class="container col-lg-10 col-md-6 d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="100">
          <i class="fa-regular fa-hospital"></i>
          <h2 class="text-center">Daftar Fasilitas Kesehatan</h2>
          <br>
          <div class="table-responsive">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nama Pengelola</th>
                            <th>Alamat</th>
                            <th>Website</th>
                            <th>Email</th>
                            <th>Kabkota ID</th>
                            <th>Rating</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Jenis Faskes ID</th>
                            <th>Kategori ID</th>
                        </tr>
                    </thead>
                    <tbody id="faskesTableBody">
                        @foreach ($list_faskes as $faskes)
                        <tr>
                            <td>{{ $faskes->id }}</td>
                            <td>{{ $faskes->nama }}</td>
                            <td>{{ $faskes->nama_pengelola }}</td>
                            <td>{{ $faskes->alamat }}</td>
                            <td><a href="https://{{ $faskes->website }}" class="stretched-link">{{ $faskes->website }}</a></td>
                            <td>{{ $faskes->email }}</td>
                            <td>{{ $faskes->kabkota_id }}</td>
                            <td>{{ $faskes->rating }}</td>
                            <td>{{ $faskes->latitude }}</td>
                            <td>{{ $faskes->longitude }}</td>
                            <td>{{ $faskes->jenis_faskes_id }}</td>
                            <td>{{ $faskes->kategori_id }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
              </div>
            </div>
              <div class="form-container d-flex justify-content-end w-100">
                  <form method="GET" action="{{ route('welcome') }}" class="d-flex">
                      <div class="form-group">
                          <label for="jenisFaskesSelect" class="mr-2">Filter by Jenis Faskes ID:</label>
                          <select id="jenisFaskesSelect" name="jenis_faskes_id" class="form-control" onchange="this.form.submit()">
                              <option value="">All</option>
                              <option value="1" {{ request('jenis_faskes_id') == 1 ? 'selected' : '' }}>1</option>
                              <option value="2" {{ request('jenis_faskes_id') == 2 ? 'selected' : '' }}>2</option>
                              <option value="3" {{ request('jenis_faskes_id') == 3 ? 'selected' : '' }}>3</option>
                          </select>
                      </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </section>
  
    

    <!-- Appointment Section -->
    <section id="daftar-faskes" class="appointment section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Daftar Faskes</h2>
        <p>Ayo daftarkan Fasilitas Kesehatan (FASKES) anda di bawah sini!</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <form action="{{ route('rolefaskes.store') }}" method="POST" class="php-email-form">
            @csrf
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Faskes" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" name="nama_pengelola" class="form-control" id="nama_pengelola" placeholder="Nama Pengelola" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="text" name="website" class="form-control" id="website" placeholder="Website" required>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select name="kabkota_id" id="kabkota_id" class="form-select" required>
                        <option value="">Select Kab/Kota</option>
                        <option value="1">Kab/Kota 1</option>
                        <option value="2">Kab/Kota 2</option>
                        <option value="3">Kab/Kota 3</option>
                        <option value="4">Kab/Kota 4</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="text" name="rating" class="form-control" id="rating" placeholder="Rating" required>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <input type="text" name="latitude" class="form-control" id="latitude" placeholder="Latitude" required>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <input type="text" name="longitude" class="form-control" id="longitude" placeholder="Longitude" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <select name="jenis_faskes_id" id="jenis_faskes_id" class="form-select" required>
                        <option value="">Select Jenis Faskes</option>
                        <option value="1">Jenis Faskes 1</option>
                        <option value="2">Jenis Faskes 2</option>
                        <option value="3">Jenis Faskes 3</option>
                    </select>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select name="kategori_id" id="kategori_id" class="form-select" required>
                        <option value="">Select Kategori</option>
                        <option value="1">Kategori 1</option>
                        <option value="2">Kategori 2</option>
                        <option value="3">Kategori 3</option>
                    </select>
                </div>
                <div class="col-md-4 form-group mt-3">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
              </div>
            </div>
        </form>
    </div>
    

    </section><!-- /Appointment Section -->
  </main>

  @include('layouts.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>