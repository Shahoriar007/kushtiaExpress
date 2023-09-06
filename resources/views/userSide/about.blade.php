@extends('userSide.master')

@section('title')
<title>About</title>
@endsection

@section('content')

<main>
        <!-- page-banner-area-start -->
        <div class="page-banner-area page-banner-height" data-background="assets/img/banner/page-banner-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-banner-content text-center">
                            <h3>About Us</h3>
                            <p style="line-height: 1.6; color:black">
                                EXCHANGER BD মূলত নতুন ও ব্যবহৃত স্মার্টফোন কেনাবেচা ও এক্সচেঞ্জ করে থাকে। এছাড়াও যেকোনো ব্র্যান্ডের প্রিওনড বাইক ও ল্যাপটপও আমাদের কাছে কিনতে অথবা বিক্রি করতে পারবেন । আমরা আমাদের কাস্টমারকে তাদের বাজেটের কথা মাথায় রেখে সর্বোচ্চ ফ্রেশ প্রোডাক্ট দেওয়ার চেষ্টা করি। তাছাড়া যেকোনো নতুন ও ব্যবহৃত ফোন  প্রি-অর্ডার নেওয়ার মাধ্যমে নির্দিষ্ট সময়ের মধ্যে কালেক্ট করে দিই। আর বিক্রির ক্ষেত্রে খুব সহজেই কাস্টমার তার ফোনটি আমাদের শোরুমে সরাসরি নিয়ে এসে অথবা whatsapp এর মাধ্যমে যোগাযোগ করে বিক্রি করতে পারবে।
                            </p>
                            {{-- <div class="page-bottom-btn mt-55">
                                <a href="shop.html" class="st-btn-4">Discover now</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-banner-area-end -->

        <!-- about-area-start -->
        <div class="about-area pt-80 pb-80" data-background="assets/img/bg/about-bg.png">
            <div class="container">
                <div class="row align-items-center">
                   <div class="col-xl-6 col-lg-6">
                       <div class="about-content">

                           <h4>ঠিকানা</h4>

                           <p class="about-text" style="line-height: 1.7;">
                            আমাদের শোরুম বাংলাদেশের খুলনা বিভাগের কুষ্টিয়া জেলায় অবস্থিত।
কুষ্টিয়া সদরের প্রধান কেন্দ্র মজমপুরের চৌধুরী মার্কেটের দ্বিতীয় তলায় ২০২২ থেকে কার্যক্রম অনুষ্ঠিত হচ্ছে। সহজে খুঁজতে হলে কুষ্টিয়া পৌরসভার সামনে দাঁড়ালে আমাদের শোরুম দৃশ্যমান হয় তাছাড়া গুগলে EXCHANGER BD দিয়ে সার্চ করলে আমাদের শোরুমের লাইভ লোকেশন দেখিয়ে দেবে |
                           </p>
                       </div>
                   </div>
                   <div class="col-xl-6 col-lg-6">
                        <div class="about-image w-img">
                            <img src="{{ asset('frontendUser/assets/img/about/about-b.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area-end -->

        <!-- services-area-start -->
        <div class="services-area pt-70 light-bg-s pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="abs-section-title text-center">
                            <span>উদ্দেশ্যে</span>

                            <p style="line-height: 1.6;">
                                আমাদের মূল উদ্দেশ্য হলো কাস্টমারের সেবা প্রদান করা। আপনার কষ্টের অর্জিত টাকা দিয়ে আপনি কোন প্রোডাক্ট কিনে যাতে প্রতারিত না হন এই কথা মাথায় রেখে আমরা আমাদের সেবা প্রদান করি। তবে ভুল ত্রুটি হলে অবশ্যই ক্ষমার দৃষ্টিতে দেখবেন। আমরা আপনাদের বিশ্বস্ততা ও সুনাম অর্জনের লক্ষ্যে আমাদের সেবা প্রদান করে যাব ইনশাআল্লাহ।
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-40">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-item mb-30">
                            <div class="services-icon mb-25">
                                <i class="fal fa-share-square"></i>
                            </div>
                            <h6>সেবা সমূহ</h6>
                            <p style="line-height: 1.8;">
                                আমাদের কাছে যে কোন নতুন অথবা ব্যবহৃত স্মার্ট ফোন কিনলে পাবেন ৭ দিনের রিপ্লেসমেন্ট সহ এক বছরের সার্ভিস ওয়ারেন্টি। তবে যে কোন ফোন কেনার সময় অবশ্যই ফোনের ডিসপ্লে নিজে চেক করে নিবেন কোন ফোনের ডিসপ্লের জন্য সার্ভিস ওয়ারেন্টি প্রদান করা হয় না । আমাদের কাছে সকল ফ্লাগশিপ ফোন অথবা মিড বাজেট ও লো বাজেটের স্মার্টফোন পাবেন একদম ফ্রেশ কন্ডিশনের যা পূর্বে কখনো সার্ভিসিং করা হয়নি এবং সম্পূর্ণ ত্রুটিমুক্ত।
                            </p>
                            <div class="s-count-number">
                                <span>01</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-item mb-30">
                            <div class="services-icon mb-25">
                                <i class="fal fa-thumbs-up"></i>
                            </div>
                            <h6>শর্ত সমূহ</h6>
                            <p style="line-height: 1.8;">
                                আমাদের কাছে কোন ফোন বিক্রির জন্য অবশ্যই ফোনের কন্ডিশন ফ্রেশ হতে হবে । কোন প্রকার সার্ভিস করা ফোন আমরা গ্রহণ করি না। অবশ্যই বক্স থাকতে হবে । কোন প্রকার সমস্যা অথবা চোরাই ফোন আমাদের কাছে নিয়ে আসলে আইনত ব্যবস্থা নেয়া হবে।
                            </p>
                            <div class="s-count-number">
                                <span>02</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-item mb-30">
                            <div class="services-icon mb-25">
                                <i class="fal fa-file"></i>
                            </div>
                            <h6>কুষ্টিয়ার বাইরে সেবা সমূহ</h6>
                            <p style="line-height: 1.8;">
                                আপনি যদি কুষ্টিয়ার বাইরে থেকে হয়ে থাকেন তাতেও কোন সমস্যা নেই। কেনার ক্ষেত্রে আপনি (এস এ পরিবহন) কুরিয়ারে কন্ডিশনের মাধ্যমে নিতে পারবেন । সেই ক্ষেত্রে প্রোডাক্টটি আপনার জেলায় পৌঁছানোর পর আপনি বক্স ওপেন করে ফোনটি সম্পূর্ণ চেক করে তারপর পেমেন্ট করতে পারবেন । বিক্রির ক্ষেত্রেও ঠিক এমন ভাবে আপনার ফোনটি (এস এ পরিবহন) কুরিয়ারে কন্ডিশনের মাধ্যমে আসবে আমরা চেক করে পেমেন্ট করব।
                            </p>
                            <div class="s-count-number">
                                <span>03</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- services-area-end -->



    </main>

@endsection
