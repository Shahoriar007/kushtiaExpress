@extends('userSide.master')

@section('title')
    <title>Kushtia Express</title>
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



    <!-- breadcrumb__area-start -->
    <section class="breadcrumb__area box-plr-75">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb__area-end -->

    <!-- shop-area-start -->
    <div class="shop-area mb-20">
        <div class="container">
            <div class="row">

                <div class="col-xl-12 col-lg-12">
                    {{-- <div class="shop-banner mb-30">
                        <div class="banner-image">
                            <img class="banner-l" src="{{ asset('assets/img/banner/sl-banner.jpg') }}"
                                alt="">
                            <img class="banner-sm" src="{{ asset('assets/img/banner/sl-banner-sm.png') }}"
                                alt="">
                            <div class="banner-content text-center">
                                <p class="banner-text mb-30">Hurry Up! <br> Free Shipping All Order Over $99</p>
                                <a href="shop.html" class="st-btn-d b-radius">Discover now</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="product-lists-top">
                        <div class="product__filter-wrap">
                            <div class="row align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="product__filter d-sm-flex align-items-center">
                                        <div class="product__col">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="FourCol-tab"
                                                        data-bs-toggle="tab" data-bs-target="#FourCol" type="button"
                                                        role="tab" aria-controls="FourCol" aria-selected="true">
                                                        <i class="fal fa-th"></i>
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="FiveCol-tab" data-bs-toggle="tab"
                                                        data-bs-target="#FiveCol" type="button" role="tab"
                                                        aria-controls="FiveCol" aria-selected="false">
                                                        <i class="fal fa-list"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__result pl-60">
                                            <?php
                                            $resultCount = $products->count();
                                            ?>
                                            <p>Showing 16 of {{ $resultCount }} relults</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                                    <div
                                        class="product__filter-right d-flex align-items-center justify-content-md-end">
                                        <div class="product__sorting product__show-no">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="productGridTabContent">
                        <div class="tab-pane fade  show active" id="FourCol" role="tabpanel"
                            aria-labelledby="FourCol-tab">
                            <div class="tp-wrapper">
                                <div class="row g-0">
                                    @foreach ($products as $item)
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 product-item" data-category="{{ isset($item->category_id) ? $item->category_id : 'accessory' }}" data-brand="{{ isset($item->brand_id) ? $item->brand_id : 'accessory' }}">
                                            <div class="product__item product__item-d">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="{{ route('productDetails', ['id' => $item->id]) }}">
                                                            <img src="{{ asset($item->photos->first()->image_path) }}"
                                                                alt="product">
                                                        </a>


                                                    </div>
                                                    <div class="product-action">
                                                            <a href="#" class="icon-box icon-box-1"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#productModalId_{{ $item->id }}">
                                                                <i class="fal fa-eye"></i>
                                                                <i class="fal fa-eye"></i>
                                                            </a>


                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <h6><a href="">{{ $item->name }}</a></h6>

                                                    <div class="price mb-10">
                                                        <span>৳ {{ $item->price }}</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart-s text-center">
                                                    <a href="{{ route('productDetails', ['id' => $item->id]) }}">
                                                        <button type="button"
                                                            class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                            See Details
                                                        </button>
                                                    </a>



                                                    <button type="button"
                                                        class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                                        data-bs-toggle="modal" data-bs-target="#productModalId_{{ $item->id }}">
                                                        Quick View
                                                    </button>



                                                </div>
                                            </div>
                                        </div>
                                    @endforeach



                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="FiveCol" role="tabpanel" aria-labelledby="FiveCol-tab">
                            <div class="tp-wrapper-2">

                                <div class="single-item-pd">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9">
                                            <div class="single-features-item single-features-item-df b-radius mb-20">
                                                <div class="row  g-0 align-items-center">
                                                    <div class="col-md-4">
                                                        <div class="features-thum">
                                                            <div class="features-product-image w-img">
                                                                <a href="product-details.html"><img
                                                                        src="assets/img/product/sm-2.jpg"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="#" class="icon-box icon-box-1"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#productModalId">
                                                                    <i class="fal fa-eye"></i>
                                                                    <i class="fal fa-eye"></i>
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="product__content product__content-d">
                                                            <h6><a href="product-details.html">Samsang Galaxy A70 128GB
                                                                    Dual-SIM</a></h6>

                                                            <div class="features-des">
                                                                <ul>
                                                                    <li><a href="product-details.html"><i
                                                                                class="fas fa-circle"></i> Bass and
                                                                            Stereo Sound.</a></li>
                                                                    <li><a href="product-details.html"><i
                                                                                class="fas fa-circle"></i> Display with
                                                                            3088 x 1440 pixels resolution.</a></li>
                                                                    <li><a href="product-details.html"><i
                                                                                class="fas fa-circle"></i> Memory,
                                                                            Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                    <li><a href="product-details.html"><i
                                                                                class="fas fa-circle"></i> Androi v10.0
                                                                            Operating system.</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="product-stock mb-15">
                                                <h5>Availability: <span> 940 in stock</span></h5>
                                                <h6>৳ 7,930</h6>
                                            </div>
                                            <div class="stock-btn ">
                                                <a href="product-details.html">
                                                    <button type="button"
                                                        class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                        Buy Now
                                                    </button>
                                                </a>
                                                <button type="button"
                                                    class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                                    data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Quick View
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                    <div class="tp-pagination text-center">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="basic-pagination pt-30 pb-30">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="shop.html" class="active">1</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">2</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">3</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">5</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">6</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">
                                                    <i class="fal fa-angle-double-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop-area-end -->


    <!-- accessory modal start -->
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
                                        @foreach ($item->photos->slice(1) as $photo)
                                            <div class="tab-pane fade" id="nav{{ $loop->index + 1 }}"
                                                role="tabpanel" aria-labelledby="nav{{ $loop->index + 1 }}-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src=" {{ asset($photo->image_path) }}"
                                                        alt="Photo {{ $loop->index + 1 }}" width="120px">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav1" type="button" role="tab"
                                                aria-controls="nav1" aria-selected="true">
                                                <img src="{{ asset($item->photos->first()->image_path) }}"
                                                    alt="" width="120px">
                                            </button>
                                        </li>
                                        @foreach ($item->photos->slice(1) as $photo)
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav{{ $loop->index + 1 }}-tab"
                                                    data-bs-toggle="tab" data-bs-target="#nav{{ $loop->index + 1 }}"
                                                    type="button" role="tab"
                                                    aria-controls="nav{{ $loop->index + 1 }}" aria-selected="false">
                                                    <img src="{{ asset($photo->image_path) }}"
                                                        alt="Photo {{ $loop->index + 1 }}" width="120px">
                                                </button>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4><a href="product-details.html">{{ $item->name }}</a></h4>
                                    <div class="product__review d-sm-flex">
                                        <div class="rating rating__shop mb-10 mr-30">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__add-review mb-15">
                                            <span>01 review</span>
                                        </div>
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
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative"><input type="text"
                                                            value="1" /></div>
                                                </div>
                                                <div class="pro-cart-btn mb-25">
                                                    <button class="cart-btn" type="submit">See Details</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="product__stock mb-30">
                                        <ul>

                                            <li><a href="#">
                                                    <span class="cat mr-10">Categories:</span>
                                                    <span>iPhone, Tablets</span></a>
                                            </li>

                                        </ul>
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
    <!-- accessory modal end -->






</main>




@endsection
