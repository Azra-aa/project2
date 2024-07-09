@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Provinsi</h1>
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
                                <h2 class="text-center">Data Provinsi</h2>
                                <a href="{{ route('admin.provinsi.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>                                       
                                                <th>Nama</th>
                                                <th>Ibukota</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_provinsis as $provinsi)
                                                <tr>
                                                    <td>{{ $provinsi->id }}</td>
                                                    <td>{{ $provinsi->nama }}</td>
                                                    <td>{{ $provinsi->ibukota }}</td>
                                                    <td>{{ $provinsi->latitude }}</td>
                                                    <td>{{ $provinsi->longitude }}</td>
                                                    <td>
                                                        {{-- <a href="{{ route('faskes.show', $provinsi->id) }}" class="btn btn-info">Lihat Detail</a> --}}
                                                        <a href="{{ route('admin.provinsi.edit', $provinsi->id) }}"><button class="btn btn-warning">Edit</button></a>
                                                        <form action="{{ route('admin.provinsi.destroy', $provinsi->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>        
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('admin.kabkota.index') }}"><button class='btn btn-success'>Daftar Kabkota</button></a>
                                <a href="{{ route('admin.faskes.index') }}"><button class='btn btn-success'>Daftar Faskes</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
