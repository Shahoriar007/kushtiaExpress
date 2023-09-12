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
                <svg viewBox="0 0 58 58" id="mustard" class="product">
                    <g>
                        <path style="fill:#ED7161;"
                            d="M39.869,58H18.131C16.954,58,16,57.046,16,55.869V12.621C16,11.726,16.726,11,17.621,11h22.757
                    C41.274,11,42,11.726,42,12.621v43.248C42,57.046,41.046,58,39.869,58z" />
                        <polygon style="fill:#D13834;" points="35,11 23,11 27.615,0 30.385,0 	" />
                        <rect x="16" y="16" style="fill:#D75A4A;" width="26" height="2" />
                        <rect x="20" y="11" style="fill:#D75A4A;" width="2" height="6" />
                        <rect x="25" y="11" style="fill:#D75A4A;" width="2" height="6" />
                        <rect x="30" y="11" style="fill:#D75A4A;" width="2" height="6" />
                        <rect x="36" y="11" style="fill:#D75A4A;" width="2" height="6" />
                        <circle style="fill:#D13834;" cx="29" cy="36" r="10" />
                    </g>
                </svg>
                <svg viewBox="0 0 49.818 49.818" id="meat" class="product">
                    <g>
                        <path style="fill:#994530;"
                            d="M0.953,38.891c0,0,3.184,6.921,11.405,9.64c1.827,0.604,3.751,0.751,5.667,0.922
                        c7.866,0.703,26.714-0.971,31.066-18.976c1.367-5.656,0.76-11.612-1.429-17.003C44.51,5.711,37.447-4.233,22.831,2.427
                        c-8.328,3.795-7.696,10.279-5.913,14.787c2.157,5.456-2.243,11.081-8.06,10.316C1.669,26.584-1.825,30.904,0.953,38.891z" />
                        <g>
                            <path style="fill:#D75A4A;"
                                d="M4.69,37.18c0.402,0.785,3.058,5.552,9.111,7.554c1.335,0.441,2.863,0.577,4.482,0.72l0.282,0.025
                            c0.818,0.073,1.698,0.11,2.617,0.11c18.18,0,22.854-11.218,24.02-16.041c1.134-4.693,0.706-9.703-1.235-14.488
                            C41.049,7.874,36.856,4.229,31.506,4.229c-2.21,0-4.683,0.615-7.349,1.83c-2.992,1.364-6.676,3.921-4.13,10.36
                            c1.284,3.25,0.912,6.746-1.023,9.591c-2.17,3.191-6.002,4.901-9.895,4.39c-0.493-0.065-0.966-0.099-1.404-0.099
                            c-1.077,0-2.502,0.198-3.173,1.143C3.765,32.524,3.823,34.609,4.69,37.18z" />
                            <path style="fill:#C64940;"
                                d="M21.184,46.589c-0.948,0-1.858-0.038-2.706-0.114l-0.283-0.025
                            c-1.674-0.147-3.257-0.287-4.706-0.767c-6.376-2.108-9.188-7.073-9.688-8.047l-0.058-0.137c-0.984-2.917-0.993-5.273-0.026-6.635
                            c0.912-1.285,2.89-1.807,5.524-1.456c3.537,0.466,6.959-1.054,8.936-3.961c1.746-2.565,2.082-5.723,0.921-8.661
                            c-3.189-8.065,2.707-10.754,4.645-11.638c9.68-4.407,16.81-1.155,21.152,9.535c2.021,4.981,2.464,10.202,1.28,15.099
                            C44.953,34.836,40.073,46.589,21.184,46.589z M5.613,36.787c0.401,0.758,2.936,5.155,8.503,6.997
                            c1.229,0.406,2.699,0.536,4.256,0.673l0.284,0.025c0.788,0.07,1.639,0.106,2.527,0.106c17.469,0,21.938-10.683,23.048-15.276
                            c1.084-4.487,0.672-9.286-1.19-13.877C40.29,8.663,36.409,5.229,31.506,5.229c-2.067,0-4.4,0.585-6.934,1.74
                            c-3.02,1.376-5.81,3.532-3.615,9.083c1.408,3.563,0.998,7.398-1.126,10.521c-2.404,3.534-6.563,5.386-10.852,4.818
                            c-1.793-0.236-3.197,0.019-3.632,0.632C4.912,32.636,4.756,34.207,5.613,36.787z" />
                        </g>
                        <g>
                            <circle style="fill:#E6E6E6;" cx="32.455" cy="12.779" r="4" />
                            <path style="fill:#7A3726;"
                                d="M32.455,17.779c-2.757,0-5-2.243-5-5s2.243-5,5-5s5,2.243,5,5S35.212,17.779,32.455,17.779z
                            M32.455,9.779c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3S34.109,9.779,32.455,9.779z" />
                        </g>
                        <path style="fill:#C64940;"
                            d="M25.617,45.684l-1.941-0.479c0.435-1.761-1.063-3.216-3.446-4.859
                        c-2.875-1.984-4.817-5.117-5.327-8.595c-0.186-1.266-0.425-2.285-0.428-2.295l1.922-0.548c0.01,0.028,1.09,3.104,3.978,4.314
                        c2.094,0.877,4.667,0.598,7.648-0.832c11.578-5.554,17.102-2.646,17.332-2.52l-0.967,1.752c-0.04-0.021-4.97-2.48-15.5,2.57
                        c-3.53,1.694-6.662,1.984-9.312,0.863c-0.801-0.339-1.49-0.779-2.078-1.265c0.769,1.974,2.11,3.695,3.867,4.907
                        C23.149,39.931,26.472,42.222,25.617,45.684z" />
                        <path style="fill:#C64940;"
                            d="M27.074,27.586c-5.37,0-7.605-3.694-7.633-3.74l1.727-1.01l-0.863,0.505l0.859-0.511
                        c0.108,0.179,2.714,4.335,9.738,2.105c1.54-0.794,12.038-6.002,15.619-2.289l-1.439,1.389c-1.979-2.052-9.229,0.576-13.332,2.714
                        l-0.154,0.064C29.892,27.364,28.389,27.586,27.074,27.586z" />
                    </g>
                </svg>
                <svg viewBox="0 0 49 49" id="soda" class="product">
                    <g>
                        <path style="fill:#E22F37;"
                            d="M9.5,27V5.918c0-1.362,0.829-2.587,2.094-3.093l0,0C12.642,2.406,13.5,1.14,13.5,0.011L13.5,0v0
                        l11,0l11,0v0v0.011c0,1.129,0.858,2.395,1.906,2.814l0,0c1.265,0.506,2.094,1.73,2.094,3.093V27v-5v21.082
                        c0,1.362-0.829,2.587-2.094,3.093h0c-1.048,0.419-1.906,1.686-1.906,2.814V49l0,0h-11h-11l0,0l0-0.011
                        c0-1.129-0.858-2.395-1.906-2.814h0c-1.265-0.506-2.094-1.73-2.094-3.093V22" />
                        <path style="fill:#F75B57;"
                            d="M18.5,7h-5c-0.553,0-1-0.447-1-1s0.447-1,1-1h5c0.553,0,1,0.447,1,1S19.053,7,18.5,7z" />
                        <path style="fill:#F75B57;"
                            d="M35.5,7h-13c-0.553,0-1-0.447-1-1s0.447-1,1-1h13c0.553,0,1,0.447,1,1S36.053,7,35.5,7z" />
                        <path style="fill:#994530;"
                            d="M18.5,45h-5c-0.553,0-1-0.447-1-1s0.447-1,1-1h5c0.553,0,1,0.447,1,1S19.053,45,18.5,45z" />
                        <path style="fill:#994530;"
                            d="M35.5,45h-13c-0.553,0-1-0.447-1-1s0.447-1,1-1h13c0.553,0,1,0.447,1,1S36.053,45,35.5,45z" />
                        <polygon style="fill:#E6E6E6;" points="39.5,32 9.5,42 9.5,20 39.5,10 	" />
                        <polygon style="fill:#F9D70B;" points="39.5,28 9.5,38 9.5,24 39.5,14 	" />
                    </g>
                </svg>
                <div class="cart-container">
                    <svg viewBox="0 0 512 512" id="cart">
                        <circle cx="376.8" cy="440" r="55" />
                        <circle cx="192" cy="440" r="55" />
                        <polygon points="128,0 0.8,0 0.8,32 104.8,32 136.8,124.8 170.4,124.8 " />
                        <polygon style="fill:#ED7161;" points="250.4,49.6 224,124.8 411.2,124.8 " />
                        <polygon style="fill:#ee5a46;"
                            points="411.2,124.8 224,124.8 170.4,124.8 136.8,124.8 68,124.8 141.6,361.6 427.2,361.6
                    511.2,124.8 " />
                        <g>
                            <rect x="166.4" y="185.6" style="fill:#FFFFFF;" width="255.2" height="16" />
                            <rect x="166.4" y="237.6" style="fill:#FFFFFF;" width="166.4" height="16" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->
