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
                                <h2 class="text-center">Data Faskes</h2>
                                <a href="{{ route('admin.faskes.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
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
                                                <th>Nama Pengelola</th>
                                                <th>Alamat</th>
                                                <th>Website</th>
                                                <th>Email</th>
                                                <th>Kabkota</th>
                                                <th>Rating</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Jeneis Faskes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_faskes as $faskes)
                                            <tr>
                                                <td>{{ $faskes->id }}</td>
                                                <td>{{ $faskes->nama }}</td>
                                                <td>{{ $faskes->nama_pengelola }}</td>
                                                <td>{{ $faskes->alamat }}</td>
                                                <td>{{ $faskes->website }}</td>
                                                <td>{{ $faskes->email }}</td>
                                                <td>{{ $faskes->kabkota_id }}</td>
                                                <td>{{ $faskes->rating }}</td>
                                                <td>{{ $faskes->latitude }}</td>
                                                <td>{{ $faskes->longitude }}</td>
                                                <td>{{ $faskes->jenis_faskes_id }}</td>
                                                <td>
                                                    {{-- <a href="{{ route('faskes.show', $faskes->id) }}" class="btn btn-info">Lihat Detail</a> --}}
                                                    <a href="{{ route('admin.faskes.edit', $faskes->id) }}"><button class='btn btn-warning'>Edit</button></a>
                                                    <form action="{{ route('admin.faskes.destroy', $faskes->id) }}" method="POST" style="display:inline;">
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
                                <a href="{{ route('admin.kabkota.index') }}"><button class='btn btn-success'>Daftar Kabkota</button></a>
                                <a href="{{ route('admin.provinsi.index') }}"><button class='btn btn-success'>Daftar Provinsi</button></a>
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