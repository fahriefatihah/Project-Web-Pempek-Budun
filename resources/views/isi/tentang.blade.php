@extends('template.master')
@section('nav')
<div class="header-area header-transparent pt-20">
    <div class="main-header header-sticky">
@endsection
@section('content')
    <!--? About Area Start -->
    <section class="about-area section-padding30 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-11">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="{{ asset ('/template/assets/img/gallery/h1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle3 mb-35">
                            <span>Tentang Usaha Ini</span>
                            <h2>30 Tahun Pengalaman Membuat Pempek !</h2>
                        </div>
                        <p class="mb-30 pera-bottom">Brook presents your services with flexible, convenient and cdpoe layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfreplication of the designers is intended.</p>
                        <p class="pera-top mb-50">Brook presents your services with flexible, convefnient and ent anipurpose layouts. You can select your favorite.</p>
                        <img src="{{asset('assets/img/gallery/signature.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Shape -->
        <div class="about-shape">
            <img src="{{asset('assets/img/gallery/about-shape.png')}}" alt="">
        </div>
    </section>
    <!-- About-2 Area End -->
    <!--? Services Area Start -->
    <section class="service-area pb-170">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11">
                    <div class="section-tittle text-center mb-90">
                        <span>Pelayanan Profesional</span>
                        <h2>Pelayanan Terbaik Kami Persembahkan Hanya Untuk Anda </h2>
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
    <!-- Services Area End -->
@endsection