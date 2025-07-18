@extends('frontend.layouts.app')

@section('content')
<main>
    <div class="feature pt-40 pb-30">
        <div class="container">
            <div class="feature__wrap ul_li">
                <div class="feature__item ul_li">
                    <div class="icon">
                        <img src="assets/img/icon/feat_01.svg" alt="">
                    </div>
                    <div class="content">
                        <h3>Free Shipping</h3>
                        <p>Gratis ongkir belanja $100+</p>
                    </div>
                </div>
                <div class="feature__item ul_li">
                    <div class="icon">
                        <img src="assets/img/icon/feat_02.svg" alt="">
                    </div>
                    <div class="content">
                        <h3>Payment Secure</h3>
                        <p>Dapat 100% Bayar Aman</p>
                    </div>
                </div>
                <div class="feature__item ul_li">
                    <div class="icon">
                        <img src="assets/img/icon/feat_03.svg" alt="">
                    </div>
                    <div class="content">
                        <h3>Support 24/7</h3>
                        <p>Pelayanan Pelanggan 24/7</p>
                    </div>
                </div>
                <div class="feature__item ul_li">
                    <div class="icon">
                        <img src="assets/img/icon/feat_04.svg" alt="">
                    </div>
                    <div class="content">
                        <h3>100% Money Back</h3>
                        <p>100% Uang Kembali</p>
                    </div>
                </div>
                <div class="feature__item ul_li">
                    <div class="icon">
                        <img src="assets/img/icon/feat_05.svg" alt="">
                    </div>
                    <div class="content">
                        <h3>Quality Products</h3>
                        <p>Setiap Produk Berkualitas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- feature end -->

    <!-- tab product start -->
    <div class="tab-product pt-40 pb-40">
        <div class="container">
            <div class="product__nav-wrap ul_li_between mb-20">
                <h2 class="section-heading"><span>Hot <span>New Arrival</span> You May Like</span></h2>
                <ul class="product__nav rd-tab-nav nav nav-tabs" id="vd-myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="vd-tab-01" data-bs-toggle="tab" data-bs-target="#vd-tab1" type="button" role="tab" aria-controls="vd-tab1" aria-selected="true">Recent</button>
                    </li>

                </ul>
            </div>
            <div class="vd-products">
                <div class="tab-content tab_has_slider" id="vd-myTabContent">
                    <div class="tab-pane fade show active" id="vd-tab4" role="tabpanel" aria-labelledby="vd-tab-04">

                        @foreach ($products as $item)

                        <div class="tab-product__slide tx-arrow">
                            <div class="tab-product__item tx-product text-center">
                                <div class="thumb">
                                    <form id="checkout-form">
                                        <input type="hidden" id="total_price" value="{{ $item->product_price }}">
                                        <button type="submit" id="pay-button"> Bayar </button>
                                    {{-- <a href="shop-single.html"><img src="/storage/product_images/{{ $item->product_images }}" alt=""></a> --}}
                                </div>
                                <div class="content">

                                    <h3 class="title"><a href="shop-single.html">{{ $item->product_name }}</a></h3>
                                    <span class="price">Rp. {{ $item->product_price }}</span>
                                </div>
                                <ul class="product__action">
                                    <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                    <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                    <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <span class="badge-skew">New</span>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- tab product end -->

    <!-- rd slide product start -->
    <div class="rd-slide-product">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-lg-3 mt-30">
                    <div class="product-category" data-background="assets/img/bg/cat_bg.jpg">
                        <h2 class="section-heading mb-25"><span><span>Catagory</span></span></h2>
                        <ul class="list-unstyled">
                            <li class="cat-item-has-children"><a href="#!"><img src="assets/img/icon/cat_01.svg" alt="">Speaker Bluetooth</a></li>
                            <li class="cat-item-has-children"><a href="#!"><img src="assets/img/icon/cat_02.svg" alt="">Kamera digital</a></li>
                            <li class="cat-item-has-children"><a href="#!"><img src="assets/img/icon/cat_03.svg" alt="">Alat Cukur</a></li>
                            <li><a href="#!"><img src="assets/img/icon/cat_04.svg" alt="">Penggorengan listrik</a></li>
                            <li class="cat-item-has-children"><a href="#!"><img src="assets/img/icon/cat_05.svg" alt="">Kipas angin</a></li>
                            <li class="cat-item-has-children"><a href="#!"><img src="assets/img/icon/cat_06.svg" alt="">hard drive eksternal</a></li>
                            <li><a href="#!"><img src="assets/img/icon/cat_07.svg" alt="">Senter Penerangan</a></li>
                            <li><a href="#!"><img src="assets/img/icon/cat_08.svg" alt="">Mesin cuci</a></li>
                            <li class="cat-item-has-children"><a href="#!"><img src="assets/img/icon/cat_09.svg" alt="">Lampu Hias</a></li>
                            <li><a href="#!"><img src="assets/img/icon/cat_10.svg" alt="">Jam Tangan</a></li>
                            <li class="more-item"><a href="#!">+ Item lainnya</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 mt-30">
                    <div class="rd-slide-products">
                        <h2 class="section-heading mb-25"><span>Trending Product</span></h2>
                        <div class="rd-product__slide tx-arrow">
                            <div class="rd-product__slide-item">
                                <div class="product__item">
                                    <div class="product__img text-center pos-rel">
                                        <a href="shop-single.html"><img src="assets/img/product/img_07.png" alt=""></a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__review ul_li_center">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">Ninja Compact Smoothie & Food Processing Blender</a></h2>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                    <ul class="product__action">
                                        <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                        <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="badge-skew">New</span>
                                </div>
                                <div class="product__item">
                                    <div class="product__img text-center pos-rel">
                                        <a href="shop-single.html"><img src="assets/img/product/img_08.png" alt=""></a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__review ul_li_center">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">DEWALT 20V MAX* XR Oscillating Tool Kit</a></h2>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                    <ul class="product__action">
                                        <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                        <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="badge-skew">New</span>
                                </div>
                            </div>
                            <div class="rd-product__slide-item">
                                <div class="product__item">
                                    <div class="product__img text-center pos-rel">
                                        <a href="shop-single.html"><img src="assets/img/product/img_09.png" alt=""></a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__review ul_li_center">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">Lenovo – Tab P11 Plus – Tablet – 11″ 2K Display</a></h2>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                    <ul class="product__action">
                                        <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                        <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="badge-skew">New</span>
                                </div>
                                <div class="product__item">
                                    <div class="product__img text-center pos-rel">
                                        <a href="shop-single.html"><img src="assets/img/product/img_10.png" alt=""></a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__review ul_li_center">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">Aroma Housewares 4-Cups 1Qt. Rice & Grain</a></h2>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                    <ul class="product__action">
                                        <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                        <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="badge-skew">New</span>
                                </div>
                            </div>
                            <div class="rd-product__slide-item">
                                <div class="product__item">
                                    <div class="product__img text-center pos-rel">
                                        <a href="shop-single.html"><img src="assets/img/product/img_11.png" alt=""></a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__review ul_li_center">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">SAMSUNG Galaxy A13 5G Cell Phone, Factory Unlocked</a></h2>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                    <ul class="product__action">
                                        <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                        <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="badge-skew">New</span>
                                </div>
                                <div class="product__item">
                                    <div class="product__img text-center pos-rel">
                                        <a href="shop-single.html"><img src="assets/img/product/img_12.png" alt=""></a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__review ul_li_center">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">SAMSUNG Galaxy S20 FE 5G Cell Phone, Factory</a></h2>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                    <ul class="product__action">
                                        <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                        <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="badge-skew">New</span>
                                </div>
                            </div>
                            <div class="rd-product__slide-item">
                                <div class="product__item">
                                    <div class="product__img text-center pos-rel">
                                        <a href="shop-single.html"><img src="assets/img/product/img_13.png" alt=""></a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__review ul_li_center">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">Sceptre 24″ Professional Thin 75Hz 1080p LED Monitor</a></h2>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                    <ul class="product__action">
                                        <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                        <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="badge-skew">New</span>
                                </div>
                                <div class="product__item">
                                    <div class="product__img text-center pos-rel">
                                        <a href="shop-single.html"><img src="assets/img/product/img_14.png" alt=""></a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__review ul_li_center">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">Panasonic Cordless Phone System, Expandable</a></h2>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                    <ul class="product__action">
                                        <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                        <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="badge-skew">New</span>
                                </div>
                            </div>
                            <div class="rd-product__slide-item">
                                <div class="product__item">
                                    <div class="product__img text-center pos-rel">
                                        <a href="shop-single.html"><img src="assets/img/product/img_08.png" alt=""></a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__review ul_li_center">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">CLB 510BT Wireless Headphones with Purebass</a></h2>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                    <ul class="product__action">
                                        <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                        <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="badge-skew">New</span>
                                </div>
                                <div class="product__item">
                                    <div class="product__img text-center pos-rel">
                                        <a href="shop-single.html"><img src="assets/img/product/img_09.png" alt=""></a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__review ul_li_center">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">BenQ HT2050A 1080P Home Theater Projector Lumens</a></h2>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                    <ul class="product__action">
                                        <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                        <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="badge-skew">New</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rd slide product end -->

    <!-- rd tab product start -->
    <div class="rd-tab-product mt-60">
        <div class="container">
            <div class="product__nav-wrap ul_li_between mb-25">
                <h2 class="section-heading"><span><span>Smartphone</span> / Tablet / Monitor</span></h2>
                <ul class="product__nav nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Nokia</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Samsung</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="true">Apple</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Huawei</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-05" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="false">xioami 71</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane animated fadeInUp" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mt-none-30">
                        <div class="col-lg-4 mt-30">
                            <div class="row mt-none-30">
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_15.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Chromebook Flip Laptop, 14″ Full HD</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_16.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Aroma Housewares 4-Cups 1Qt. Rice & Grain Cooker</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_17.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">SAMSUNG Galaxy A13 5G Cell Phone, Factory</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_18.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Acer SB220Q bi 21.5 Inches Full HD (1920 x 1080)</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="rd-product__middle">
                                <h2 class="section-heading"><span>5 Star Review</span></h2>
                                <div class="tab-content" id="m-myTabContentm1">
                                    <div class="tab-pane fade show active" id="m-home1" role="tabpanel" aria-labelledby="m-home-tab1">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="m-profile1" role="tabpanel" aria-labelledby="m-profile-tab1">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="m-contact1" role="tabpanel" aria-labelledby="m-contact-tab1">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="ul_li_between mb-6">
                                        <span class="product__available">Available: <span>334</span></span>
                                        <span class="product__available">Sold Out: <span>180</span></span>
                                    </div>
                                    <div class="product__progress progress h-10 color-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h2 class="title"><a href="shop-single.html">Amazon Cloud Cam Security</a></h2>
                                    <div class="product__review ul_li">
                                        <ul class="rating-star ul_li mr-10">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span>(126)</span>
                                    </div>
                                    <div class="mt-10">
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span><span class="off">-34%</span></h4>
                                    </div>
                                    <ul class="nav nav-tabs rd-img-nav" id="m-myTab1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="m-home-tab1" data-bs-toggle="tab" data-bs-target="#m-home1" type="button" role="tab" aria-controls="m-home1" aria-selected="true">
                                            <img src="assets/img/product/img_20.png" alt="">
                                          </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="m-profile-tab1" data-bs-toggle="tab" data-bs-target="#m-profile1" type="button" role="tab" aria-controls="m-profile1" aria-selected="false">
                                            <img src="assets/img/product/img_21.png" alt="">
                                          </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="m-contact-tab1" data-bs-toggle="tab" data-bs-target="#m-contact1" type="button" role="tab" aria-controls="m-contact1" aria-selected="false">
                                            <img src="assets/img/product/img_22.png" alt="">
                                          </button>
                                        </li>
                                      </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="row mt-none-30">
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_23.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">DEWALT 20V MAX* XR Oscillating Tool Kit</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_24.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Lenovo – Tab P11 Plus – Tablet – 11″ 2K Display</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_25.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">SAMSUNG Galaxy A13 5G Cell Phone, Factory</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_26.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Sceptre 24″ Professional Thin 75Hz 1080p LED</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane animated fadeInUp" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row mt-none-30">
                        <div class="col-lg-4 mt-30">
                            <div class="row mt-none-30">
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_15.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Chromebook Flip Laptop, 14″ Full HD</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_16.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Aroma Housewares 4-Cups 1Qt. Rice & Grain Cooker</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_17.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">SAMSUNG Galaxy A13 5G Cell Phone, Factory</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_18.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Acer SB220Q bi 21.5 Inches Full HD (1920 x 1080)</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="rd-product__middle">
                                <h2 class="section-heading"><span>5 Star Review</span></h2>
                                <div class="tab-content" id="m-myTabContent2">
                                    <div class="tab-pane fade show active" id="m-home2" role="tabpanel" aria-labelledby="m-home-tab2">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="m-profile2" role="tabpanel" aria-labelledby="m-profile-tab2">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="m-contact2" role="tabpanel" aria-labelledby="m-contact-tab2">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                              </div>
                                <div class="content">
                                    <div class="ul_li_between mb-6">
                                        <span class="product__available">Available: <span>334</span></span>
                                        <span class="product__available">Sold Out: <span>180</span></span>
                                    </div>
                                    <div class="product__progress progress h-10 color-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h2 class="title"><a href="shop-single.html">Amazon Cloud Cam Security</a></h2>
                                    <div class="product__review ul_li">
                                        <ul class="rating-star ul_li mr-10">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span>(126)</span>
                                    </div>
                                    <div class="mt-10">
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span><span class="off">-34%</span></h4>
                                    </div>
                                    <ul class="nav nav-tabs rd-img-nav" id="m-myTab2" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="m-home-tab2" data-bs-toggle="tab" data-bs-target="#m-home2" type="button" role="tab" aria-controls="m-home2" aria-selected="true">
                                            <img src="assets/img/product/img_20.png" alt="">
                                          </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="m-profile-tab2" data-bs-toggle="tab" data-bs-target="#m-profile2" type="button" role="tab" aria-controls="m-profile2" aria-selected="false">
                                            <img src="assets/img/product/img_21.png" alt="">
                                          </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="m-contact-tab2" data-bs-toggle="tab" data-bs-target="#m-contact2" type="button" role="tab" aria-controls="m-contact2" aria-selected="false">
                                            <img src="assets/img/product/img_22.png" alt="">
                                          </button>
                                        </li>
                                      </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="row mt-none-30">
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_23.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">DEWALT 20V MAX* XR Oscillating Tool Kit</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_24.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Lenovo – Tab P11 Plus – Tablet – 11″ 2K Display</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_25.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">SAMSUNG Galaxy A13 5G Cell Phone, Factory</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_26.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Sceptre 24″ Professional Thin 75Hz 1080p LED</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane animated fadeInUp" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                    <div class="row mt-none-30">
                        <div class="col-lg-4 mt-30">
                            <div class="row mt-none-30">
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_15.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Chromebook Flip Laptop, 14″ Full HD</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_16.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Aroma Housewares 4-Cups 1Qt. Rice & Grain Cooker</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_17.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">SAMSUNG Galaxy A13 5G Cell Phone, Factory</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_18.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Acer SB220Q bi 21.5 Inches Full HD (1920 x 1080)</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="rd-product__middle">
                                <h2 class="section-heading"><span>5 Star Review</span></h2>
                                <div class="tab-content" id="m-myTabContent3">
                                    <div class="tab-pane fade show active" id="m-home3" role="tabpanel" aria-labelledby="m-home-tab3">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="m-profile3" role="tabpanel" aria-labelledby="m-profile-tab3">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="m-contact3" role="tabpanel" aria-labelledby="m-contact-tab3">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                              </div>
                                <div class="content">
                                    <div class="ul_li_between mb-6">
                                        <span class="product__available">Available: <span>334</span></span>
                                        <span class="product__available">Sold Out: <span>180</span></span>
                                    </div>
                                    <div class="product__progress progress h-10 color-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h2 class="title"><a href="shop-single.html">Amazon Cloud Cam Security</a></h2>
                                    <div class="product__review ul_li">
                                        <ul class="rating-star ul_li mr-10">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span>(126)</span>
                                    </div>
                                    <div class="mt-10">
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span><span class="off">-34%</span></h4>
                                    </div>
                                    <ul class="nav nav-tabs rd-img-nav" id="m-myTab3" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="m-home-tab3" data-bs-toggle="tab" data-bs-target="#m-home3" type="button" role="tab" aria-controls="m-home3" aria-selected="true">
                                            <img src="assets/img/product/img_20.png" alt="">
                                          </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="m-profile-tab3" data-bs-toggle="tab" data-bs-target="#m-profile3" type="button" role="tab" aria-controls="m-profile3" aria-selected="false">
                                            <img src="assets/img/product/img_21.png" alt="">
                                          </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="m-contact-tab3" data-bs-toggle="tab" data-bs-target="#m-contact3" type="button" role="tab" aria-controls="m-contact3" aria-selected="false">
                                            <img src="assets/img/product/img_22.png" alt="">
                                          </button>
                                        </li>
                                      </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="row mt-none-30">
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_23.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">DEWALT 20V MAX* XR Oscillating Tool Kit</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_24.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Lenovo – Tab P11 Plus – Tablet – 11″ 2K Display</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_25.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">SAMSUNG Galaxy A13 5G Cell Phone, Factory</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_26.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Sceptre 24″ Professional Thin 75Hz 1080p LED</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane animated fadeInUp show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <div class="row mt-none-30">
                        <div class="col-lg-4 mt-30">
                            <div class="row mt-none-30">
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_15.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Chromebook Flip Laptop, 14″ Full HD</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_16.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Aroma Housewares 4-Cups 1Qt. Rice & Grain Cooker</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_17.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">SAMSUNG Galaxy A13 5G Cell Phone, Factory</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_18.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Acer SB220Q bi 21.5 Inches Full HD (1920 x 1080)</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="rd-product__middle">
                                <h2 class="section-heading"><span>5 Star Review</span></h2>
                                <div class="tab-content" id="m-myTabContent4">
                                    <div class="tab-pane fade show active" id="m-home4" role="tabpanel" aria-labelledby="m-home-tab4">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="m-profile4" role="tabpanel" aria-labelledby="m-profile-tab4">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="m-contact4" role="tabpanel" aria-labelledby="m-contact-tab4">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                              </div>
                                <div class="content">
                                    <div class="ul_li_between mb-6">
                                        <span class="product__available">Available: <span>334</span></span>
                                        <span class="product__available">Sold Out: <span>180</span></span>
                                    </div>
                                    <div class="product__progress progress h-10 color-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h2 class="title"><a href="shop-single.html">Amazon Cloud Cam Security</a></h2>
                                    <div class="product__review ul_li">
                                        <ul class="rating-star ul_li mr-10">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span>(126)</span>
                                    </div>
                                    <div class="mt-10">
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span><span class="off">-34%</span></h4>
                                    </div>
                                    <ul class="nav nav-tabs rd-img-nav" id="m-myTab4" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="m-home-tab4" data-bs-toggle="tab" data-bs-target="#m-home4" type="button" role="tab" aria-controls="m-home4" aria-selected="true">
                                            <img src="assets/img/product/img_20.png" alt="">
                                          </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="m-profile-tab4" data-bs-toggle="tab" data-bs-target="#m-profile4" type="button" role="tab" aria-controls="m-profile4" aria-selected="false">
                                            <img src="assets/img/product/img_21.png" alt="">
                                          </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="m-contact-tab4" data-bs-toggle="tab" data-bs-target="#m-contact4" type="button" role="tab" aria-controls="m-contact4" aria-selected="false">
                                            <img src="assets/img/product/img_22.png" alt="">
                                          </button>
                                        </li>
                                      </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="row mt-none-30">
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_23.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">DEWALT 20V MAX* XR Oscillating Tool Kit</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_24.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Lenovo – Tab P11 Plus – Tablet – 11″ 2K Display</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_25.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">SAMSUNG Galaxy A13 5G Cell Phone, Factory</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_26.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Sceptre 24″ Professional Thin 75Hz 1080p LED</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane animated fadeInUp" id="tab5" role="tabpanel" aria-labelledby="tab-05">
                    <div class="row mt-none-30">
                        <div class="col-lg-4 mt-30">
                            <div class="row mt-none-30">
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_15.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Chromebook Flip Laptop, 14″ Full HD</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_16.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Aroma Housewares 4-Cups 1Qt. Rice & Grain Cooker</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_17.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">SAMSUNG Galaxy A13 5G Cell Phone, Factory</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_18.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Acer SB220Q bi 21.5 Inches Full HD (1920 x 1080)</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="rd-product__middle">
                                <h2 class="section-heading"><span>5 Star Review</span></h2>
                                <div class="tab-content" id="m-myTabContent5">
                                    <div class="tab-pane fade show active" id="m-home5" role="tabpanel" aria-labelledby="m-home-tab5">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="m-profile5" role="tabpanel" aria-labelledby="m-profile-tab5">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="m-contact5" role="tabpanel" aria-labelledby="m-contact-tab5">
                                        <div class="img text-center">
                                            <a href="#!">
                                                <img src="assets/img/product/img_19.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                              </div>
                                <div class="content">
                                    <div class="ul_li_between mb-6">
                                        <span class="product__available">Available: <span>334</span></span>
                                        <span class="product__available">Sold Out: <span>180</span></span>
                                    </div>
                                    <div class="product__progress progress h-10 color-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h2 class="title"><a href="shop-single.html">Amazon Cloud Cam Security</a></h2>
                                    <div class="product__review ul_li">
                                        <ul class="rating-star ul_li mr-10">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span>(126)</span>
                                    </div>
                                    <div class="mt-10">
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span><span class="off">-34%</span></h4>
                                    </div>
                                    <ul class="nav nav-tabs rd-img-nav" id="m-myTab5" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="m-home-tab5" data-bs-toggle="tab" data-bs-target="#m-home5" type="button" role="tab" aria-controls="m-home5" aria-selected="true">
                                            <img src="assets/img/product/img_20.png" alt="">
                                          </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="m-profile-tab5" data-bs-toggle="tab" data-bs-target="#m-profile5" type="button" role="tab" aria-controls="m-profile5" aria-selected="false">
                                            <img src="assets/img/product/img_21.png" alt="">
                                          </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="m-contact-tab5" data-bs-toggle="tab" data-bs-target="#m-contact5" type="button" role="tab" aria-controls="m-contact5" aria-selected="false">
                                            <img src="assets/img/product/img_22.png" alt="">
                                          </button>
                                        </li>
                                      </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="row mt-none-30">
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_23.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">DEWALT 20V MAX* XR Oscillating Tool Kit</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_24.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Lenovo – Tab P11 Plus – Tablet – 11″ 2K Display</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product has-border pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_25.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">SAMSUNG Galaxy A13 5G Cell Phone, Factory</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-30">
                                    <div class="rd-product__item tx-product pos-rel">
                                        <div class="product__img text-center pos-rel">
                                            <a href="shop-single.html"><img src="assets/img/product/img_26.png" alt=""></a>
                                        </div>
                                        <div class="product__content">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <div class="product__progress progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h2 class="product__title"><a href="shop-single.html">Sceptre 24″ Professional Thin 75Hz 1080p LED</a></h2>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-default">New</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rd tab product end -->

    <!-- add start -->
    <div class="add pt-50 pb-50">
        <div class="container">
            <div class="add__wrap bg_img" data-background="assets/img/bg/add_bg_01.jpg">
                <div class="add__text">
                    <span><span>10%</span>  Gratis Ongkos Kirim Untuk Semua Pesanan Lebih Dari <span>$99</span></span>
                </div>
            </div>
        </div>
    </div>
    <!-- add end -->

    <!-- featured product start -->
    <div class="rd-featured-product">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-lg-3 mt-30">
                    <div class="hot-deal__slide-wrap">
                        <h2 class="section-heading mb-25"><span>Hot Deals</span></h2>
                        <div class="hot-deal__slide tx-arrow">
                            <div class="hot-deal__item text-center">
                                <div class="thumb">
                                    <a href="#!">
                                        <img src="assets/img/product/img_27.png" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="title"><a href="shop-single.html">Amazon Basics Window Air</a></h2>
                                    <div class="product__review ul_li_center">
                                        <ul class="rating-star ul_li mr-10">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                        </ul>
                                        <span>(26)</span>
                                    </div>
                                    <div class="countdown ul_li_center mb-15 mt-15" data-countdown="2024/08/28"></div>
                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                </div>
                            </div>
                            <div class="hot-deal__item text-center">
                                <div class="thumb">
                                    <a href="#!">
                                        <img src="assets/img/product/img_27.png" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="title"><a href="shop-single.html">Amazon Cloud Cam Security</a></h2>
                                    <div class="product__review ul_li_center">
                                        <ul class="rating-star ul_li mr-10">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                        </ul>
                                        <span>(26)</span>
                                    </div>
                                    <div class="countdown ul_li_center mb-15 mt-15" data-countdown="2024/08/28"></div>
                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                </div>
                            </div>
                            <div class="hot-deal__item text-center">
                                <div class="thumb">
                                    <a href="#!">
                                        <img src="assets/img/product/img_27.png" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="title"><a href="shop-single.html">Amazon Basics Window Air</a></h2>
                                    <div class="product__review ul_li_center">
                                        <ul class="rating-star ul_li mr-10">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                        </ul>
                                        <span>(26)</span>
                                    </div>
                                    <div class="countdown ul_li_center mb-15 mt-15" data-countdown="2024/08/28"></div>
                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mt-30">
                    <div class="product__nav-wrap style-2 ul_li_between mb-20">
                        <h2 class="section-heading"><span>Monthly Featured Item</span></h2>
                        <ul class="product__nav style-2 nav nav-tabs" id="rdm-myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rdm-tab-01" data-bs-toggle="tab" data-bs-target="#rdm-tab1" type="button" role="tab" aria-controls="rdm-tab1" aria-selected="true">Nokia</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rdm-tab-02" data-bs-toggle="tab" data-bs-target="#rdm-tab2" type="button" role="tab" aria-controls="rdm-tab2" aria-selected="false">Samsung</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rdm-tab-03" data-bs-toggle="tab" data-bs-target="#rdm-tab3" type="button" role="tab" aria-controls="rdm-tab3" aria-selected="false">Apple</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="rdm-tab-04" data-bs-toggle="tab" data-bs-target="#rdm-tab4" type="button" role="tab" aria-controls="rdm-tab4" aria-selected="false">xioami 71</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rdm-tab-05" data-bs-toggle="tab" data-bs-target="#rdm-tab5" type="button" role="tab" aria-controls="rdm-tab5" aria-selected="false">Huawei</button>
                            </li>
                        </ul>
                    </div>
                    <div class="rd-monthly-products">
                        <div class="tab-content" id="rd-monthly-myTabContent">
                            <div class="tab-pane animated fadeInUp" id="rdm-tab1" role="tabpanel" aria-labelledby="rdm-tab-01">
                                <div class="row mt-none-30">
                                    <div class="col-lg-4">
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf1-tabContent1">
                                                    <div class="tab-pane fade show active" id="mf1-home1" role="tabpanel" aria-labelledby="mf1-home-tab1">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf1-profile1" role="tabpanel" aria-labelledby="mf1-profile-tab1">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf1-contact1" role="tabpanel" aria-labelledby="mf1-contact-tab1">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Aroma Housewares 4-Cups 1Qt</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf1-tab1" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf1-home-tab1" data-bs-toggle="pill" data-bs-target="#mf1-home1" type="button" role="tab" aria-controls="mf1-home1" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf1-profile-tab1" data-bs-toggle="pill" data-bs-target="#mf1-profile1" type="button" role="tab" aria-controls="mf1-profile1" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf1-contact-tab1" data-bs-toggle="pill" data-bs-target="#mf1-contact1" type="button" role="tab" aria-controls="mf1-contact1" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf1-tabContent2">
                                                    <div class="tab-pane fade show active" id="mf1-home2" role="tabpanel" aria-labelledby="mf1-home-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf1-profile2" role="tabpanel" aria-labelledby="mf1-profile-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf1-contact2" role="tabpanel" aria-labelledby="mf1-contact-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Panasonic Cordless Phone System</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf1-tab2" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf1-home-tab2" data-bs-toggle="pill" data-bs-target="#mf1-home2" type="button" role="tab" aria-controls="mf1-home2" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf1-profile-tab2" data-bs-toggle="pill" data-bs-target="#mf1-profile2" type="button" role="tab" aria-controls="mf1-profile2" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf1-contact-tab2" data-bs-toggle="pill" data-bs-target="#mf1-contact2" type="button" role="tab" aria-controls="mf1-contact2" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="rd-monthly__item tx-product text-center mt-30">
                                            <div class="image pos-rel">
                                                <a href="shop-single.html"><img src="assets/img/product/img_32.png" alt=""></a>
                                                <ul class="product__action style-2 ul_li">
                                                    <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                                    <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                                    <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="content">
                                                <ul class="rating-star ul_li_center mr-10">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <h2 class="title"><a href="#!">Olive Oil With Masala</a></h2>
                                                <h4 class="product__price mb-20"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                <div class="mxw_175 m-auto">
                                                    <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="ul_li_between mb-6">
                                                        <span class="product__available">Available: <span>334</span></span>
                                                        <span class="product__available">Stock: <span>180</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="badge">Hot</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf1-tabContent3">
                                                    <div class="tab-pane fade show active" id="mf1-home3" role="tabpanel" aria-labelledby="mf1-home-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf1-profile3" role="tabpanel" aria-labelledby="mf1-profile-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf1-contact3" role="tabpanel" aria-labelledby="mf1-contact-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Amazon Basics Window  Air Conditioner</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf1-tab3" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf1-home-tab3" data-bs-toggle="pill" data-bs-target="#mf1-home3" type="button" role="tab" aria-controls="mf1-home3" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf1-profile-tab3" data-bs-toggle="pill" data-bs-target="#mf1-profile3" type="button" role="tab" aria-controls="mf3-profile3" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf1-contact-tab3" data-bs-toggle="pill" data-bs-target="#mf1-contact3" type="button" role="tab" aria-controls="mf1-contact3" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf1-tabContent4">
                                                    <div class="tab-pane fade show active" id="mf1-home4" role="tabpanel" aria-labelledby="mf1-home-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf1-profile4" role="tabpanel" aria-labelledby="mf1-profile-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf1-contact4" role="tabpanel" aria-labelledby="mf1-contact-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Panasonic Cordless Phone System</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf1-tab4" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf1-home-tab4" data-bs-toggle="pill" data-bs-target="#mf1-home4" type="button" role="tab" aria-controls="mf1-home4" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf1-profile-tab4" data-bs-toggle="pill" data-bs-target="#mf1-profile4" type="button" role="tab" aria-controls="mf1-profile4" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf1-contact-tab4" data-bs-toggle="pill" data-bs-target="#mf1-contact4" type="button" role="tab" aria-controls="mf1-contact4" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animated fadeInUp" id="rdm-tab2" role="tabpanel" aria-labelledby="rdm-tab-02">
                                <div class="row mt-none-30">
                                    <div class="col-lg-4">
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf2-tabContent1">
                                                    <div class="tab-pane fade show active" id="mf2-home1" role="tabpanel" aria-labelledby="mf2-home-tab1">
                                                        <div class="rd-product__img1">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf2-profile1" role="tabpanel" aria-labelledby="mf2-profile-tab1">
                                                        <div class="rd-product__img1">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf2-contact1" role="tabpanel" aria-labelledby="mf2-contact-tab1">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Aroma Housewares 4-Cups 1Qt</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf2-tab1" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf2-home-tab1" data-bs-toggle="pill" data-bs-target="#mf2-home1" type="button" role="tab" aria-controls="mf2-home1" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf2-profile-tab1" data-bs-toggle="pill" data-bs-target="#mf2-profile1" type="button" role="tab" aria-controls="mf2-profile1" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf2-contact-tab1" data-bs-toggle="pill" data-bs-target="#mf2-contact1" type="button" role="tab" aria-controls="mf2-contact1" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf2-tabContent2">
                                                    <div class="tab-pane fade show active" id="mf2-home2" role="tabpanel" aria-labelledby="mf2-home-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf2-profile2" role="tabpanel" aria-labelledby="mf2-profile-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf2-contact2" role="tabpanel" aria-labelledby="mf3-contact-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Panasonic Cordless Phone System</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf2-tab2" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf2-home-tab2" data-bs-toggle="pill" data-bs-target="#mf3-home2" type="button" role="tab" aria-controls="mf2-home2" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf2-profile-tab2" data-bs-toggle="pill" data-bs-target="#mf2-profile2" type="button" role="tab" aria-controls="mf2-profile2" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf2-contact-tab2" data-bs-toggle="pill" data-bs-target="#mf2-contact2" type="button" role="tab" aria-controls="mf2-contact2" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="rd-monthly__item tx-product text-center mt-30">
                                            <div class="image pos-rel">
                                                <a href="shop-single.html"><img src="assets/img/product/img_32.png" alt=""></a>
                                                <ul class="product__action style-2 ul_li">
                                                    <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                                    <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                                    <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="content">
                                                <ul class="rating-star ul_li_center mr-10">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <h2 class="title"><a href="#!">Olive Oil With Masala</a></h2>
                                                <h4 class="product__price mb-20"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                <div class="mxw_175 m-auto">
                                                    <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="ul_li_between mb-6">
                                                        <span class="product__available">Available: <span>334</span></span>
                                                        <span class="product__available">Stock: <span>180</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="badge">Hot</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf2-tabContent3">
                                                    <div class="tab-pane fade show active" id="mf2-home3" role="tabpanel" aria-labelledby="mf2-home-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf2-profile3" role="tabpanel" aria-labelledby="mf2-profile-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf2-contact3" role="tabpanel" aria-labelledby="mf2-contact-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Amazon Basics Window  Air Conditioner</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf2-tab3" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf2-home-tab3" data-bs-toggle="pill" data-bs-target="#mf2-home3" type="button" role="tab" aria-controls="mf2-home3" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf2-profile-tab3" data-bs-toggle="pill" data-bs-target="#mf2-profile3" type="button" role="tab" aria-controls="mf2-profile3" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf2-contact-tab3" data-bs-toggle="pill" data-bs-target="#mf2-contact3" type="button" role="tab" aria-controls="mf2-contact3" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf2-tabContent4">
                                                    <div class="tab-pane fade show active" id="mf2-home4" role="tabpanel" aria-labelledby="mf2-home-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf2-profile4" role="tabpanel" aria-labelledby="mf2-profile-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf2-contact4" role="tabpanel" aria-labelledby="mf2-contact-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Panasonic Cordless Phone System</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf2-tab4" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf2-home-tab4" data-bs-toggle="pill" data-bs-target="#mf2-home4" type="button" role="tab" aria-controls="mf2-home4" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf2-profile-tab4" data-bs-toggle="pill" data-bs-target="#mf2-profile4" type="button" role="tab" aria-controls="mf2-profile4" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf2-contact-tab4" data-bs-toggle="pill" data-bs-target="#mf2-contact4" type="button" role="tab" aria-controls="mf2-contact4" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animated fadeInUp" id="rdm-tab3" role="tabpanel" aria-labelledby="rdm-tab-03">
                                <div class="row mt-none-30">
                                    <div class="col-lg-4">
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf3-tabContent1">
                                                    <div class="tab-pane fade show active" id="mf3-home1" role="tabpanel" aria-labelledby="mf3-home-tab1">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf3-profile1" role="tabpanel" aria-labelledby="mf3-profile-tab1">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf3-contact1" role="tabpanel" aria-labelledby="mf3-contact-tab1">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Aroma Housewares 4-Cups 1Qt</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf3-tab1" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf3-home-tab1" data-bs-toggle="pill" data-bs-target="#mf3-home1" type="button" role="tab" aria-controls="mf3-home1" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf3-profile-tab1" data-bs-toggle="pill" data-bs-target="#mf3-profile1" type="button" role="tab" aria-controls="mf3-profile1" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf3-contact-tab1" data-bs-toggle="pill" data-bs-target="#mf3-contact1" type="button" role="tab" aria-controls="mf3-contact1" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf3-tabContent2">
                                                    <div class="tab-pane fade show active" id="mf3-home2" role="tabpanel" aria-labelledby="mf3-home-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf3-profile2" role="tabpanel" aria-labelledby="mf3-profile-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf3-contact2" role="tabpanel" aria-labelledby="mf3-contact-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Panasonic Cordless Phone System</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf3-tab2" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf3-home-tab2" data-bs-toggle="pill" data-bs-target="#mf3-home2" type="button" role="tab" aria-controls="mf3-home2" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf3-profile-tab2" data-bs-toggle="pill" data-bs-target="#mf3-profile2" type="button" role="tab" aria-controls="mf3-profile2" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf3-contact-tab2" data-bs-toggle="pill" data-bs-target="#mf3-contact2" type="button" role="tab" aria-controls="mf3-contact2" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="rd-monthly__item tx-product text-center mt-30">
                                            <div class="image pos-rel">
                                                <a href="shop-single.html"><img src="assets/img/product/img_32.png" alt=""></a>
                                                <ul class="product__action style-2 ul_li">
                                                    <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                                    <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                                    <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="content">
                                                <ul class="rating-star ul_li_center mr-10">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <h2 class="title"><a href="#!">Olive Oil With Masala</a></h2>
                                                <h4 class="product__price mb-20"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                <div class="mxw_175 m-auto">
                                                    <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="ul_li_between mb-6">
                                                        <span class="product__available">Available: <span>334</span></span>
                                                        <span class="product__available">Stock: <span>180</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="badge">Hot</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf3-tabContent3">
                                                    <div class="tab-pane fade show active" id="mf3-home3" role="tabpanel" aria-labelledby="mf3-home-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf3-profile3" role="tabpanel" aria-labelledby="mf3-profile-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf3-contact3" role="tabpanel" aria-labelledby="mf3-contact-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Amazon Basics Window Air Conditioner</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf3-tab3" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf3-home-tab3" data-bs-toggle="pill" data-bs-target="#mf3-home3" type="button" role="tab" aria-controls="mf3-home3" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf3-profile-tab3" data-bs-toggle="pill" data-bs-target="#mf3-profile3" type="button" role="tab" aria-controls="mf3-profile3" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf3-contact-tab3" data-bs-toggle="pill" data-bs-target="#mf3-contact3" type="button" role="tab" aria-controls="mf3-contact3" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf3-tabContent4">
                                                    <div class="tab-pane fade show active" id="mf3-home4" role="tabpanel" aria-labelledby="mf3-home-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf3-profile4" role="tabpanel" aria-labelledby="mf3-profile-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf3-contact4" role="tabpanel" aria-labelledby="mf3-contact-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Panasonic Cordless Phone System</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf3-tab4" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf3-home-tab4" data-bs-toggle="pill" data-bs-target="#mf3-home4" type="button" role="tab" aria-controls="mf3-home4" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf3-profile-tab4" data-bs-toggle="pill" data-bs-target="#mf3-profile4" type="button" role="tab" aria-controls="mf3-profile4" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf3-contact-tab4" data-bs-toggle="pill" data-bs-target="#mf3-contact4" type="button" role="tab" aria-controls="mf3-contact4" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animated fadeInUp show active" id="rdm-tab4" role="tabpanel" aria-labelledby="rdm-tab-04">
                                <div class="row mt-none-30">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf4-tabContent1">
                                                    <div class="tab-pane fade show active" id="mf4-home1" role="tabpanel" aria-labelledby="mf4-home-tab1">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf4-profile1" role="tabpanel" aria-labelledby="mf4-profile-tab1">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf4-contact1" role="tabpanel" aria-labelledby="mf4-contact-tab1">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Aroma Housewares 4-Cups 1Qt</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf4-tab1" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf4-home-tab1" data-bs-toggle="pill" data-bs-target="#mf4-home1" type="button" role="tab" aria-controls="mf4-home1" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf4-profile-tab1" data-bs-toggle="pill" data-bs-target="#mf4-profile1" type="button" role="tab" aria-controls="mf4-profile1" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf4-contact-tab1" data-bs-toggle="pill" data-bs-target="#mf4-contact1" type="button" role="tab" aria-controls="mf4-contact1" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf4-tabContent2">
                                                    <div class="tab-pane fade show active" id="mf4-home2" role="tabpanel" aria-labelledby="mf4-home-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf4-profile2" role="tabpanel" aria-labelledby="mf4-profile-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf4-contact2" role="tabpanel" aria-labelledby="mf4-contact-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Panasonic Cordless Phone System</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf4-tab2" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf4-home-tab2" data-bs-toggle="pill" data-bs-target="#mf4-home2" type="button" role="tab" aria-controls="mf4-home2" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf4-profile-tab2" data-bs-toggle="pill" data-bs-target="#mf4-profile2" type="button" role="tab" aria-controls="mf4-profile2" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf4-contact-tab2" data-bs-toggle="pill" data-bs-target="#mf4-contact2" type="button" role="tab" aria-controls="mf4-contact2" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="rd-monthly__item tx-product text-center mt-30">
                                            <div class="image pos-rel">
                                                <a href="shop-single.html"><img src="assets/img/product/img_32.png" alt=""></a>
                                                <ul class="product__action style-2 ul_li">
                                                    <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                                    <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                                    <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="content">
                                                <ul class="rating-star ul_li_center mr-10">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <h2 class="title"><a href="#!">Olive Oil With Masala</a></h2>
                                                <h4 class="product__price mb-20"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                <div class="mxw_175 m-auto">
                                                    <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="ul_li_between mb-6">
                                                        <span class="product__available">Available: <span>334</span></span>
                                                        <span class="product__available">Stock: <span>180</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="badge">Hot</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf4-tabContent3">
                                                    <div class="tab-pane fade show active" id="mf4-home3" role="tabpanel" aria-labelledby="mf4-home-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf4-profile3" role="tabpanel" aria-labelledby="mf4-profile-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf4-contact3" role="tabpanel" aria-labelledby="mf4-contact-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Amazon Basics Window Air Conditioner</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf4-tab3" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf4-home-tab3" data-bs-toggle="pill" data-bs-target="#mf4-home3" type="button" role="tab" aria-controls="mf4-home3" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf4-profile-tab3" data-bs-toggle="pill" data-bs-target="#mf4-profile3" type="button" role="tab" aria-controls="mf4-profile3" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf4-contact-tab3" data-bs-toggle="pill" data-bs-target="#mf4-contact3" type="button" role="tab" aria-controls="mf4-contact3" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf4-tabContent4">
                                                    <div class="tab-pane fade show active" id="mf4-home4" role="tabpanel" aria-labelledby="mf4-home-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf4-profile4" role="tabpanel" aria-labelledby="mf4-profile-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf4-contact4" role="tabpanel" aria-labelledby="mf4-contact-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Amazon Basics Window Air Conditioner</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf4-tab4" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf4-home-tab4" data-bs-toggle="pill" data-bs-target="#mf4-home4" type="button" role="tab" aria-controls="mf4-home4" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf4-profile-tab4" data-bs-toggle="pill" data-bs-target="#mf4-profile4" type="button" role="tab" aria-controls="mf4-profile4" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf4-contact-tab4" data-bs-toggle="pill" data-bs-target="#mf4-contact4" type="button" role="tab" aria-controls="mf4-contact4" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animated fadeInUp" id="rdm-tab5" role="tabpanel" aria-labelledby="rdm-tab-05">
                                <div class="row mt-none-30">
                                    <div class="col-lg-4">
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf5-tabContent1">
                                                    <div class="tab-pane fade show active" id="mf5-home1" role="tabpanel" aria-labelledby="mf5-home-tab1">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf5-profile1" role="tabpanel" aria-labelledby="mf5-profile-tab1">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf5-contact1" role="tabpanel" aria-labelledby="mf5-contact-tab1">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_28.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Amazon Basics Window Air Conditioner</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf5-tab1" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf5-home-tab1" data-bs-toggle="pill" data-bs-target="#mf5-home1" type="button" role="tab" aria-controls="mf5-home1" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf5-profile-tab1" data-bs-toggle="pill" data-bs-target="#mf5-profile1" type="button" role="tab" aria-controls="mf5-profile1" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf5-contact-tab1" data-bs-toggle="pill" data-bs-target="#mf5-contact1" type="button" role="tab" aria-controls="mf5-contact1" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf5-tabContent2">
                                                    <div class="tab-pane fade show active" id="mf5-home2" role="tabpanel" aria-labelledby="mf5-home-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf5-profile2" role="tabpanel" aria-labelledby="mf5-profile-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf5-contact2" role="tabpanel" aria-labelledby="mf5-contact-tab2">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_29.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Panasonic Cordless Phone System</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf5-tab2" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf5-home-tab2" data-bs-toggle="pill" data-bs-target="#mf5-home2" type="button" role="tab" aria-controls="mf5-home2" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf5-profile-tab2" data-bs-toggle="pill" data-bs-target="#mf5-profile2" type="button" role="tab" aria-controls="mf5-profile2" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf5-contact-tab2" data-bs-toggle="pill" data-bs-target="#mf5-contact2" type="button" role="tab" aria-controls="mf5-contact2" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="rd-monthly__item tx-product text-center mt-30">
                                            <div class="image pos-rel">
                                                <a href="shop-single.html"><img src="assets/img/product/img_32.png" alt=""></a>
                                                <ul class="product__action style-2 ul_li">
                                                    <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                                    <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                                    <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="content">
                                                <ul class="rating-star ul_li_center mr-10">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <h2 class="title"><a href="#!">Olive Oil With Masala</a></h2>
                                                <h4 class="product__price mb-20"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                <div class="mxw_175 m-auto">
                                                    <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="ul_li_between mb-6">
                                                        <span class="product__available">Available: <span>334</span></span>
                                                        <span class="product__available">Stock: <span>180</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="badge">Hot</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf5-tabContent3">
                                                    <div class="tab-pane fade show active" id="mf5-home3" role="tabpanel" aria-labelledby="mf5-home-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf5-profile3" role="tabpanel" aria-labelledby="mf5-profile-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf5-contact3" role="tabpanel" aria-labelledby="mf5-contact-tab3">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_30.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Amazon Basics Window Air Conditioner</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf5-tab3" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf5-home-tab3" data-bs-toggle="pill" data-bs-target="#mf5-home3" type="button" role="tab" aria-controls="mf5-home3" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf5-profile-tab3" data-bs-toggle="pill" data-bs-target="#mf5-profile3" type="button" role="tab" aria-controls="mf5-profile3" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf5-contact-tab3" data-bs-toggle="pill" data-bs-target="#mf5-contact3" type="button" role="tab" aria-controls="mf5-contact3" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="rd-product__single mt-30">
                                            <div class="p-wrap ul_li mb-10">
                                                <div class="tab-content" id="mf5-tabContent4">
                                                    <div class="tab-pane fade show active" id="mf5-home4" role="tabpanel" aria-labelledby="mf5-home-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf5-profile4" role="tabpanel" aria-labelledby="mf5-profile-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="mf5-contact4" role="tabpanel" aria-labelledby="mf5-contact-tab4">
                                                        <div class="rd-product__img">
                                                            <a href="shop-single.html"><img src="assets/img/product/img_31.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="product__review ul_li">
                                                        <ul class="rating-star ul_li mr-10">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>(26)</span>
                                                    </div>
                                                    <h2 class="title"><a href="shop-single.html">Panasonic Cordless Phone System</a></h2>
                                                    <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                                    <ul class="nav mf-nav mt-10" id="mf5-tab4" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="mf5-home-tab4" data-bs-toggle="pill" data-bs-target="#mf5-home4" type="button" role="tab" aria-controls="mf5-home4" aria-selected="true"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf5-profile-tab4" data-bs-toggle="pill" data-bs-target="#mf5-profile4" type="button" role="tab" aria-controls="mf5-profile4" aria-selected="false"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="mf5-contact-tab4" data-bs-toggle="pill" data-bs-target="#mf5-contact4" type="button" role="tab" aria-controls="mf5-contact4" aria-selected="false"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="product__available">Available: <span>180</span></span>
                                            <div class="product__progress progress mb-0 mt-2 h-8 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured product end -->

    <!-- product category start -->
    <div class="product-cat pt-60">
        <div class="container">
            <h2 class="section-heading mb-25"><span>Product Catagories</span></h2>
            <div class="product-cat__wrap">
                <div class="row mt-none-50">
                    <div class="col-lg-4">
                        <div class="product-cat__item mt-50">
                            <div class="product-cat__images">
                                <div class="tab-content" id="fc-myTabContent">
                                    <div class="tab-pane fade show active" id="fc-home" role="tabpanel" aria-labelledby="fc-home-tab">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_33.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-profile" role="tabpanel" aria-labelledby="fc-profile-tab">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_34.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-contact" role="tabpanel" aria-labelledby="fc-contact-tab">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_35.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav product-cat__nav nav-tabs" id="fc-myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="fc-home-tab" data-bs-toggle="tab" data-bs-target="#fc-home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                        <img src="assets/img/product/img_33.png" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fc-profile-tab" data-bs-toggle="tab" data-bs-target="#fc-profile" type="button" role="tab" aria-controls="fc-profile" aria-selected="false">
                                        <img src="assets/img/product/img_34.png" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fc-contact-tab" data-bs-toggle="tab" data-bs-target="#fc-contact" type="button" role="tab" aria-controls="fc-contact" aria-selected="false">
                                        <img src="assets/img/product/img_35.png" alt="">
                                    </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-cat__content">
                                <h3 class="title">Smartphone & Tablet</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#!">Speaker Bluetooth</a></li>
                                    <li><a href="#!">Penyedot debu robotik</a></li>
                                    <li><a href="#!">Printer laser</a></li>
                                    <li><a href="#!">Penggorengan listrik</a></li>
                                    <li><a href="#!">Kamera digital</a></li>
                                    <li><a href="#!">+ Item lainnya</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-cat__item mt-50">
                            <div class="product-cat__images">
                                <div class="tab-content" id="fc-myTabContent2">
                                    <div class="tab-pane fade show active" id="fc-home2" role="tabpanel" aria-labelledby="fc-home-tab2">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_34.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-profile2" role="tabpanel" aria-labelledby="fc-profile-tab2">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_35.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-contact2" role="tabpanel" aria-labelledby="fc-contact-tab2">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_36.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav product-cat__nav nav-tabs" id="fc-myTab2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="fc-home-tab2" data-bs-toggle="tab" data-bs-target="#fc-home2" type="button" role="tab" aria-controls="fc-home2" aria-selected="true">
                                        <img src="assets/img/product/img_34.png" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fc-profile-tab2" data-bs-toggle="tab" data-bs-target="#fc-profile2" type="button" role="tab" aria-controls="fc-profile2" aria-selected="false">
                                        <img src="assets/img/product/img_35.png" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fc-contact-tab2" data-bs-toggle="tab" data-bs-target="#fc-contact2" type="button" role="tab" aria-controls="fc-contact2" aria-selected="false">
                                        <img src="assets/img/product/img_36.png" alt="">
                                    </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-cat__content">
                                <h3 class="title">Camera & Equipemnt</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#!">Speaker Bluetooth</a></li>
                                    <li><a href="#!">Penyedot debu robotik</a></li>
                                    <li><a href="#!">Printer laser</a></li>
                                    <li><a href="#!">Penggorengan listrik</a></li>
                                    <li><a href="#!">Kamera digital</a></li>
                                    <li><a href="#!">+ Item lainnya</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-cat__item mt-50">
                            <div class="product-cat__images">
                                <div class="tab-content" id="fc-myTabContent3">
                                    <div class="tab-pane fade show active" id="fc-home3" role="tabpanel" aria-labelledby="fc-home-tab3">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_35.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-profile3" role="tabpanel" aria-labelledby="fc-profile-tab3">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_36.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-contact3" role="tabpanel" aria-labelledby="fc-contact-tab3">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_37.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav product-cat__nav nav-tabs" id="fc-myTab3" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="fc-home-tab3" data-bs-toggle="tab" data-bs-target="#fc-home3" type="button" role="tab" aria-controls="fc-home3" aria-selected="true">
                                        <img src="assets/img/product/img_35.png" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fc-profile-tab3" data-bs-toggle="tab" data-bs-target="#fc-profile3" type="button" role="tab" aria-controls="fc-profile3" aria-selected="false">
                                        <img src="assets/img/product/img_36.png" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fc-contact-tab3" data-bs-toggle="tab" data-bs-target="#fc-contact3" type="button" role="tab" aria-controls="fc-contact3" aria-selected="false">
                                        <img src="assets/img/product/img_37.png" alt="">
                                    </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-cat__content">
                                <h3 class="title">Computer & Laptops</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#!">Speaker Bluetooth</a></li>
                                    <li><a href="#!">Penyedot debu robotik</a></li>
                                    <li><a href="#!">Printer laser</a></li>
                                    <li><a href="#!">Penggorengan listrik</a></li>
                                    <li><a href="#!">Kamera digital</a></li>
                                    <li><a href="#!">+ Item lainnya</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-cat__item mt-50">
                            <div class="product-cat__images">
                                <div class="tab-content" id="fc-myTabContent4">
                                    <div class="tab-pane fade show active" id="fc-home4" role="tabpanel" aria-labelledby="fc-home-tab4">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_36.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-profile4" role="tabpanel" aria-labelledby="fc-profile-tab4">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_37.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-contact4" role="tabpanel" aria-labelledby="fc-contact-tab4">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_38.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav product-cat__nav nav-tabs" id="fc-myTab4" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="fc-home-tab4" data-bs-toggle="tab" data-bs-target="#fc-home4" type="button" role="tab" aria-controls="fc-home4" aria-selected="true">
                                        <img src="assets/img/product/img_36.png" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fc-profile-tab4" data-bs-toggle="tab" data-bs-target="#fc-profile4" type="button" role="tab" aria-controls="fc-profile4" aria-selected="false">
                                        <img src="assets/img/product/img_37.png" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fc-contact-tab4" data-bs-toggle="tab" data-bs-target="#fc-contact4" type="button" role="tab" aria-controls="fc-contact4" aria-selected="false">
                                        <img src="assets/img/product/img_38.png" alt="">
                                    </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-cat__content">
                                <h3 class="title">Home Equipment</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#!">Speaker Bluetooth</a></li>
                                    <li><a href="#!">Penyedot debu robotik</a></li>
                                    <li><a href="#!">Printer laser</a></li>
                                    <li><a href="#!">Penggorengan listrik</a></li>
                                    <li><a href="#!">Kamera digital</a></li>
                                    <li><a href="#!">+ Item lainnya</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-cat__item mt-50">
                            <div class="product-cat__images">
                                <div class="tab-content" id="fc-myTabContent5">
                                    <div class="tab-pane fade show active" id="fc-home5" role="tabpanel" aria-labelledby="fc-home-tab5">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_37.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-profile5" role="tabpanel" aria-labelledby="fc-profile-tab5">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_38.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-contact5" role="tabpanel" aria-labelledby="fc-contact-tab5">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_34.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav product-cat__nav nav-tabs" id="fc-myTab5" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="fc-home-tab5" data-bs-toggle="tab" data-bs-target="#fc-home5" type="button" role="tab" aria-controls="fc-home5" aria-selected="true">
                                        <img src="assets/img/product/img_37.png" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fc-profile-tab5" data-bs-toggle="tab" data-bs-target="#fc-profile5" type="button" role="tab" aria-controls="fc-profile5" aria-selected="false">
                                        <img src="assets/img/product/img_38.png" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fc-contact-tab5" data-bs-toggle="tab" data-bs-target="#fc-contact5" type="button" role="tab" aria-controls="fc-contact5" aria-selected="false">
                                        <img src="assets/img/product/img_34.png" alt="">
                                    </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-cat__content">
                                <h3 class="title">Electric Accesories</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#!">Speaker Bluetooth</a></li>
                                    <li><a href="#!">Penyedot debu robotik</a></li>
                                    <li><a href="#!">Printer laser</a></li>
                                    <li><a href="#!">Penggorengan listrik</a></li>
                                    <li><a href="#!">Kamera digital</a></li>
                                    <li><a href="#!">+ Item lainnya</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-cat__item mt-50">
                            <div class="product-cat__images">
                                <div class="tab-content" id="fc-myTabContent6">
                                    <div class="tab-pane fade show active" id="fc-home6" role="tabpanel" aria-labelledby="fc-home-tab6">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_38.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-profile6" role="tabpanel" aria-labelledby="fc-profile-tab6">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_35.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fc-contact6" role="tabpanel" aria-labelledby="fc-contact-tab6">
                                        <div class="product-cat__img">
                                            <a href="shop-single.html"><img src="assets/img/product/img_36.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav product-cat__nav nav-tabs" id="fc-myTab6" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="fc-home-tab6" data-bs-toggle="tab" data-bs-target="#fc-home6" type="button" role="tab" aria-controls="fc-home6" aria-selected="true">
                                        <img src="assets/img/product/img_38.png" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fc-profile-tab6" data-bs-toggle="tab" data-bs-target="#fc-profile6" type="button" role="tab" aria-controls="fc-profile6" aria-selected="false">
                                        <img src="assets/img/product/img_35.png" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fc-contact-tab6" data-bs-toggle="tab" data-bs-target="#fc-contact6" type="button" role="tab" aria-controls="fc-contact6" aria-selected="false">
                                        <img src="assets/img/product/img_36.png" alt="">
                                    </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-cat__content">
                                <h3 class="title">Gaming Accesiores</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#!">Speaker Bluetooth</a></li>
                                    <li><a href="#!">Penyedot debu robotik</a></li>
                                    <li><a href="#!">Printer laser</a></li>
                                    <li><a href="#!">Penggorengan listrik</a></li>
                                    <li><a href="#!">Kamera digital</a></li>
                                    <li><a href="#!">+ Item lainnya</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product category end -->

    <!-- recent product start -->
    <div class="recent-product pt-60 pb-80">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-lg-3 col-md-6 mt-30">
                    <div class="add-banner add-banner__3 bg_img add-banner__h555" data-background="assets/img/bg/bg_01.jpg">
                        <div class="add-banner__content">
                            <span>Widesceen 4k</span>
                            <h3>Waterma Watch <br> Beats Studio</h3>
                            <span class="price">$ 180.99</span>
                            <a class="add-banner__btn" href="#!">Buy Now</a>
                        </div>
                        <div class="add-banner__img">
                            <img src="assets/img/product/img_48.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mt-30">
                    <div class="product__nav-wrap style-2 ul_li_between">
                        <h2 class="section-heading"><span>Recently Viewed</span></h2>
                        <ul class="product__nav recent-product__nav nav nav-tabs" id="vdr-myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="vdr-tab-01" data-bs-toggle="tab" data-bs-target="#vdr-tab1" type="button" role="tab" aria-controls="vdr-tab1" aria-selected="true">Teleevision</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="vdr-tab-02" data-bs-toggle="tab" data-bs-target="#vdr-tab2" type="button" role="tab" aria-controls="vdr-tab2" aria-selected="false">Computer & Laptop</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="vdr-tab-03" data-bs-toggle="tab" data-bs-target="#vdr-tab3" type="button" role="tab" aria-controls="vd-tab3" aria-selected="false">Lamp</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="vdr-tab-04" data-bs-toggle="tab" data-bs-target="#vdr-tab4" type="button" role="tab" aria-controls="vd-tab4" aria-selected="false">Accesories</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="vdr-myTabContent">
                        <div class="tab-pane animated fadeInUp show active" id="vdr-tab1" role="tabpanel" aria-labelledby="vdr-tab-01">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_39.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_40.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_41.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Galaxy S20 FE 5G Cell Phone, Factory Unlocked</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_42.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Tab M10 Plus, FHD Android Tablet, Processor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_43.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">JBL Tune 510BT Wireless On-Ear Head phones</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_44.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_45.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Ninja Compact Smoothie & Food Processing Blender</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_46.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_47.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane animated fadeInUp" id="vdr-tab2" role="tabpanel" aria-labelledby="vdr-tab-02">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_39.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_40.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_41.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Galaxy S20 FE 5G Cell Phone, Factory Unlocked</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_42.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Tab M10 Plus, FHD Android Tablet, Processor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_43.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">JBL Tune 510BT Wireless On-Ear Head phones</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_44.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_45.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Ninja Compact Smoothie & Food Processing Blender</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_46.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_47.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane animated fadeInUp" id="vdr-tab3" role="tabpanel" aria-labelledby="vdr-tab-03">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_39.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_40.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_41.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Galaxy S20 FE 5G Cell Phone, Factory Unlocked</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_42.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Tab M10 Plus, FHD Android Tablet, Processor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_43.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">JBL Tune 510BT Wireless On-Ear Head phones</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_44.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_45.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Ninja Compact Smoothie & Food Processing Blender</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_46.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_47.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane animated fadeInUp" id="vdr-tab4" role="tabpanel" aria-labelledby="vdr-tab-04">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_39.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_40.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_41.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Galaxy S20 FE 5G Cell Phone, Factory Unlocked</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_42.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Tab M10 Plus, FHD Android Tablet, Processor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_43.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">JBL Tune 510BT Wireless On-Ear Head phones</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_44.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_45.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Ninja Compact Smoothie & Food Processing Blender</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_46.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_47.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- recent product end -->

    <!-- banner start -->
    <div class="vd-banner">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-lg-7 mt-30">
                    <div class="vd-banner__single pos-rel ul_li_between bg_img" data-background="assets/img/bg/bg_02.jpg">
                        <div class="content">
                            <h2>Beli Satu. Dapatkan pengiriman gratis</h2>
                            <p>Reference site about Lorem Ipsum</p>
                            <div class="banner__btn mt-20">
                                <a class="thm-btn thm-btn__black" href="#!">
                                    <span class="btn-wrap">
                                        <span>Shop Now</span>
                                        <span>Shop Now</span>
                                    </span>
                                    <i class="far fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="thumb">
                            <img src="assets/img/product/img_49.png" alt="">
                        </div>
                        <div class="vd-banner__offer">
                            <span class="offer">25% <br> <span>off</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-30">
                    <div class="vd-banner__single vd-banner__single-two pos-rel ul_li_between bg_img" data-background="assets/img/bg/bg_03.jpg">
                        <div class="content">
                            <h2>Beli Satu. Dapatkan Gratis</h2>
                            <p>Widescreen 4k ultra Laptop</p>
                            <div class="banner__btn mt-20">
                                <a class="thm-btn thm-btn__black thm-btn__md  text-lowercase" href="#!">
                                    <span class="btn-wrap">
                                        <span>Shop Now</span>
                                        <span>Shop Now</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="thumb">
                            <img src="assets/img/product/img_50.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- rd category start -->
    <div class="rd-category pt-60">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-lg-6 col-md-12 mt-30">
                    <div class="rd-banner ul_li" data-background="assets/img/bg/bg_05.jpg">
                        <div class="rd-banner__content">
                            <span>Widesceen 4k .......</span>
                            <h3>Digital Slr Camera <br> High Defination</h3>
                            <p>Sumptuous, filling, and temptingly</p>
                            <div class="ul_li mt-20">
                                <div class="upto-offer ul_li">
                                    <span class="upto">Up <br> To</span>
                                    <span class="offer-no">70 <span>%</span></span>
                                </div>
                                <h4 class="price">$ 180.99</h4>
                            </div>
                            <div class="banner__btn mt-40">
                                <a class="thm-btn thm-btn__red" href="#!">
                                    <span class="btn-wrap">
                                        <span>Shop Now</span>
                                        <span>Shop Now</span>
                                    </span>
                                    <i class="far fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="rd-banner__img">
                            <img src="assets/img/product/img_51.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-30">
                    <div class="rd-category__wrap">
                        <h2 class="section-heading mb-25"><span>Camera & Dslr Item</span></h2>
                        <ul class="rd-category__list list-unstyled" data-background="assets/img/bg/bg_04.jpg">
                            <li class="title">Action Camera</li>
                            <li><a href="#!">Bluetooth speaker</a></li>
                            <li><a href="#!">Robotics vacuum </a></li>
                            <li><a href="#!">Laser printer</a></li>
                            <li><a href="#!">Electric frying pan</a></li>
                            <li><a href="#!">Digital camera</a></li>
                            <li><a href="#!">Digital camera</a></li>
                            <li><a href="#!">external hard Drive</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-30">
                    <div class="rd-category__wrap">
                        <h2 class="section-heading mb-25"><span>Home Accesories</span></h2>
                        <ul class="rd-category__list list-unstyled" data-background="assets/img/bg/bg_04.jpg">
                            <li class="title">Action Camera</li>
                            <li><a href="#!">Bluetooth speaker</a></li>
                            <li><a href="#!">Robotics vacuum </a></li>
                            <li><a href="#!">Laser printer</a></li>
                            <li><a href="#!">Electric frying pan</a></li>
                            <li><a href="#!">Digital camera</a></li>
                            <li><a href="#!">Digital camera</a></li>
                            <li><a href="#!">external hard Drive</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rd category end -->

    <!-- brand start -->
    <div class="brand pt-80 pb-80">
        <div class="container">
            <div class="brand__active">
                <div class="brand__item">
                    <a href="#!">
                        <img src="assets/img/brand/img_01.png" alt="">
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#!">
                        <img src="assets/img/brand/img_02.png" alt="">
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#!">
                        <img src="assets/img/brand/img_03.png" alt="">
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#!">
                        <img src="assets/img/brand/img_04.png" alt="">
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#!">
                        <img src="assets/img/brand/img_05.png" alt="">
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#!">
                        <img src="assets/img/brand/img_06.png" alt="">
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#!">
                        <img src="assets/img/brand/img_03.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- brand end -->

