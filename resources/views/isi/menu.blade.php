@extends('template.master')
@section('nav')
<div class="header-area header-transparent pt-20">
    <div class="main-header header-sticky">
@endsection
@section('content')
<section class="service-area section-padding30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11">
                <div class="section-tittle text-center mb-90">
                    <span>Pelayanan Profesional</span>
                    <h2>Pelayanan Terbaik Kami Persembahkan Hanya Untuk Anda</h2>
                </div>
            </div>
        </div>
        <!-- Section caption -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-caption text-center mb-30">
                    <div class="service-icon">
                        <img src="{{ asset ('/template/assets/img/gallery/buahtangan.png')}}" width="150" height="118" alt="">
                    </div> 
                    <div class="service-cap">
                        <h4><a href="#">Paket Buah Tangan Pempek</a></h4>
                        <p>Kami menyediakan paket khusus untuk oleh oleh yang terjamin kualitas nya serta harga yang sudah di pertimbangkan.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-caption active text-center mb-30">
                    <div class="service-icon">
                        <img src="{{ asset ('/template/assets/img/gallery/hajatan.png')}}" width="150" height="150" alt="">
                    </div> 
                    <div class="service-cap">
                        <h4><a href="#">Paket Hajatan Pempek</a></h4>
                        <p>Paket ini kami rancang agar tamu tidak ngantuk saat hajatan dirumah anda.</p>
                    </div>
                </div>
            </div> 
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-caption text-center mb-30">
                    <div class="service-icon">
                        <img src="{{ asset ('/template/assets/img/gallery/keluarga.png')}}" width="150" height="150" alt="">
                    </div> 
                    <div class="service-cap">
                        <h4><a href="#">Paket Keluarga Pempek</a></h4>
                        <p>Pempek yang telah di porsikan untuk keluarga besar maupun kecil sesuai selera anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection