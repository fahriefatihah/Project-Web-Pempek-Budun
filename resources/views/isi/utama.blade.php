@extends('template.master')
@section('nav')
<div class="header-area header-transparent pt-20">
    <div class="main-header header-sticky">
@endsection
@section('content')
<div class="slider-area position-relative fix">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                        <div class="hero__caption">
                            <span data-animation="fadeInUp" data-delay="0.2s">Dengan Makan Pempek Budun</span>
                            <h1 data-animation="fadeInUp" data-delay="0.5s">Perut & Lidah Akan Terasa Nikmat, Senikmat Pandangan Pertama </h1>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                        <div class="hero__caption">
                            <span data-animation="fadeInUp" data-delay="0.2s">Dengan Makan Pempek Budun</span>
                            <h1 data-animation="fadeInUp" data-delay="0.5s">Perut & Lidah Akan Terasa Nikmat, Senikmat Pandangan Pertama</h1>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </div>
    <!-- stroke Text -->
    <div class="stock-text">
        <h2>Coba Rasanya</h2>
        <h2>Coba Rasanya</h2>
    </div>
     <!-- Arrow -->
</div>
<!-- slider Area End-->
<!--? About Area Start -->
<section class="about-area section-padding30 position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-11">
                <!-- about-img -->
                <div class="about-img ">
                    <img src="{{ asset ('/template/assets/img/gallery/about.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle3 mb-35">
                        <span>Tentang Usaha Ini</span>
                        <h2>Pempek Di Buat oleh Keturunan Asli Orang Palembang Marga Raden Guguk 19 Ilir , </h2>
                    </div>
                    <p class="mb-30 pera-bottom">Rasa yang dihasilkan sangat khas karena dibuat dari tangan orang Palembang Asli .</p>
                    <p class="pera-top mb-50">Bahan dari ikan gabus yang mana bahan no 2 setelah ikan belida sebagai bahan membuat pempek terbaik.</p>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- About Shape -->
    <div class="about-shape">
        <img src="{{ asset ('/template/assets/img/gallery/about-shape.png')}}" alt="">
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
                    <span>Pelayanan Professional</span>
                    <h2>Pelayanan Terbaik Kami Persembahkan Hanya untuk Anda</h2>
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
<!-- Details Start -->
<div class="cut-details section-bg section-padding2" width="1920px" height="710px" data-background="{{ asset ('/template/assets/img/gallery/h1.jpg')}}">
   <div class="container">
    <div class="cut-active dot-style">
        <div class="single-cut">
            <div class="cut-icon mb-20">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px">
                    <image  x="0px" y="0px" width="50px" height="50px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBQ4MDDIERuyfAAADc0lEQVRYw7WYXWxTZRjH/+e0ikhh7QgfiYJZZ7bhBC6mU0LQ6DBADNGYLEaNJGpi4jTEQczYjQG8EL2ThAUTvTRGBwmECyBA+XRKHJpUL1yXFseWbe1ixgZCSAg/Lmo9bXe+up0+/5vT//Oc9/ee8z7nqwbyGbVqUL2iiuiurmtMKf2tu/52DXtW1OhVtekFRZTSkCY1rYcV0VI1arl+VULH9JvnGLhpHT/wD728z+M22QVs5ksyJOlkgds4zqlWEgzSQQ3uEzF4ju8ZpZsHK4NEOcgo7xL2AFhq4CgDtPmHPEWGg0R9AwrayjD77CY2s/RtsrRXDMhrCSc5wyIvyE6GaJ4lQogQB/idZW6QjxlkxRwQee0lWdoupec0a9uqlauHM8VrYyXqyLIuEIQIcYLPZ0JC/EJnQIh8C4xYDV0wO0hgBAgRm0kxrxhSS46mQBFCHKa7GLKbbwNHiCayRAqQCBMBdVW5etlRgGzjWFUQYgMDGHnIaZfbSIxTWNFP3MGzl0GaViQWMVXoAhv9SGn0O3hO+oLPkHiZ4y5FacrD3nPSJn5GptbrJ7+P+VnERa3VA6bWKFlFyC0NqdFUXOkqQqS06kwt1XhVIeNaZiqqSZeS0z4955jWwrBCuudSskvSRklSTDEXzznuaJ74l/m+rt4Wm3Zt8WxhcYAOU5Na7OuwJ3165RHTlKlhrfQFaZckXfH0ymOFhsNKaZX6POYSU7v2SZJ6XTz7aFJKbKfH9ZxuLLp9pIk5evaKM4ZMndXzrjOJ/7+V0Uv/rYKdZx9tOi8Jg3HqPY+kn66iGdt59jrMe/nnyX52V+mhVcsNFuchLWQqeH+vRB9xCBVeJC7xZhUQYTKstyBb+JNQ4JB3OJvfKhgJPggYEeEaz5ZCmpgI4H2+WD18Xdi2zG4uBbj8r5GxvtUs2+AE+wNCrCZHq/W7OBUlya4AEI9yjbeKnfL0VbrmiIgzyCelXnnJI/zBV3NYm6cZoaPcnVkW4yQXZtVpBp1keWVmxq7YpIsc2ys8nmbOc5k6u5zTLqtIkOQNn/eBer4hx4eY9nm3XbdwkTSfun67PEQ7R8ixh1rnKsPj/64WbdPrmtI5XdGAruqGrmu+IlquBj2hDXpGl/WdDumm2yBeEEky9KRe1Go16jFFFNVt3dSEUvpLfbqgae8B7gNdcvnkrRzZ4gAAAABJRU5ErkJggg==" />
                </svg>
            </div>
            <div class="cut-descriptions">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio dicta recusandae repudiandae cumque tenetur ipsa adipisci! Sequi molestiae reprehenderit iste voluptatibus suscipit, laudantium sed consequatur sint inventore, eaque dolorem exercitationem.</p>
                <span>JONT NICOLIN KOOK</span>
            </div>
        </div>
        <div class="single-cut">
            <div class="cut-icon mb-20">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px">
                    <image  x="0px" y="0px" width="50px" height="50px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBQ4MDDIERuyfAAADc0lEQVRYw7WYXWxTZRjH/+e0ikhh7QgfiYJZZ7bhBC6mU0LQ6DBADNGYLEaNJGpi4jTEQczYjQG8EL2ThAUTvTRGBwmECyBA+XRKHJpUL1yXFseWbe1ixgZCSAg/Lmo9bXe+up0+/5vT//Oc9/ee8z7nqwbyGbVqUL2iiuiurmtMKf2tu/52DXtW1OhVtekFRZTSkCY1rYcV0VI1arl+VULH9JvnGLhpHT/wD728z+M22QVs5ksyJOlkgds4zqlWEgzSQQ3uEzF4ju8ZpZsHK4NEOcgo7xL2AFhq4CgDtPmHPEWGg0R9AwrayjD77CY2s/RtsrRXDMhrCSc5wyIvyE6GaJ4lQogQB/idZW6QjxlkxRwQee0lWdoupec0a9uqlauHM8VrYyXqyLIuEIQIcYLPZ0JC/EJnQIh8C4xYDV0wO0hgBAgRm0kxrxhSS46mQBFCHKa7GLKbbwNHiCayRAqQCBMBdVW5etlRgGzjWFUQYgMDGHnIaZfbSIxTWNFP3MGzl0GaViQWMVXoAhv9SGn0O3hO+oLPkHiZ4y5FacrD3nPSJn5GptbrJ7+P+VnERa3VA6bWKFlFyC0NqdFUXOkqQqS06kwt1XhVIeNaZiqqSZeS0z4955jWwrBCuudSskvSRklSTDEXzznuaJ74l/m+rt4Wm3Zt8WxhcYAOU5Na7OuwJ3165RHTlKlhrfQFaZckXfH0ymOFhsNKaZX6POYSU7v2SZJ6XTz7aFJKbKfH9ZxuLLp9pIk5evaKM4ZMndXzrjOJ/7+V0Uv/rYKdZx9tOi8Jg3HqPY+kn66iGdt59jrMe/nnyX52V+mhVcsNFuchLWQqeH+vRB9xCBVeJC7xZhUQYTKstyBb+JNQ4JB3OJvfKhgJPggYEeEaz5ZCmpgI4H2+WD18Xdi2zG4uBbj8r5GxvtUs2+AE+wNCrCZHq/W7OBUlya4AEI9yjbeKnfL0VbrmiIgzyCelXnnJI/zBV3NYm6cZoaPcnVkW4yQXZtVpBp1keWVmxq7YpIsc2ys8nmbOc5k6u5zTLqtIkOQNn/eBer4hx4eY9nm3XbdwkTSfun67PEQ7R8ixh1rnKsPj/64WbdPrmtI5XdGAruqGrmu+IlquBj2hDXpGl/WdDumm2yBeEEky9KRe1Go16jFFFNVt3dSEUvpLfbqgae8B7gNdcvnkrRzZ4gAAAABJRU5ErkJggg==" />
                </svg>
            </div>
            <div class="cut-descriptions">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis deserunt facilis sed quod officiis soluta blanditiis fugit eaque aliquid debitis voluptates est voluptate, placeat, tempore vel id aut. Distinctio, velit.</p>
                <span>JONT NICOLIN KOOK</span>
            </div>
        </div>
        <div class="single-cut">
            <div class="cut-icon mb-20">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px">
                    <image  x="0px" y="0px" width="50px" height="50px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBQ4MDDIERuyfAAADc0lEQVRYw7WYXWxTZRjH/+e0ikhh7QgfiYJZZ7bhBC6mU0LQ6DBADNGYLEaNJGpi4jTEQczYjQG8EL2ThAUTvTRGBwmECyBA+XRKHJpUL1yXFseWbe1ixgZCSAg/Lmo9bXe+up0+/5vT//Oc9/ee8z7nqwbyGbVqUL2iiuiurmtMKf2tu/52DXtW1OhVtekFRZTSkCY1rYcV0VI1arl+VULH9JvnGLhpHT/wD728z+M22QVs5ksyJOlkgds4zqlWEgzSQQ3uEzF4ju8ZpZsHK4NEOcgo7xL2AFhq4CgDtPmHPEWGg0R9AwrayjD77CY2s/RtsrRXDMhrCSc5wyIvyE6GaJ4lQogQB/idZW6QjxlkxRwQee0lWdoupec0a9uqlauHM8VrYyXqyLIuEIQIcYLPZ0JC/EJnQIh8C4xYDV0wO0hgBAgRm0kxrxhSS46mQBFCHKa7GLKbbwNHiCayRAqQCBMBdVW5etlRgGzjWFUQYgMDGHnIaZfbSIxTWNFP3MGzl0GaViQWMVXoAhv9SGn0O3hO+oLPkHiZ4y5FacrD3nPSJn5GptbrJ7+P+VnERa3VA6bWKFlFyC0NqdFUXOkqQqS06kwt1XhVIeNaZiqqSZeS0z4955jWwrBCuudSskvSRklSTDEXzznuaJ74l/m+rt4Wm3Zt8WxhcYAOU5Na7OuwJ3165RHTlKlhrfQFaZckXfH0ymOFhsNKaZX6POYSU7v2SZJ6XTz7aFJKbKfH9ZxuLLp9pIk5evaKM4ZMndXzrjOJ/7+V0Uv/rYKdZx9tOi8Jg3HqPY+kn66iGdt59jrMe/nnyX52V+mhVcsNFuchLWQqeH+vRB9xCBVeJC7xZhUQYTKstyBb+JNQ4JB3OJvfKhgJPggYEeEaz5ZCmpgI4H2+WD18Xdi2zG4uBbj8r5GxvtUs2+AE+wNCrCZHq/W7OBUlya4AEI9yjbeKnfL0VbrmiIgzyCelXnnJI/zBV3NYm6cZoaPcnVkW4yQXZtVpBp1keWVmxq7YpIsc2ys8nmbOc5k6u5zTLqtIkOQNn/eBer4hx4eY9nm3XbdwkTSfun67PEQ7R8ixh1rnKsPj/64WbdPrmtI5XdGAruqGrmu+IlquBj2hDXpGl/WdDumm2yBeEEky9KRe1Go16jFFFNVt3dSEUvpLfbqgae8B7gNdcvnkrRzZ4gAAAABJRU5ErkJggg==" />
                </svg>
            </div>
            <div class="cut-descriptions">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto corrupti quos hic ex cum similique, saepe aliquid ab, labore eligendi nostrum natus tenetur, voluptatem dolore iusto animi! Exercitationem, magnam suscipit.</p>
                <span>JONT NICOLIN KOOK</span>
            </div>
        </div>
    </div>
   </div>
</div>
<!-- Cut Details End -->
<!--? Blog Area Start -->
<section class="home-blog-area section-padding30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <div class="section-tittle text-center mb-90">
                    <span>Informasi Terbaru</span>
                    <h2>Seputar Event & Promo Pempek Budun</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="{{ asset ('/template/assets/img/gallery/buahtangan.png')}}" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span>24</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <p>|   Promo</p>
                            <h3><a href="blog_details.html">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="{{ asset ('/template/assets/img/gallery/buahtangan.png')}}" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span>24</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <p>|   Promo</p>
                            <h3><a href="blog_details.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. </a></h3>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection