@extends('userSide.master')

@section('title')
<title>Contact</title>
@endsection

@section('content')

<main>
        <!-- page-banner-area-start -->
        <div class="page-banner-area page-banner-height" data-background="assets/img/banner/page-banner-3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-banner-content text-center">
                            <h4 class="breadcrumb-title">Contact Us</h4>
                            <div class="breadcrumb-two">
                                <nav>
                                   <nav class="breadcrumb-trail breadcrumbs">
                                      <ul class="breadcrumb-menu">
                                         <li class="breadcrumb-trail">
                                            <a href="index.html"><span>Home</span></a>
                                         </li>
                                         <li class="trail-item">
                                            <span>Contact Us</span>
                                         </li>
                                      </ul>
                                   </nav> 
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-banner-area-end -->

        <!-- location-area-start -->
        <div class="location-area pt-70 pb-25">
            <div class="container">
                <div class="row mb-25">
                    <div class="col-xl-12">
                        <div class="abs-section-title text-center">
                            <span>LOCATION STORE</span>
                            <h4>Where We Are</h4>
                            <p>The perfect way to enjoy brewing tea on low hanging fruit to identify. Duis autem vel eum iriure dolor in hendrerit <br> in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8  col-lg-8 col-md-6">
                        <div class="location-image w-img mb-20">
                            <img src="{{ asset('frontendUser/assets/img/location/location-1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="location-item mb-30">
                            <h6>26 Rue Pelleport - Paris</h6>
                            <div class="sm-item-loc sm-item-border mb-20">
                                <div class="sml-icon mr-20">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="sm-content">
                                    <span>Find us</span>
                                    <p>Rue Saint-Antoine, Paris, France  </p>  
                                </div>
                            </div>
                            <div class="sm-item-loc sm-item-border mb-20">
                                <div class="sml-icon mr-20">
                                    <i class="fal fa-phone-alt"></i>
                                </div>
                                <div class="sm-content">
                                    <span>Call us</span>
                                    <p><a href="tel:+8804568">(+100) 123 456 7890</a></p>  
                                </div>
                            </div>
                            <div class="sm-item-loc mb-20">
                                <div class="sml-icon mr-20">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="sm-content">
                                    <span>Mail us</span>
                                    <p><a href="../../../cdn-cgi/l/email-protection.html#6c1f18031e092c0f03011c0d0215420f0301"><span class="__cf_email__" data-cfemail="5221263d203712313d3f22333c2b7c313d3f">[email&#160;protected]</span></a></p>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- location-area-end -->

       

       
    </main>
@endsection