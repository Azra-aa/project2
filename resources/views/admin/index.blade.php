@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
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

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Project UAS</h3>
                </div>
                <div class="card-body">
                    Albani Ilham - 0110123207
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.provinsi.index') }}"><button class='btn btn-success'>Daftar Provinsi</button></a>
                    <a href="{{ route('admin.kabkota.index') }}"><button class='btn btn-success'>Daftar Kabkota</button></a>
                    <a href="{{ route('admin.faskes.index') }}"><button class='btn btn-success'>Daftar Faskes</button></a>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
