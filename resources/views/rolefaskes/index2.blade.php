@include('layouts.header')

<div class="container-fluid">
    <!-- Content Wrapper. Contains page content -->
    <div class="container col-lg-10 col-md-6 d-flex flex-column align-items-center">
    </br>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center">Data Faskes</h2>
                                <a href="{{ route('rolefaskes.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
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
                                                <th>Kabkota ID</th>
                                                <th>Rating</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Jeneis Faskes ID</th>
                                                <th>Kategori ID</th>
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
                                                <td>{{ $faskes->kategori_id }}</td>
                                                <td>
                                                    {{-- <a href="{{ route('faskes.show', $faskes->id) }}" class="btn btn-info">Lihat Detail</a> --}}
                                                    <a href="{{ route('rolefaskes.edit', $faskes->id) }}"><button class='btn btn-warning'>Edit</button></a>
                                                    <form action="{{ route('rolefaskes.destroy', $faskes->id) }}" method="POST" style="display:inline;">
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
                            
                        </div>

                    </br>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('layouts.footer')