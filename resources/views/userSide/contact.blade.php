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
                {{-- <div class="row mb-25">
                    <div class="col-xl-12">
                        <div class="abs-section-title text-center">
                            <span>LOCATION STORE</span>
                            <h4>Where We Are</h4>
                            <p>The perfect way to enjoy brewing tea on low hanging fruit to identify. Duis autem vel eum iriure dolor in hendrerit <br> in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-xl-8  col-lg-8 col-md-6">
                        <div class="location-image w-img mb-20">
                            <img src="{{ asset('frontendUser/assets/img/location/location-1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="location-item mb-30">

                            <div class="sm-item-loc sm-item-border mb-20">
                                <div class="sml-icon mr-20">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="sm-content" >
                                    <span>ঠিকানা</span>
                                    <p style="line-height: 1.8;">আমাদের শোরুম বাংলাদেশের খুলনা বিভাগের কুষ্টিয়া জেলায় অবস্থিত।
                                        কুষ্টিয়া  সদরের  প্রধান  কেন্দ্র  মজমপুরের চৌধুরী মার্কেটের দ্বিতীয়  তলায় ২০২২ থেকে কার্যক্রম অনুষ্ঠিত হচ্ছে। সহজে খুঁজতে হলে কুষ্টিয়া পৌরসভার সামনে দাঁড়ালে আমাদের শোরুম দৃশ্যমান হয় তাছাড়া গুগলে EXCHANGER BD দিয়ে সার্চ করলে আমাদের শোরুমের লাইভ লোকেশন দেখিয়ে দেবে |</p>
                                </div>
                            </div>
                            <div class="sm-item-loc sm-item-border mb-20">
                                <div class="sml-icon mr-20">
                                    <i class="fal fa-phone-alt"></i>
                                </div>
                                <div class="sm-content">
                                    <span>রাশেদ মালিথা(মালিক)</span>
                                    <p><a href="tel:+8801711338820">01711338820</a></p>
                                    <p style="line-height: 1.7;">যে কোন প্রোডাক্ট বিক্রির জন্য সরাসরি যোগাযোগ করুন। মোবাইল,ল্যাপটপ,গাড়ি ইত্যাদি । </p>
                                </div>
                            </div>
                            <div class="sm-item-loc sm-item-border mb-20">
                                <div class="sml-icon mr-20">
                                    <i class="fal fa-phone-alt"></i>
                                </div>
                                <div class="sm-content">
                                    <span>আশিক আহাম্মেদ (ম্যানেজার)</span>
                                    <p><a href="tel:+8801731563645">01731563645</a></p>
                                    <p style="line-height: 1.7;">যে কোন প্রোডাক্ট বিক্রির জন্য সরাসরি যোগাযোগ করুন। মোবাইল,ল্যাপটপ,গাড়ি ইত্যাদি । </p>
                                </div>
                            </div>
                            <div class="sm-item-loc sm-item-border mb-20">
                                <div class="sml-icon mr-20">
                                    <i class="fal fa-phone-alt"></i>
                                </div>
                                <div class="sm-content">
                                    <span>সাকিল আহাম্মেদ (পরামর্শ দাতা)</span>
                                    <p><a href="tel:+8801781415020">01781415020</a></p>
                                    <p style="line-height: 1.7;">যে কোন মোবাইলের কন্ডিশন সম্পর্কে জানতে এবং পরামর্শ নিতে যোগাযোগ করুন। </p>
                                </div>
                            </div>
                            <div class="sm-item-loc sm-item-border mb-20">
                                <div class="sml-icon mr-20">
                                    <i class="fal fa-phone-alt"></i>
                                </div>
                                <div class="sm-content">
                                    <span>ভুবন বিশ্বাস ( অনলাইন ম্যানেজমেন্ট)</span>
                                    <p><a href="tel:+8801774507992">01774507992</a></p>
                                    <p style="line-height: 1.7;">যে কোন মোবাইলের কন্ডিশন সম্পর্কে জানতে এবং পরামর্শ নিতে যোগাযোগ করুন। </p>
                                </div>
                            </div>
                            <div class="sm-item-loc mb-20">

                                <div class="sm-content" style="line-height: 1.7;">
                                    <span>সকল প্রতিনিধি ব্যস্ত থাকলেও যোগাযোগ করে আপনার প্রয়োজন সম্পর্কে জানান।</span>

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
