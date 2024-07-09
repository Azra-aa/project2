@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Provinsi</h1>
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
                                <h3 class="card-title">{{ $provinsi->nama }}</h3>
                            </div>
                            <div class="card-body">
                                <p><strong>Nama:</strong> {{ $provinsi->nama }}</p>
                                <p><strong>Ibukota:</strong> {{ $provinsi->ibukota }}</p>
                                <p><strong>Latitude:</strong> {{ $provinsi->latitude }}</p>
                                <p><strong>Longitude:</strong> {{ $provinsi->longitude }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('provinsi.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