</main>
@endsection

@push('script')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#checkout-form').submit(function(event){
            event.preventDefault(); // Mencegah submit form default

            let totalPrice = $('#total_price').val(); // Ambil nilai total harga

            $.ajax({
                url: "{{ url('/order') }}", // Pastikan route ini sesuai
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                data: {
                    total_price: totalPrice,
                },
                success: function(response){
                    console.log("Response dari server:", response);

                    if (response.snap_token) {
                        snap.pay(response.snap_token, {
                            onSuccess: function(result) {
                                console.log("Pembayaran Berhasil:", result);
                                alert("Pembayaran berhasil!");
                                window.location.href = "{{ url('/success') }}"; // Redirect ke halaman sukses
                            },
                            onPending: function(result) {
                                console.log("Pembayaran Pending:", result);
                                alert("Pembayaran masih dalam proses. Mohon tunggu!");
                            },
                            onError: function(result) {
                                console.log("Pembayaran Gagal:", result);
                                alert("Terjadi kesalahan dalam pembayaran!");
                            },
                        });
                    } else {
                        alert("Token pembayaran tidak ditemukan!");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error AJAX:", xhr.responseText);
                    alert("Terjadi kesalahan saat memproses transaksi.");
                }
            });
        });
    });
</script>

@endpush
