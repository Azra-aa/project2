@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Kabkota</h1>
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
                                <h3 class="card-title">{{ $kabkota->nama }}</h3>
                            </div>
                            <div class="card-body">
                                <p><strong>Nama:</strong> {{ $kabkota->nama }}</p>
                                <p><strong>Latitude:</strong> {{ $kabkota->latitude }}</p>
                                <p><strong>Longitude:</strong> {{ $kabkota->longitude }}</p>
                                <p><strong>Provinsi:</strong> {{ $kabkota->provinsi->nama }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('kabkota.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
