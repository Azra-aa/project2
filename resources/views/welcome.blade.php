<body class="index-page">

  @include('layouts.navbar')

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
              <h3>Tujuan</h3>
              <p class="text-justify">
                Memberikan informasi yang tepat dan terkini mengenai berbagai fasilitas kesehatan seperti rumah sakit, klinik, puskesmas, dan apotek kepada masyarakat. 
                Dan membantu pemerintah dan organisasi kesehatan dalam memetakan distribusi fasilitas kesehatan dan mengidentifikasi daerah yang kekurangan layanan kesehatan.
              </p>
              <div class="text-center">
                  <a href="https://www.instagram.com/ajra.ahmad/" class="more-btn"><i class="bi bi-instagram"></i><span> ajra.ahmad</span></i></a>
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
                                  <td><a href="https://{{ $faskes->website }}" target="_blank">{{ $faskes->website }}</a></td>
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
                      <form method="GET" action="{{ route('welcome') }}#faskes-sort-table" class="d-flex">
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
                      <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
      AOS.init();
  </script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>