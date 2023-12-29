@extends('userSide.master')

@section('title')
    <title>Exchanger</title>
@endsection

@section('content')


    <!--[if lte IE 9]>
                  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
                  <![endif]-->


@section('placeholder')
    <!-- preloader start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="{{ asset('frontendUser/assets/img/logo/logoV2.png') }}" alt="Loading..."
                    style="width: 400px; height: auto;">
            </div>
        </div>
    </div>
    <!-- preloader end -->
@endsection
<div>


</div>




<!-- offcanvas area start -->
<div class="offcanvas__area">
    <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__logo mb-40">
                <a href="{{ route('homepage') }}">
                    <img src="{{ asset('frontendUser/assets/img/logo/logoV2.png') }}" alt="logo">
                </a>
            </div>
            <div class="offcanvas__search mb-25">
                <form action="#">
                    <input type="text" placeholder="What are you searching for?">
                    <button type="submit"><i class="far fa-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu fix"></div>
            <div class="offcanvas__action">

            </div>
        </div>
    </div>
</div>
<!-- offcanvas area end -->
<div class="body-overlay"></div>
<!-- offcanvas area end -->
<main>
    <section class="features__area features__area1 ">
        <div class="container">
            <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-4 row-cols-md-4 row-cols-sm-4 row-cols-4 gx-0">
                <div class="col">
                    <a href="https://api.whatsapp.com/send?phone=8801911550555" target="_blank">

                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="features__content">
                                <h6>Buy Now</h6>
                                <p>WhatsApp</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="tel:+8801911550555">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="features__content">
                                <h6>Buy Now</h6>
                                <p>01911550555</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://api.whatsapp.com/send?phone=8801911550555" target="_blank">

                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="features__content">
                                <h6>Sell Now</h6>
                                <p>WhatsApp</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="tel:+8801799702025">

                        <div class="features__item features__item-last d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="features__content">
                                <h6>Sell Now</h6>
                                <p>01799702025</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area-start -->
    <div class="slider-area">
        <div class="swiper-container slider__active">
            <div class="slider-wrapper swiper-wrapper">
                @foreach ($sliders as $item)
                    <div class="single-slider swiper-slide slider-height d-flex align-items-center"
                        data-background="{{ asset($item->photo->image_path) }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="slider-content">

                                        <h2 data-animation="fadeInLeft" data-delay="1.5s"
                                            class="pt-15 slider-title pb-5">{{ $item->title }} </h2>
                                        {{-- <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.7s">Discount 30% On Products & Free Shipping</p> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /single-slider -->
                @endforeach


                <div class="main-slider-paginations"></div>
            </div>
        </div>
    </div>
    <!-- slider-area-end -->

    <!-- featured-start -->
    <section class="featured light-bg1 pt-55 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__head d-flex justify-content-between mb-30">
                        <div class="section__title">
                            <h5 class="st-titile">Top Selling Products</h5>
                        </div>
                        <div class="button-wrap">
                            <a href="{{ route('topFeatured') }}">See All Top Selling Product <i
                                    class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme">
                    @foreach ($topFeatured as $item)
                        <div class="col-xl-6 col-lg-12">
                            <div class="single-features-item single-features-item-d b-radius mb-20">
                                <div class="row  g-0 align-items-center">
                                    <div class="col-md-6">
                                        <div class="features-thum">
                                            <div class="features-product-image w-img">
                                                <a href="{{ route('productDetails', ['id' => $item->id]) }}"><img
                                                        src="{{ asset($item->photos->first()->image_path) }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="product__offer">
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                    data-bs-target="#productModalId_{{ $item->id }}">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product__content  product__content-d">
                                            <h6><a
                                                    href="{{ route('productDetails', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                            </h6>

                                            <div class="price d-price mb-10">
                                                @if ($item->offer_price)
                                                    <span style="text-decoration: line-through;"> ৳
                                                        {{ $item->price }}</span>
                                                    <span> ৳ {{ $item->offer_price }}</span>
                                                @else
                                                    <span> ৳ {{ $item->price }}</span>
                                                @endif
                                            </div>
                                            <div class="features-des mb-25">
                                                {!! $item->bullet_point !!}
                                            </div>
                                            <div class="cart-option">
                                                <a href="{{ route('productDetails', ['id' => $item->id]) }}"
                                                    class="cart-btn-2 w-100 mr-10">See details</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-xl-6 col-lg-12">
                            <div class="single-features-item single-features-item-d b-radius mb-20">
                                <div class="row  g-0 align-items-center">
                                    <div class="col-md-6">
                                        <div class="features-thum">
                                            <div class="features-product-image w-img">
                                                <a href="product-details.html"><img src="{{ asset('frontendUser/assets/img/product/tp-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-15%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product__content product__content-d">
                                            <h6><a href="product-details.html">Samsang Galaxy A70 128GB Dual-SIM</a></h6>
                                            <div class="rating mb-5">
                                                <ul class="rating-d">
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price d-price mb-10">
                                                <span>৳ 9,794 <del>৳ 110</del></span>
                                            </div>
                                            <div class="features-des mb-25">
                                                <ul>
                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                </ul>
                                            </div>
                                            <div class="cart-option">
                                                <a href="product-details.html" class="cart-btn-2 w-100 mr-10">Buy Now</a>
                                                <a href="product-details.html" class="transperant-btn"><i class="fal fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="single-features-item single-features-item-d b-radius mb-20">
                                <div class="row  g-0 align-items-center">
                                    <div class="col-md-6">
                                        <div class="features-thum">
                                            <div class="features-product-image w-img">
                                                <a href="product-details.html"><img src="{{ asset('frontendUser/assets/img/product/tp-1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-15%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product__content product__content-d">
                                            <h6><a href="product-details.html">Samsang Galaxy A70 128GB Dual-SIM</a></h6>
                                            <div class="rating mb-5">
                                                <ul class="rating-d">
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price d-price mb-10">
                                                <span>৳ 9,794 <del>৳ 110</del></span>
                                            </div>
                                            <div class="features-des mb-25">
                                                <ul>
                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                </ul>
                                            </div>
                                            <div class="cart-option">
                                                <a href="product-details.html" class="cart-btn-2 w-100 mr-10">Buy Now</a>
                                                <a href="product-details.html" class="transperant-btn"><i class="fal fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                </div>


            </div>
        </div>
    </section>
    <!-- featured-end -->

    <!-- topsell__area-start -->
    <section class="topsell__area-2 pt-15">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__head d-flex justify-content-between mb-10">
                        <div class="section__title">
                            <h5 class="st-titile">Products</h5>
                        </div>
                        <div class="product__nav-tab">
                            <div class="button-wrap">
                                <a href="{{ route('shop') }}">See All Product <i
                                        class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-bs-slider">
                    <div class="product-slider swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($products as $item)
                                <div class="product__item swiper-slide">
                                    <div class="product__thumb fix">
                                        <div class="product-image w-img">
                                            <a href="{{ route('productDetails', ['id' => $item->id]) }}">
                                                <img src="{{ asset($item->photos->first()->image_path) }}"
                                                    alt="product">
                                            </a>
                                        </div>
                                        <div class="product__offer">
                                            {{-- <span class="discount">-15%</span> --}}
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                data-bs-target="#productModalId_{{ $item->id }}">
                                                <i class="fal fa-eye"></i>
                                                <i class="fal fa-eye"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <h6><a
                                                href="{{ route('productDetails', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                        </h6>

                                        <div class="price mb-10">
                                            @if ($item->offer_price)
                                                <span style="text-decoration: line-through;"> ৳
                                                    {{ $item->price }}</span>
                                                <span> ৳ {{ $item->offer_price }}</span>
                                            @else
                                                <span> ৳ {{ $item->price }}</span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="product__add-cart text-center">
                                        <a href="{{ route('productDetails', ['id' => $item->id]) }}">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                See details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="bs-button bs-button-prev"><i class="fal fa-chevron-left"></i></div>
                    <div class="bs-button bs-button-next"><i class="fal fa-chevron-right"></i></div>
                </div>
            </div>

        </div>
    </section>
    <!-- topsell__area-end -->



    <!-- topsell__area-start -->
    <section class="topsell__area-1 pt-15">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head section__head-margin d-flex justify-content-between mb-30">
                            <div class="section__title section__title_padding">
                                <h5 class="st-titile">Parts & Accessories</h5>
                            </div>
                            <div class="button-wrap">
                                <a href="{{ route('accessory') }}">See All Parts & Accessories <i
                                        class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="product-bs-slider">
                    <div class="product-slider swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($accessoryItems as $item)
                                <div class="product__item swiper-slide">
                                    <div class="product__thumb fix">
                                        <div class="product-image w-img">
                                            <a href="{{ route('accessoryDetails', ['id' => $item->id]) }}">
                                                <img src="{{ asset($item->photos->first()->image_path) }}"
                                                    alt="product">
                                            </a>
                                        </div>
                                        <div class="product__offer">
                                            {{-- <span class="discount">-15%</span> --}}
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                data-bs-target="#accessoryModalId_{{ $item->id }}">
                                                <i class="fal fa-eye"></i>
                                                <i class="fal fa-eye"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <h6><a
                                                href="{{ route('accessoryDetails', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                        </h6>

                                        <div class="price mb-10">
                                            @if ($item->offer_price)
                                                <span style="text-decoration: line-through;"> ৳
                                                    {{ $item->price }}</span>
                                                <span> ৳ {{ $item->offer_price }}</span>
                                            @else
                                                <span> ৳ {{ $item->price }}</span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="product__add-cart text-center">
                                        <a href="{{ route('accessoryDetails', ['id' => $item->id]) }}">
                                            <button type="button"
                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                See details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="bs-button bs-button-prev"><i class="fal fa-chevron-left"></i></div>
                    <div class="bs-button bs-button-next"><i class="fal fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- topsell__area-end -->


    <!-- banner__area-start -->
    <section class="banner__area pt-60 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="banner__item p-relative w-img mb-30">
                        <div class="banner__img">
                            <a href="{{ route('newArrivals') }}"><img
                                    src="{{ asset('frontendUser/assets/img/banner/banner-6.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="banner__content banner__content-sd text-center">
                            <div class="banner-button mb-20">
                                <a href="{{ route('newArrivals') }}" class="st-btn">See Details</a>
                            </div>
                            <h6><a href="{{ route('newArrivals') }}">New <br> Collection</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner__item p-relative mb-30 w-img">
                                <div class="banner__img">
                                    <a href="#"><img
                                            src="{{ asset('frontendUser/assets/img/banner/banner-7.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="banner__content banner__content-sd text-center">
                                    <h6><a href="product-details.html">Exchange</a></h6>
                                    <p>Laptop, Computer, Smartphone</p>
                                    <div class="banner-button mt-20 d-none d-sm-block">
                                        <a href="tel:+8801911550555" class="st-btn-3 b-radius">Phone</a>
                                        <a href="https://wa.me/+8801911550555" class="st-btn-3 b-radius"><i
                                                class="fab fa-whatsapp"></i> WhatsApp</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="banner__item p-relative w-img mb-30">
                                <div class="banner__img">
                                    <a href="#"><img
                                            src="{{ asset('frontendUser/assets/img/banner/banner-8.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="banner__content banner__content-sd text-center">
                                    <h6><a href="#">Pre Order</a></h6>
                                    <p>Discount On Products</p>
                                    <div class="banner-button mt-20 d-none d-sm-block">
                                        <a href="tel:+8801799702025" class="st-btn-3 b-radius">Phone</a>
                                        <a href="https://wa.me/+8801911550555" class="st-btn-3 b-radius"><i
                                                class="fab fa-whatsapp"></i> WhatsApp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="banner__item p-relative mb-30 w-img">
                        <div class="banner__img">
                            <a href="{{ route('preOwned') }}"><img
                                    src="{{ asset('frontendUser/assets/img/banner/banner-9.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="banner__content banner__content-sd text-center">
                            <div class="banner-button mb-20">
                                <a href="{{ route('preOwned') }}" class="st-btn">See Details</a>
                            </div>
                            <h6><a href="{{ route('preOwned') }}">Pre Owned <br> Collection</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner__area-end -->




    <!-- topsell__area-start -->
    <section class="topsell__area-1 pt-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class=" d-flex justify-content-between mb-10">
                        <div class="section__title">
                            <h5 class="st-titile">Brands</h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mb-3 ">
                @foreach ($brands as $item)
                    <div class="col-lg-3 col-md-3 col-sm-2 col-6    mt-4 ">
                        <a href="{{ route('brand', ['id' => $item->id]) }}">
                            <div class="d-flex cat1 p-3  flex-column align-items-center justify-content-center">
                                <div class="d-flex justify-content-center  align-items-center cat-img rounded-circle">
                                    <img class="img-fluid" src="{{ asset($item->photo->image_path) }}"
                                        alt="">
                                </div>
                                <h6 class="fw-bold mt-15">{{ $item->brandName }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- topsell__area-end -->




    <!-- accessory modal start -->
    @foreach ($accessoryItems as $item)
        <div class="modal fade" id="accessoryModalId_{{ $item->id }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                <div class="modal-content">
                    <div class="product__modal-wrapper p-relative">
                        <div class="product__modal-close p-absolute">
                            <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                        </div>
                        <div class="product__modal-inner">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-box">
                                        <div class="tab-content" id="modalTabContent">
                                            <div class="tab-pane fade show active" id="nav1" role="tabpanel"
                                                aria-labelledby="nav1-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ asset($item->photos->first()->image_path) }}"
                                                        alt="" width="120px">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4><a href="product-details.html">{{ $item->name }}</a></h4>

                                        <div class="product__price">
                                            @if ($item->offer_price)
                                                <span style="text-decoration: line-through;"> ৳
                                                    {{ $item->price }}</span>
                                                <span> ৳ {{ $item->offer_price }}</span>
                                            @else
                                                <span> ৳ {{ $item->price }}</span>
                                            @endif
                                        </div>
                                        <div class="product__modal-des mt-20 mb-15">
                                            {!! $item->bullet_point !!}
                                        </div>
                                        <div class="product__stock mb-20">
                                            <span class="mr-10">Availability :</span>
                                            <span>{{ $item->availability }} in stock</span>
                                        </div>

                                        @if ($item->link)
                                            <a href="{{ $item->link }}" class="st-btn-3 b-radius"
                                                style="background-color: #fc0028"><i class="fab fa-youtube"></i>
                                                Watch on Youtube</a>
                                        @endif

                                        <a href="https://wa.me/+8801911550555" class=" st-btn-3 b-radius"
                                            style="background-color: #F9D70B"><i class="fab fa-whatsapp"></i>
                                            WhatsApp</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- accessory modal end -->

    <!-- product modal start -->

    @foreach ($products as $item)
        <div class="modal fade" id="productModalId_{{ $item->id }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                <div class="modal-content">
                    <div class="product__modal-wrapper p-relative">
                        <div class="product__modal-close p-absolute">
                            <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                        </div>
                        <div class="product__modal-inner">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-box">
                                        <div class="tab-content" id="modalTabContent">
                                            <div class="tab-pane fade show active" id="nav1" role="tabpanel"
                                                aria-labelledby="nav1-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{ asset($item->photos->first()->image_path) }}"
                                                        alt="" width="120px">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4><a href="product-details.html">{{ $item->name }}</a></h4>
                                        <div class="product__review d-sm-flex">


                                        </div>
                                        <div class="product__price">
                                            @if ($item->offer_price)
                                                <span style="text-decoration: line-through;"> ৳
                                                    {{ $item->price }}</span>
                                                <span> ৳ {{ $item->offer_price }}</span>
                                            @else
                                                <span> ৳ {{ $item->price }}</span>
                                            @endif
                                        </div>
                                        <div class="product__modal-des mt-20 mb-15">
                                            {!! $item->bullet_point !!}
                                        </div>
                                        <div class="product__stock mb-20">
                                            <span class="mr-10">Availability :</span>
                                            <span>{{ $item->availability }} in stock</span>
                                        </div>
                                        <div class="product__modal-form">
                                            <form action="#">
                                                <div class="pro-quan-area d-lg-flex align-items-center">

                                                    @if ($item->link)
                                                        <a href="{{ $item->link }}" class="st-btn-3 b-radius"
                                                            style="background-color: #fc0028"><i
                                                                class="fab fa-youtube"></i>
                                                            Watch on Youtube</a>
                                                    @endif

                                                    <a href="https://wa.me/+8801911550555" class=" st-btn-3 b-radius"
                                                        style="background-color: #F9D70B"><i
                                                            class="fab fa-whatsapp"></i>
                                                        WhatsApp</a>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- shop modal end -->

    <section class="client-review">
        {{-- <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <div class="testimonial-container">
                        <div class="progress-bar"></div>
                        <div class="fas fa-quote-left fa-quote"></div>
                        <div class="fas fa-quote-right fa-quote"></div>
                        <p class="testimonial">
                        </p>
                        <div class="user">
                            <img src="" alt="user" class="user-image" />
                            <div class="user-details">
                                <h4 class="username">
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}
    </section>


    <!-- banner__area-start -->
    <!-- <section class="banner__area pt-60 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner__item p-relative w-img mb-30">
                                <div class="banner__img">
                                    <a href="product-details.html"><img src="{{ asset('frontendUser/assets/img/banner/banner-1.jpg') }}" alt=""></a>
                                </div>
                                <div class="banner__content">
                                    <h6><a href="product-details.html">Intelligent <br> New Touch Control</a></h6>
                                    <p>Discount  20% On Products</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner__item p-relative mb-30 w-img">
                                <div class="banner__img">
                                    <a href="product-details.html"><img src="{{ asset('frontendUser/assets/img/banner/banner-2.jpg') }}" alt=""></a>
                                </div>
                                <div class="banner__content">
                                    <h6><a href="product-details.html">On-sale <br> Best Prices</a></h6>
                                    <p>Limited Time: Online Only!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner__item p-relative mb-30 w-img">
                                <div class="banner__img">
                                    <a href="product-details.html"><img src="{{ asset('frontendUser/assets/img/banner/banner-3.jpg') }}" alt=""></a>
                                </div>
                                <div class="banner__content">
                                    <h6><a href="product-details.html">Hot Sale <br> Super Laptops 2022 </a></h6>
                                    <p>Free Shipping All Order</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>  -->
    <!-- banner__area-end -->

</main>



<!-- JS here -->
<!-- Your HTML content -->

<script>
    const testimonials = @json($reviews);

    let index = 0; // Start with the first testimonial (index 0)

    const testimonial = document.querySelector(".testimonial");
    const userImage = document.querySelector(".user-image");
    const username = document.querySelector(".username");

    const updateTestimonial = () => {
        const {
            name,
            reviewText,
            image_path
        } = testimonials[index];
        testimonial.innerHTML = reviewText;
        username.innerHTML = name;
        userImage.src = image_path
        // Get the image path from the data attribute
        index++;
        if (index >= testimonials.length) index = 0; // Reset index when it reaches the last testimonial
    };

    // Update the testimonial as soon as the page loads
    updateTestimonial();

    // Set the interval to update the testimonial every 10000ms (10 seconds)
    setInterval(updateTestimonial, 10000);
</script>



@endsection
