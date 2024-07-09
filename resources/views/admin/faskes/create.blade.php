@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Fasilitas Kesehatan</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> Ada masalah dengan inputan anda.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('admin.faskes.store') }}" method="POST">
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
                                        <label for="kabkota_id">Kab/Kota ID:</label>
                                        <input type="number" name="kabkota_id" class="form-control" id="kabkota_id" placeholder="Kab/Kota ID">
                                    </div>
                                    <div class="form-group">
                                        <label for="rating">Rating:</label>
                                        <input type="text" name="rating" class="form-control" id="rating" placeholder="Rating">
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
                                        <input type="number" name="jenis_faskes_id" class="form-control" id="jenis_faskes_id" placeholder="Jenis Faskes ID">
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori_id">Kategori ID:</label>
                                        <input type="number" name="kategori_id" class="form-control" id="kategori_id" placeholder="Kategori ID">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
