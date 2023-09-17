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
            <img src="{{ asset('frontendUser/assets/img/logo/logoV2.png') }}" alt="Loading..." style="width: 400px; height: auto;">
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
      <!-- product-details-start -->
      <div class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="product__details-nav d-sm-flex align-items-start">
                        <ul class="nav nav-tabs flex-sm-column justify-content-between" id="productThumbTab" role="tablist">

                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="thumbOne-tab" data-bs-toggle="tab" data-bs-target="#thumbOne" type="button" role="tab" aria-controls="thumbOne" aria-selected="true">
                                  <img src="assets/img/product/nav/product-nav-1.jpg" alt="">
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="thumbTwo-tab" data-bs-toggle="tab" data-bs-target="#thumbTwo" type="button" role="tab" aria-controls="thumbTwo" aria-selected="false">
                                <img src="assets/img/product/nav/product-nav-2.jpg" alt="">
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="thumbThree-tab" data-bs-toggle="tab" data-bs-target="#thumbThree" type="button" role="tab" aria-controls="thumbThree" aria-selected="false">
                                <img src="assets/img/product/nav/product-nav-3.jpg" alt="">
                              </button>
                            </li>
                        </ul>
                        <div class="product__details-thumb">
                            <div class="tab-content" id="productThumbContent">
                                <div class="tab-pane fade show active" id="thumbOne" role="tabpanel" aria-labelledby="thumbOne-tab">
                                    <div class="product__details-nav-thumb w-img">
                                        <img src="assets/img/product/nav/product-nav-big-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="thumbTwo" role="tabpanel" aria-labelledby="thumbTwo-tab">
                                    <div class="product__details-nav-thumb w-img">
                                        <img src="assets/img/product/nav/product-nav-big-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="thumbThree" role="tabpanel" aria-labelledby="thumbThree-tab">
                                    <div class="product__details-nav-thumb w-img">
                                        <img src="assets/img/product/nav/product-nav-big-2.jpg" alt="">
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="product__details-content">
                        <h6>{{ $detail->name }}</h6>

                        <div class="price mb-10">
                            <span> ৳ {{ $detail->price }}</span>
                        </div>
                        <div class="features-des mb-20 mt-10">
                            <ul>
                                {!! $detail->bullet_point !!}
                            </ul>
                        </div>
                        <div class="product-stock mb-20">
                            @if($detail->availibility == 0)
                            <h5>Availability: <span>out of stock</span></h5>
                            @else
                            <h5>Availability: <span>in stock</span></h5>
                            @endif

                        </div>
                        <div class="cart-option mb-15">

                            <a href="https://wa.me/+8801911550555" class="cart-btn "><i class="fab fa-whatsapp"></i> Order via WhatsApp</a>

                            <!-- <a href="cart.html" class="cart-btn">Add to Cart</a> -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-details-end -->

    <!-- product-details-des-start -->
    <div class="product-details-des mt-40 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="product__details-des-tab">
                        <ul class="nav nav-tabs" id="productDesTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="des-tab" data-bs-toggle="tab" data-bs-target="#des" type="button" role="tab" aria-controls="des" aria-selected="true">Description </button>
                            </li>


                          </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="prodductDesTaContent">
                <div class="tab-pane fade active show" id="des" role="tabpanel" aria-labelledby="des-tab">
                    <div class="product__details-des-wrapper">
                        {!! $detail->description !!}


                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- product-details-des-end -->
 <!-- shop modal start -->
 <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                    <div class="product__modal-img w-img">
                                        <img src="assets/img/quick-view/quick-view-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                    <div class="product__modal-img w-img">
                                        <img src="assets/img/quick-view/quick-view-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                    <div class="product__modal-img w-img">
                                        <img src="assets/img/quick-view/quick-view-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                    <div class="product__modal-img w-img">
                                        <img src="assets/img/quick-view/quick-view-4.jpg" alt="">
                                    </div>
                                </div>
                                </div>
                            <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                        <img src="assets/img/quick-view/quick-nav-1.jpg" alt="">
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                    <img src="assets/img/quick-view/quick-nav-2.jpg" alt="">
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                    <img src="assets/img/quick-view/quick-nav-3.jpg" alt="">
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                    <img src="assets/img/quick-view/quick-nav-4.jpg" alt="">
                                    </button>
                                </li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product__modal-content">
                            <h4><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
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
                                <span>$109.00 – $307.00</span>
                            </div>
                            <div class="product__modal-des mt-20 mb-15">
                                <ul>
                                    <li><a href="#"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                    <li><a href="#"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                    <li><a href="#"><i class="fas fa-circle"></i> Memory, Storage & SIM: 12GB RAM, 256GB.</a></li>
                                    <li><a href="#"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                </ul>
                            </div>
                            <div class="product__stock mb-20">
                                <span class="mr-10">Availability :</span>
                                <span>1795 in stock</span>
                            </div>
                            <div class="product__modal-form">
                                <form action="#">
                                <div class="pro-quan-area d-lg-flex align-items-center">
                                    <div class="product-quantity mr-20 mb-25">
                                        <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                    </div>
                                    <div class="pro-cart-btn mb-25">
                                        <button class="cart-btn" type="submit">Add to cart</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="product__stock mb-30">
                                <ul>
                                    <li><a href="#">
                                        <span class="sku mr-10">SKU:</span>
                                        <span>Samsung C49J89: £875, Debenhams Plus</span></a>
                                    </li>
                                    <li><a href="#">
                                        <span class="cat mr-10">Categories:</span>
                                        <span>iPhone, Tablets</span></a>
                                    </li>
                                    <li><a href="#">
                                        <span class="tag mr-10">Tags:</span>
                                        <span>Smartphone, Tablets</span></a>
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
<!-- shop modal end -->





</main>



@endsection
