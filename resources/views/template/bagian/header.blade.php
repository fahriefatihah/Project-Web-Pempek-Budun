@yield('nav')
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-xl-2 col-lg-2 col-md-1">
                    <div class="logo">
                        <a href="/"><img src="{{ asset ('/template/assets/img/logo/bahanmockup.png')}}" width="170px" height="100px" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10">
                    <div class="menu-main d-flex align-items-center justify-content-end">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li class="active"><a href="/">Utama</a></li>
                                    <li><a href="/tentang">Tentang</a></li>
                                    <li><a href="/menu">Menu</a></li>
                                    <li><a href="/selera-anda">Selera Anda</a></li>
                                    <li><a href="/kontak-kami">Kontak</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>   
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>