@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Faskes</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{ $faskes->nama }}</h3>
                            </div>
                            <div class="card-body">
                                <p><strong>Nama Pengelola:</strong> {{ $faskes->nama_pengelola }}</p>
                                <p><strong>Alamat:</strong> {{ $faskes->alamat }}</p>
                                <p><strong>Website:</strong> <a href="{{ $faskes->website }}" target="_blank">{{ $faskes->website }}</a></p>
                                <p><strong>Email:</strong> {{ $faskes->email }}</p>
                                <p><strong>Kabkota:</strong> {{ $faskes->kabkota->nama }}</p>
                                <p><strong>Rating:</strong> {{ $faskes->rating }}</p>
                                <p><strong>Latitude:</strong> {{ $faskes->latitude }}</p>
                                <p><strong>Longitude:</strong> {{ $faskes->longitude }}</p>
                                <p><strong>Jenis Faskes:</strong> {{ $faskes->jenis_faskes->nama }}</p>
                                <p><strong>Kategori:</strong> {{ $faskes->kategori->nama }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('faskes.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
