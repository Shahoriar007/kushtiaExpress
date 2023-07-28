@extends('userSide.master')

@section('title')
    <title>Kushtia Express</title>
@endsection

@section('content')



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
                            @foreach($detail->photos as $photo)
                            <li class="nav-item" role="presentation">
                              <button class="nav-link {{ $loop->index == 0 ? 'active' : '' }}" id="thumb{{ $loop->index+1 }}-tab" data-bs-toggle="tab" data-bs-target="#thumb{{ $loop->index+1 }}" type="button" role="tab" aria-controls="thumb{{ $loop->index+1 }}" aria-selected="true">
                                  <img src="{{ asset($photo->image_path) }}" alt="" width="120px">
                              </button>
                            </li>
                            @endforeach
                            {{-- <li class="nav-item" role="presentation">
                              <button class="nav-link" id="thumbTwo-tab" data-bs-toggle="tab" data-bs-target="#thumbTwo" type="button" role="tab" aria-controls="thumbTwo" aria-selected="false">
                                <img src="assets/img/product/nav/product-nav-2.jpg" alt="">
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="thumbThree-tab" data-bs-toggle="tab" data-bs-target="#thumbThree" type="button" role="tab" aria-controls="thumbThree" aria-selected="false">
                                <img src="assets/img/product/nav/product-nav-3.jpg" alt="">
                              </button>
                            </li> --}}
                        </ul>
                        <div class="product__details-thumb">
                            <div class="tab-content" id="productThumbContent">

                                @foreach($detail->photos as $photo)

                                <div class="tab-pane fade {{ $loop->index == 0 ? 'show active' : '' }}" id="thumb{{ $loop->index+1 }}" role="tabpanel" aria-labelledby="thumb{{ $loop->index+1 }}-tab">
                                    <div class="product__details-nav-thumb w-img">
                                        <img src="{{ asset($photo->image_path) }}" alt="" width="400px">
                                    </div>
                                </div>
                                @endforeach
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

                            <a href="https://wa.me/+8801234567890" class="cart-btn "><i class="fab fa-whatsapp"></i> Order via WhatsApp</a>

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

</main>

@endsection
