@include('layouts.header')


<section id="appointment" class="appointment section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Appointment</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <form action="{{ route('rolefaskes.store') }}" method="POST" role="form" class="php-email-form">
            @csrf
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Faskes" required="">
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" name="nama_pengelola" class="form-control" id="nama_pengelola" placeholder="Nama Pengelola" required="">
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="text" name="website" class="form-control" id="website" placeholder="Website" required="">
                </div>
                <div class="col-md-4 form-group mt-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="">
                </div>
                <div class="col-md-4 form-group mt-3">
                    <input type="number" name="kabkota_id" class="form-control" id="kabkota_id" placeholder="Kab/Kota ID" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="text" name="rating" class="form-control" id="rating" placeholder="Rating" required="">
                </div>
                <div class="col-md-4 form-group mt-3">
                    <input type="text" name="latitude" class="form-control" id="latitude" placeholder="Latitude" required="">
                </div>
                <div class="col-md-4 form-group mt-3">
                    <input type="text" name="longitude" class="form-control" id="longitude" placeholder="Longitude" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="number" name="jenis_faskes_id" class="form-control" id="jenis_faskes_id" placeholder="Jenis Faskes ID" required="">
                </div>
                <div class="col-md-4 form-group mt-3">
                    <input type="number" name="kategori_id" class="form-control" id="kategori_id" placeholder="Kategori ID" required="">
                </div>
            </div>
            <div class="mt-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                <div class="text-center">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>


@include('layouts.footer')