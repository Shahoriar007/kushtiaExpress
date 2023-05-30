<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      @yield('title')
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontendUser/assets/img/logo/Kushtia express 3d logo.png') }}')}}">
      <!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/preloader.css')}}">
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/meanmenu.css')}}">
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/animate.css')}}">
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/owl-carousel.css')}}">
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/swiper-bundle.css')}}">
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/backtotop.css')}}">
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/nice-select.css')}}">
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/flaticon/flaticon.css')}}">
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/font-awesome-pro.css')}}">
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/default.css')}}">
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/style.css')}}">
      <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/custom.css')}}">
   </head>
   <body>

   @yield('placeholder')

       <!-- back to top start -->
       <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
    </div>
      <!-- back to top end -->
      
    <!-- header-start -->
    <header class="header d-blue-bg">
     
        <div class="header-mid">
            <div class="container">
                <div class="heade-mid-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                            <div class="header__info">
                                <div class="logo">
                                    <a href="index.html" class="logo-image"><img src="{{ asset('frontendUser/assets/img/logo/Kushtia express 3d logo.png') }}"  alt="logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 d-none d-lg-block">
                            <div class="header__search">
                                <form action="#">
                                    <div class="header__search-box">
                                        <input class="search-input" type="text" placeholder="I'm shopping for...">
                                        <button class="button" type="submit"><i class="far fa-search"></i></button>
                                    </div>
                                    <div class="header__search-cat">
                                        <select>
                                            <option>All Categories</option>
                                            <option>Best Seller Products</option>
                                            <option>Top 10 Offers</option>
                                            <option>New Arrivals</option>
                                            <option>Phones &amp; Tablets</option>
                                           
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-3">                        
                        <div class="cat__menu-wrapper side-border d-none d-lg-block">
                            <div class="cat-toggle">
                                <button type="button" class="cat-toggle-btn cat-toggle-btn-1"><i class="fal fa-bars"></i>All Categories</button>
                                <div class="cat__menu">
                                    <nav id="mobile-menu" style="display: block;">
                                        <ul>
                                            <li>
                                                <a href="shop.html">All Categories <i class="far fa-angle-down"></i></a>
                                                <ul class="mega-menu">
                                                    <li><a href="shop.html">Shop Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Standard SHop Page</a></li>
                                                            <li><a href="product-details.html">Shop Right Sidebar</a></li>
                                                            <li><a href="product-details.html">Shop Left Sidebar</a></li>
                                                            <li><a href="product-details.html">Shop 3 Column</a></li>
                                                            <li><a href="product-details.html">Shop 4 Column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Product Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Product Details</a></li>
                                                            <li><a href="product-details.html">Product V2</a></li>
                                                            <li><a href="product-details.html">Product V3</a></li>
                                                            <li><a href="product-details.html">Varriable Product</a></li>
                                                            <li><a href="product-details.html">External Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Other Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">wishlist</a></li>
                                                            <li><a href="product-details.html">Shopping Cart</a></li>
                                                            <li><a href="product-details.html">Checkout</a></li>
                                                            <li><a href="product-details.html">Login</a></li>
                                                            <li><a href="product-details.html">Register</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Catagory 1</a></li>
                                                            <li><a href="product-details.html">Catagory 2</a></li>
                                                            <li><a href="product-details.html">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Catagory 1</a></li>
                                                            <li><a href="product-details.html">Catagory 2</a></li>
                                                            <li><a href="product-details.html">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop.html">Phone and Electronics <i class="far fa-angle-down"></i></a>
                                                <ul class="mega-menu mega-menu-2">
                                                    <li><a href="shop.html">Shop Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Standard SHop Page</a></li>
                                                            <li><a href="product-details.html">Shop Right Sidebar</a></li>
                                                            <li><a href="product-details.html">Shop Left Sidebar</a></li>
                                                            <li><a href="product-details.html">Shop 3 Column</a></li>
                                                            <li><a href="product-details.html">Shop 4 Column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Product Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Product Details</a></li>
                                                            <li><a href="product-details.html">Product V2</a></li>
                                                            <li><a href="product-details.html">Product V3</a></li>
                                                            <li><a href="product-details.html">Varriable Product</a></li>
                                                            <li><a href="product-details.html">External Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Other Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">wishlist</a></li>
                                                            <li><a href="product-details.html">Shopping Cart</a></li>
                                                            <li><a href="product-details.html">Checkout</a></li>
                                                            <li><a href="product-details.html">Login</a></li>
                                                            <li><a href="product-details.html">Register</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Catagory 1</a></li>
                                                            <li><a href="product-details.html">Catagory 2</a></li>
                                                            <li><a href="product-details.html">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Catagory 1</a></li>
                                                            <li><a href="product-details.html">Catagory 2</a></li>
                                                            <li><a href="product-details.html">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop.html">Best Seller Products
                                                    <span class="cat-label">hot!</span>
                                                    <i class="far fa-angle-down"></i>
                                                </a>
                                                <ul class="mega-menu">
                                                    <li><a href="shop.html">Shop Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Standard SHop Page</a></li>
                                                            <li><a href="product-details.html">Shop Right Sidebar</a></li>
                                                            <li><a href="product-details.html">Shop Left Sidebar</a></li>
                                                            <li><a href="product-details.html">Shop 3 Column</a></li>
                                                            <li><a href="product-details.html">Shop 4 Column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Product Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Product Details</a></li>
                                                            <li><a href="product-details.html">Product V2</a></li>
                                                            <li><a href="product-details.html">Product V3</a></li>
                                                            <li><a href="product-details.html">Varriable Product</a></li>
                                                            <li><a href="product-details.html">External Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Other Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">wishlist</a></li>
                                                            <li><a href="product-details.html">Shopping Cart</a></li>
                                                            <li><a href="product-details.html">Checkout</a></li>
                                                            <li><a href="product-details.html">Login</a></li>
                                                            <li><a href="product-details.html">Register</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Catagory 1</a></li>
                                                            <li><a href="product-details.html">Catagory 2</a></li>
                                                            <li><a href="product-details.html">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Phone &amp; Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="product-details.html">Catagory 1</a></li>
                                                            <li><a href="product-details.html">Catagory 2</a></li>
                                                            <li><a href="product-details.html">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop.html">Top 10 Offers
                                                    <span class="cat-label green">new!</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop.html">New Arrivals <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="shop.html">Home Appliances</a></li>
                                                    <li><a href="shop.html">Technology</a>
                                                        <ul class="submenu">
                                                            <li><a href="shop.html">Storage Devices</a></li>
                                                            <li><a href="shop.html">Monitors</a></li>
                                                            <li><a href="shop.html">Laptops</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Office Equipments</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.html">TV &amp; Audio</a></li>
                                            <li><a href="shop.html">Electronics &amp; Digital</a></li>
                                            <li class="d-laptop-none"><a href="shop.html">Fashion &amp; Clothings</a></li>
                                            <li class="d-laptop-none"><a href="shop.html">Jewelry &amp; Watches</a></li>
                                            <li><a href="shop.html">Health &amp; Beauty</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12">
                      <div class="header__bottom-left d-flex d-xl-block align-items-center">
                        <div class="side-menu d-lg-none mr-20">
                          <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                        </div>
                        <div class="main-menu text-center d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ route('homepage') }}" class="active">Home </i></a>
                                    </li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>                                   
                                </ul>
                            </nav>
                        </div>
                      </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

   @yield('content')

       <!-- footer-start -->
       <footer>
        <div class="fotter-area d-dark-bg">
            <div class="footer__top pt-80 pb-15">
                <div class="container">
                    <div class="row"> 
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
                            <div class="footer__widget">
                                <div class="footer__widget-title mb-20">
                                    <h4>About The Store</h4>
                                </div>
                                <div class="footer__widget-content">
                                    <p class="footer-text mb-35">Our mission statement is to provide the absolute best customer experience available in the Electronic industry without exception.</p>
                                    <div class="footer__hotline d-flex align-items-center mb-10">
                                        <div class="icon mr-15">
                                            <i class="fal fa-headset"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Got Question? Call us 24/7!</h4>
                                            <span><a href="tel:100-123-456-7890">+8801756382826</a></span>
                                        </div>
                                    </div>
                                    <div class="footer__info">
                                        <ul>
                                            <li>
                                                <span>Add:  <a target="_blank" href="https://goo.gl/maps/c82DDZ8ALvL878Bv8">Walls Street 68, Mahattan, Kustia</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="footer__widget">
                                <div class="footer__widget-title">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__link">
                                        <ul>
                                            <li><a href="about.html">ABOUT US</a></li>
                                            <li><a href="shop.html">PRODUCTS</a></li>
                                            <li><a href="contact.html">CONTACT US</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                               </div>

                               
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                <div class="cta-item cta-item-d mb-30">
                                    <h5 class="cta-title">Follow Us</h5>
                                    <p>We make consolidating, marketing and tracking your social media website easy.</p>
                                    <div class="cta-social">
                                        <div class="social-icon">
                                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                                            <a href="#" class="linkedin"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                   
                    </div>
                </div>
            </div>
          
        </div>
    </footer>
    <!-- footer-end -->

   <script src="{{ ('frontendUser/assets/js/vendor/jquery.js')}}"></script>    
      <script src="{{ ('frontendUser/assets/js/vendor/waypoints.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/bootstrap-bundle.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/meanmenu.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/swiper-bundle.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/tweenmax.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/owl-carousel.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/magnific-popup.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/parallax.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/backtotop.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/nice-select.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/countdown.min.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/counterup.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/wow.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/isotope-pkgd.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/imagesloaded-pkgd.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/ajax-form.js')}}"></script>
      <script src="{{ ('frontendUser/assets/js/main.js')}}"></script>
     
   </body>
</html>