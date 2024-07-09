@include('layouts.header')

<div class="container-fluid">
    <div class="wrapper">
        {{-- <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Fasilitas Kesehatan</h1>
                    </div>
                </div>
            </div>
        </section> --}}

    </br>

        <div class="container col-lg-10 col-md-6 d-flex flex">
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

                                <form action="{{ route('rolefaskes.update', $faskes->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="nama">Nama:</label>
                                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $faskes->nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_pengelola">Nama Pengelola:</label>
                                        <input type="text" name="nama_pengelola" class="form-control" id="nama_pengelola" value="{{ $faskes->nama_pengelola }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat:</label>
                                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $faskes->alamat }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Website:</label>
                                        <input type="text" name="website" class="form-control" id="website" value="{{ $faskes->website }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" class="form-control" id="email" value="{{ $faskes->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="kabkota_id">Kab/Kota ID:</label>
                                        <input type="number" name="kabkota_id" class="form-control" id="kabkota_id" value="{{ $faskes->kabkota_id }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="rating">Rating:</label>
                                        <input type="text" name="rating" class="form-control" id="rating" value="{{ $faskes->rating }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="latitude">Latitude:</label>
                                        <input type="text" name="latitude" class="form-control" id="latitude" value="{{ $faskes->latitude }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="longitude">Longitude:</label>
                                        <input type="text" name="longitude" class="form-control" id="longitude" value="{{ $faskes->longitude }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_faskes_id">Jenis Faskes ID:</label>
                                        <input type="number" name="jenis_faskes_id" class="form-control" id="jenis_faskes_id" value="{{ $faskes->jenis_faskes_id }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori_id">Kategori ID:</label>
                                        <input type="number" name="kategori_id" class="form-control" id="kategori_id" value="{{ $faskes->kategori_id }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>