@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Direktori Fasilitas Kesehatan</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">                            
                            <div class="card-body">
                                <h2 class="text-center">Data Kab/Kota</h2>
                                <a href="{{ route('admin.kabkota.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
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
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Provinsi ID</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_kabkotas as $kabkota)
                                            <tr>
                                                <td>{{ $kabkota->id }}</td>
                                                <td>{{ $kabkota->nama }}</td>
                                                <td>{{ $kabkota->latitude }}</td>
                                                <td>{{ $kabkota->longitude }}</td>
                                                <td>{{ $kabkota->provinsi_id }}</td>
                                                <td>
                                                    {{-- <a href="{{ route('kabkota.show', $kabkota->id) }}" class="btn btn-info">Lihat Detail</a> --}}
                                                    <a href="{{ route('admin.kabkota.edit', $kabkota->id) }}"><button class='btn btn-warning'>Edit</button></a>
                                                    <form action="{{ route('admin.kabkota.destroy', $kabkota->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type='submit' class='btn btn-danger' onclick="return confirm('Yakin Hapus Data?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="{{ route('admin.provinsi.index') }}"><button class='btn btn-success'>Daftar Provinsi</button></a>
                                <a href="{{ route('admin.faskes.index') }}"><button class='btn btn-success'>Daftar Faskes</button></a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
@include('admin.footer')