@endsection





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
                <a href="index.html">
                    <img src="{{ asset('frontendUser/assets/img/logo/Kushtia express 3d logo.png') }}" alt="logo">
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
                    <a href="https://api.whatsapp.com/send?phone=8801799702025" target="_blank">

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
                                <p>01799702025</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://api.whatsapp.com/send?phone=8801799702025" target="_blank">

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
    <!-- banner__area-start -->
    {{-- <section class="banner__area pt-60 pb-25">
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
                                    <p>Laptop, Computer, Smartphone, Gampad</p>
                                    <div class="banner-button mt-20 d-none d-sm-block">
                                        <a href="tel:+8801911550555" class="st-btn-3 b-radius">Phone</a>
                                        <a href="https://wa.me/+8801234567890" class="st-btn-3 b-radius"><i class="fab fa-whatsapp"></i> WhatsApp</a>

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
                                    <h6><a href="#">Sell</a></h6>
                                    <p>Discount 20% On Products</p>
                                    <div class="banner-button mt-20 d-none d-sm-block">
                                        <a href="tel:+8801799702025" class="st-btn-3 b-radius">Phone</a>
                                        <a href="https://wa.me/+8801234567890" class="st-btn-3 b-radius"><i class="fab fa-whatsapp"></i> WhatsApp</a>                                    </div>
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
    </section> --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- banner__area-end -->

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
                                <a href="{{ route('shop') }}">See All Product <i class="fal fa-chevron-right"></i></a>
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
                                            <span>৳ {{ $item->price }}</span>
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
                                <h5 class="st-titile">Accessories</h5>
                            </div>
                            <div class="button-wrap">
                                <a href="{{ route('accessory') }}">See All Accessories <i class="fal fa-chevron-right"></i></a>
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
                                            <span>৳ {{ $item->price }}</span>
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




    <!-- featured-start -->
    <section class="featured light-bg1 pt-55 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__head d-flex justify-content-between mb-30">
                        <div class="section__title">
                            <h5 class="st-titile">Top Featured Products</h5>
                        </div>
                        <div class="button-wrap">
                            <a href="{{ route('topFeatured') }}">See All Featured Product <i class="fal fa-chevron-right"></i></a>
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
                                        <div class="product__content  product__content-d">
                                            <h6><a
                                                    href="{{ route('productDetails', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                            </h6>

                                            <div class="price d-price mb-10">
                                                <span>৳ {{ $item->price }}</span>
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
                    <div class="col-lg-6 col-md-3 col-sm-2 col-6    mt-4 ">
                        <a href="{{ route('shop') }}">
                            <div class="d-flex cat1 p-3  flex-column align-items-center justify-content-center">
                                <div class="d-flex justify-content-center  align-items-center cat-img rounded-circle">
                                    <img class="img-fluid"
                                        src="{{ asset($item->photo->image_path) }}"
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
                                            <span> ৳ {{ $item->price }}</span>
                                        </div>
                                        <div class="product__modal-des mt-20 mb-15">
                                            {!! $item->bullet_point !!}
                                        </div>
                                        <div class="product__stock mb-20">
                                            <span class="mr-10">Availability :</span>
                                            <span>{{ $item->availability }} in stock</span>
                                        </div>

                                        <a href="https://wa.me/+8801234567890" class=" st-btn-3 b-radius" style="background-color: #F9D70B"><i class="fab fa-whatsapp"></i> WhatsApp</a>

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
                                            <span> ৳ {{ $item->price }}</span>
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

                                                    <div class="cart-option mb-15">

                                                        <a href="https://wa.me/+8801234567890" class="cart-btn "><i class="fab fa-whatsapp"></i> Order via WhatsApp</a>

                                                        <!-- <a href="cart.html" class="cart-btn">Add to Cart</a> -->
                                                    </div>

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
        <div class="container">
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
        </div>
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
    console.log(testimonials)

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
