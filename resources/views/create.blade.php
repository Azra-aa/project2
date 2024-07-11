@include('layouts.header')
<body class="index-page">

    @include('layouts.navbar')
  
    <main class="main">
      <!-- daftar-faskes Section -->
      <section id="daftar-faskes" class="daftar-faskes section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="container form-container" data-aos="fade-up" data-aos-delay="100">
            
            <div class="container section-title" data-aos="fade-up">
              <h2>Daftar Faskes</h2>
              <p>Ayo daftarkan Fasilitas Kesehatan (FASKES) anda di bawah sini!</p>
            </div>
            <form action="{{ route('faskes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Faskes">
                </div>
                <div class="form-group">
                    <label for="nama_pengelola">Nama Pengelola:</label>
                    <input type="text" name="nama_pengelola" class="form-control" id="nama_pengelola" placeholder="Nama Pengelola">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label for="website">Website:</label>
                    <input type="text" name="website" class="form-control" id="website" placeholder="Website">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="kabkota_id">Kab/Kota:</label>
                    <select name="kabkota_id" id="kabkota_id" class="form-control">
                        <option value="">Select Kab/Kota</option>
                        <option value="1">Kab/Kota 1</option>
                        <option value="2">Kab/Kota 2</option>
                        <option value="3">Kab/Kota 3</option>
                        <option value="4">Kab/Kota 4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rating">Rating:</label>
                    <input type="number" name="rating" class="form-control" id="rating" placeholder="Rating">
                </div>
                <div class="form-group">
                    <label for="latitude">Latitude:</label>
                    <input type="text" name="latitude" class="form-control" id="latitude" placeholder="Latitude">
                </div>
                <div class="form-group">
                    <label for="longitude">Longitude:</label>
                    <input type="text" name="longitude" class="form-control" id="longitude" placeholder="Longitude">
                </div>
                <div class="form-group">
                    <label for="jenis_faskes_id">Jenis Faskes ID:</label>
                    <select name="jenis_faskes_id" id="jenis_faskes_id" class="form-control">
                        <option value="">Select Faskes ID:</option>
                        <option value="1">Kab/Kota 1</option>
                        <option value="2">Kab/Kota 2</option>
                        <option value="3">Kab/Kota 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kategori_id">Kategori ID:</label>
                    <select name="kategori_id" id="kategori_id" class="form-control">
                        <option value="">Select Kategori ID:</option>
                        <option value="1">Kategori 1</option>
                        <option value="2">Kategori 2</option>
                        <option value="3">Kategori 3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
      </section><!-- /daftar-faskes Section -->
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