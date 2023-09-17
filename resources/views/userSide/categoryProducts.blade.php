@extends('userSide.master')

@section('title')
    <title>Kushtia Express</title>
@endsection

@section('content')


    <!--[if lte IE 9]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
          <![endif]-->






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
                    <div class="custom-pagination">
                        {{ $products->links() }}

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
                                        <div class="product__modal-form">
                                            <a href="https://wa.me/+8801911550555" class=" st-btn-3 b-radius" style="background-color: #F9D70B"><i class="fab fa-whatsapp"></i> WhatsApp</a>

                                        </div>
                                    </div>
                                    <div class="product__stock mb-30">

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
