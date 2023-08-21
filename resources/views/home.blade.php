@extends('layouts.app')
@section('content')

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>Selamat Datang di Jawir Store</h4>
                            <span>Terbaik,Nyaman &amp; Limited,Autentik </span>
                            <div class="main-border-button">
                                <a href="{{ route('product.index') }}">Purchase Now!</a>
                            </div>
                        </div>
                        <img src="{{ asset('/img/batik.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Kebaya</h4>
                                        <span>Kebaya Terbaik</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Kebaya</h4>
                                            <p>Kebaya adalah pakaian bagian atas yang di khususkan untuk wanita .</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('/img/kebaya.png') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Baju Batik</h4>
                                        <span>Batik Tangan Terbaik</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Baju Batik</h4>
                                            <p>Batik adalah teknik pewarnaan tahan lilin Indonesia teknik ini berasal dari pulau Jawa, Indonesia .</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('/img/baju batik.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Battik Anak</h4>
                                        <span>Batik Untuk Anak</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Batik Anak</h4>
                                            <p>Batik anak dengan kualiats terbaik dan nyaman di gunakan untuk anak.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('/img/anak.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Accessories</h4>
                                        <span>Aksesoris Terbaik</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Accessories</h4>
                                            <p>Aksesiris jawa terbaik.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('/img/blangkon.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Explore Area Starts ***** -->
<section class="section" id="explore">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <h2>Jawir Store</h2>
                    <span>Batik kualitas terbaik di dunia dengan design yang exlusive.</span>
                    <div class="quote">
                        <p>" belilah batik terbaik disini . "</p>
                    </div>
                    <p>Toko batik adalah sebuah toko yang menjual berbagai jenis produk batik, mulai dari kain batik, pakaian batik, aksesoris batik, hingga kerajinan tangan dari batik. Toko batik biasanya memiliki koleksi desain batik yang bervariasi, baik batik tradisional maupun batik modern. Di dalam toko batik, terdapat juga jasa pembuatan baju atau pakaian batik sesuai dengan keinginan pelanggan.</p>
                    <p>Terima kasih telah memilih kami sebagai toko batik online pilihan Anda <a rel="nofollow" href="https://instagram.com/chaidir8990" target="_blank">support </a>Ini sangat berarti bagi kami dan memotivasi kami untuk terus memperbaiki dan memberikan pengalaman belanja terbaik yang mungkin bagi Anda. </p>
                    <div class="main-border-button">
                        <a href="{{ route('product.index') }}">Discover More</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ***** Explore Area Ends ***** -->

<!-- ***** Subscribe Area Starts ***** -->
<div class="subscribe">
    <div class="">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading">
                    <h2>
                        Get an exclusive discount of 30% off by subscribing to our newsletter.</h2>
                    <span>Join our community and be the first to know about our latest promotions, new arrivals, and special offers.</span>
                </div>
                <form id="subscribe" action="" method="get">
                    <div class="row">
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-2">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Store Location:<br><span>Semarang, Indonesia</span></li>
                            <li>Phone:<br><span>0123-321</span></li>
                            <li>Office Location:<br><span>Temabalang-Semarang</span></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                            <li>Email:<br><span>JawirStore@gmail.com</span></li>
                            <li>Social Media:<br><span><a href="https://id-id.facebook.com/">Facebook</a>, <a href="https://www.instagram.com/">Instagram</a>, <a href="https://www.youtube.com/">Youtube</a> </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Subscribe Area Ends ***** -->
@endsection