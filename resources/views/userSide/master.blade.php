<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title')
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        window.csrfToken = "{{ csrf_token() }}";
    </script>
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('frontendUser/assets/img/logo/Kushtia express 3d logo.png') }}')}}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/backtotop.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendUser/assets/css/custom.css') }}">

    <style>
        .custom-pagination {
            text-align: center;
        }

        .custom-pagination .pagination {
            display: inline-block;
        }

        .shadow-sm {
            display: none;
        }


        .sm-content p {
            padding-bottom: 10px;
            /* Adjust the value as needed */
        }


        #searchResultsContainer.scrollable {
            max-height: 200px;
            /* Adjust the maximum height as needed */
            overflow-y: auto;
        }


        .search-results-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .search-results-list li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .search-results-list li a {
            text-decoration: none;
            color: #333;
            display: block;
        }

        .search-results-list li:hover {
            background-color: #f5f5f5;
        }
    </style>

</head>

<body>

    {{-- @yield('placeholder') --}}


    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header-start -->
    <header class="header ">

        <div class="header-mid">
            <div class="container">
                <div class="heade-mid-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                            <div class="header__info">
                                <div class="logo">
                                    <a href="{{ route('homepage') }}" class="logo-image"><img
                                            src="{{ asset('frontendUser/assets/img/logo/logoV2.png') }}"
                                            alt="logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 d-none d-lg-block">
                            <div class="header__search">
                                <form id="searchForm" action="#">
                                    <div class="header__search-box">
                                        <input class="search-input" type="text" id="searchInput"
                                            placeholder="I'm shopping for...">
                                        <button class="button" type="submit"><i class="far fa-search"></i></button>
                                    </div>

                                </form>
                                <div id="searchResultsContainer">
                                </div>

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
                                <button type="button" class="cat-toggle-btn cat-toggle-btn-1"><i
                                        class="fal fa-bars"></i>All Categories</button>
                                <div class="cat__menu">
                                    <nav id="mobile-menu" style="display: block;">
                                        <ul>
                                            <li>
                                                <a href="{{ route('accessory') }}">Accessories </a>

                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Products <i
                                                        class="far fa-angle-down"></i></a>
                                                <ul class="mega-menu mega-menu-2">
                                                    <li><a href="#">Categories</a>
                                                        <ul class="mega-item">
                                                            @foreach ($categories as $item)
                                                                <li><a
                                                                        href="{{ route('category', ['id' => $item->id]) }}">{{ $item->categoryName }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>

                                                    <li><a href="#">Brands</a>
                                                        <ul class="mega-item">
                                                            @foreach ($brands as $item)
                                                                <li><a
                                                                        href="{{ route('brand', ['id' => $item->id]) }}">{{ $item->brandName }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('newArrivals') }}">New Arrivals
                                                    <span class="cat-label">hot!</span>
                                                    <i class="far fa-angle-down"></i>
                                                </a>

                                            </li>
                                            <li>
                                                <a href="{{ route('preOwned') }}">Pre Owned Products
                                                    <i class="far fa-angle-down"></i>
                                                </a>

                                            </li>

                                            <li>
                                                <a href="{{ route('topFeatured') }}">Top Featured Products
                                                    <i class="far fa-angle-down"></i>
                                                </a>

                                            </li>



                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="header__bottom-left d-flex d-xl-block align-items-center">
                            <div class="side-menu d-lg-none mr-20">
                                <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i
                                        class="fas fa-bars"></i></button>
                            </div>
                            <div class="main-menu text-center d-none d-lg-block">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="{{ route('homepage') }}"
                                                class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}"
                                                class="{{ request()->is('shop*') ? 'active' : '' }}">Products</a>
                                        </li>
                                        <li><a href="{{ route('accessory') }}"
                                                class="{{ request()->is('accessory*') ? 'active' : '' }}">Accessories</a>
                                        </li>
                                        <li><a href="{{ route('aboutus') }}"
                                                class="{{ request()->is('about*') ? 'active' : '' }}">About Us</a>
                                        </li>
                                        <li><a href="{{ route('contactus') }}"
                                                class="{{ request()->is('contact*') ? 'active' : '' }}">Contact Us</a>
                                        </li>
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
                                    <p class="footer-text mb-35">EXCHANGER provide Best Quality SmartPhones In
                                        Bangladesh. Join Our Facebook Page and Group For Regular Update. We Are In
                                        Kushtia City and Giving Service All Over Bangladesh. EXCHANGER Let's Make a
                                        Perfect Deal!</p>
                                    <div class="footer__hotline d-flex align-items-center mb-10">
                                        <div class="icon mr-15">
                                            <i class="fal fa-headset"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Got Question ? Call Us 10am To 10pm</h4>
                                            <span><a href="tel:+8801911550555">+8801911550555</a></span>
                                        </div>
                                    </div>
                                    <div class="footer__info">
                                        <ul>
                                            <li>
                                                <span>Address: <a target="_blank" href=""> Chowdhury Market,
                                                        Mojompur , Kushtia.</a></span>
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
                                            <li><a href="{{ route('shop') }}">PRODUCTS</a></li>
                                            <li><a href="{{ route('accessory') }}">ACCESSORIES</a></li>
                                            <li><a href="{{ route('aboutus') }}">ABOUT US</a></li>

                                            <li><a href="{{ route('contactus') }}">CONTACT US</a></li>
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
                                        <a href="https://www.facebook.com/exchanger.com.bd?mibextid=ZbWKwL"
                                            class="facebook"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://youtube.com/@EXCHANGER-BD?si=76y_q3IUhZzDaQ7A"
                                            class="youtube"><i class="fab fa-youtube"></i></a>
                                        <a href="https://instagram.com/exchanger.com.bd?igshid=NTc4MTIwNjQ2YQ=="
                                            class="instagram"><i class="fab fa-instagram"></i></a>
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
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>

    <script src="{{ 'frontendUser/assets/js/vendor/jquery.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/vendor/waypoints.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/bootstrap-bundle.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/meanmenu.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/swiper-bundle.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/tweenmax.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/owl-carousel.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/magnific-popup.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/parallax.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/backtotop.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/nice-select.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/countdown.min.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/counterup.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/wow.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/isotope-pkgd.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/imagesloaded-pkgd.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/ajax-form.js' }}"></script>
    <script src="{{ 'frontendUser/assets/js/main.js' }}"></script>

    <script>
        $(document).ready(function() {
            // Handle form submission
            $("#searchForm").submit(function(e) {
                e.preventDefault(); // Prevent the default form submission
                liveSearch();
            });

            // Handle input changes for live search
            $("#searchInput").on("input", liveSearch);

            function liveSearch() {
                var searchTerm = $("#searchInput").val();

                // Perform AJAX request to the server-side script for searching
                $.ajax({
                    url: "/search", // Replace with your server-side script
                    method: "POST", // Change to "GET" if your server-side script expects GET requests
                    data: {
                        searchTerm: searchTerm,
                        _token: csrfToken
                    },
                    success: function(data) {
                        // Update the search results container with the response from the server
                        displaySearchResults(data.results);
                    },
                    error: function(error) {
                        console.error("Error fetching search results:", error);
                    }
                });
            }

            function displaySearchResults(results) {
                // Get the container where you want to display the results
                var resultsContainer = $("#searchResultsContainer");

                // Clear the previous results
                resultsContainer.empty();

                // Check if there are results to display
                if (results.length > 0) {
                    // Create an unordered list with a class for styling
                    var resultList = $("<ul class='search-results-list'>");

                    // Loop through the results and append them to the list
                    results.forEach(function(result) {
                        // Create a list item with a link to the details page
                        var listItem = $("<li>").append(
                            $("<a>").attr("href", "/product/details/" + result.id).text(result.name)
                        );

                        // Append the list item to the list
                        resultList.append(listItem);
                    });

                    // Append the list to the results container
                    resultsContainer.append(resultList);

                    // Add a class to the container to enable scrolling
                    resultsContainer.addClass('scrollable');

                    // Set a higher z-index for the results container
                    resultsContainer.css({
                        'z-index': 1000, // Adjust the value as needed
                        'position': 'absolute', // Set the position property
                        'width': '600px',
                        'background-color': 'white'
                    });
                }
            }



        });
    </script>


</body>

</html>
