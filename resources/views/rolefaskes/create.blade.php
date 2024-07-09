@include('layouts.header')

<div id="create-faskes" class="appointment section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Create Faskes</h2>
        <p>Isi form di bawah untuk menambahkan fasilitas kesehatan baru</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('rolefaskes.store') }}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Faskes" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="nama_pengelola" id="nama_pengelola" placeholder="Nama Pengelola" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="text" name="website" class="form-control" id="website" placeholder="Website">
                </div>
                <div class="col-md-4 form-group mt-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select name="kabkota_id" id="kabkota_id" class="form-select" required>
                        <option value="">Pilih Kota/Kabupaten</option>
                        @foreach($kabkotas as $kabkota)
                            <option value="{{ $kabkota->id }}">{{ $kabkota->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="number" name="rating" class="form-control" id="rating" placeholder="Rating" required>
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
                        <option value="">Pilih Jenis Faskes</option>
                        @foreach($jenis_faskes as $jenis)
                            <option value="{{ $jenis->id }}">{{ $jenis->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select name="kategori_id" id="kategori_id" class="form-select" required>
                        <option value="">Pilih Kategori</option>
                        @foreach($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mt-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Faskes berhasil ditambahkan.</div>
                <div class="text-center"><button type="submit">Simpan Faskes</button></div>
            </div>
        </form>
    </div>
</div>
@include('layouts.footer')