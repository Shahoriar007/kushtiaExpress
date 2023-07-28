<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">

    @yield('adminTitle')

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontendAdmin/assets/img/favicon.png') }}">

    <!-- <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/css/bootstrap.min.css') }}"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/css/style.css') }}">
    <!--new add-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontendAdmin/assets/css/jquery.dataTables.css') }}">
    <!--ck editor-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">





</head>

<body>
    <!-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> -->

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left active">
                <a href="index.html" class="logo logo-normal">
                    <img src="{{ asset('frontendAdmin/assets/img/logo.png') }}" alt="">
                </a>
                <a href="index.html" class="logo logo-white">
                    <img src="{{ asset('frontendAdmin/assets/img/logo-white.png') }}" alt="">
                </a>
                <a href="index.html" class="logo-small">
                    <img src="{{ asset('frontendAdmin/assets/img/logo-small.png') }}" alt="">
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>

                    </div>
                </li>


                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="{{ asset('frontendAdmin/assets/img/profiles/avator1.jpg') }}"
                                alt="">
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img
                                        src="{{ asset('frontendAdmin/assets/img/profiles/avator1.jpg') }}" alt="">
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>John Doe</h6>
                                    <h5>Admin</h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My
                                Profile</a>
                            <a class="dropdown-item" href="generalsettings.html"><i class="me-2"
                                    data-feather="settings"></i>Settings</a>
                            <hr class="m-0">


                            <a class="dropdown-item logout pb-0" href="{{ route('logout') }}"
                                src="{{ asset('frontendAdmin/assets/img/icons/log-out.svg') }}" class="me-2" alt="img"

                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Log Out') }}
                            </a>

                            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                @csrf
                            </form>


                        </div>
                    </div>
                </li>
            </ul>


            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="generalsettings.html">Settings</a>
                    <a class="dropdown-item" href="signin.html">Logout</a>
                </div>
            </div>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="{{ route('dashboard') }}"><img src="{{ asset('frontendAdmin/assets/img/icons/dashboard.svg') }}"
                                    alt="img"><span>
                                    Dashboard</span> </a>
                        </li>

                        <li class="submenu">
                            <a href=""><img src="{{ asset('frontendAdmin/assets/img/icons/time.svg') }}"
                                    alt="img"><span>
                                    Accessories</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('accessories.index') }}">All Accessories</a></li>
                                <li><a href="{{ route('accessories.create') }}">Add Accessories</a></li>

                            </ul>
                        </li>

                        <li class="submenu">
                            <a href=""><img src="{{ asset('frontendAdmin/assets/img/icons/time.svg') }}"
                                    alt="img"><span>
                                    Category</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('categoryView') }}"> All Categories </a></li>

                                <li><a href="{{ route('addCategory') }}">Create Category </a></li>

                            </ul>
                        </li>

                        <li class="submenu">
                            <a href=""><img src="{{ asset('frontendAdmin/assets/img/icons/time.svg') }}"
                                    alt="img"><span>
                                     Brand</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('brandView') }}"> All Brands </a></li>

                                <li><a href="{{ route('addBrand') }}">Create Brand </a></li>

                            </ul>
                        </li>

                        <li class="submenu">
                            <a href=""><img src="{{ asset('frontendAdmin/assets/img/icons/time.svg') }}"
                                    alt="img"><span>
                                    Products</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('products.index') }}">All Products</a></li>
                                <li><a href="{{ route('products.create') }}">Add Products</a></li>

                            </ul>
                        </li>

                        <li class="submenu">
                            <a href=""><img src="{{ asset('frontendAdmin/assets/img/icons/time.svg') }}"
                                    alt="img"><span>
                                    Slider CMS</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('sliderView') }}">All Sliders</a></li>
                                <li><a href="{{ route('addSlider') }}">Add Slider</a></li>

                            </ul>
                        </li>

                        <li class="submenu">
                            <a href=""><img src="{{ asset('frontendAdmin/assets/img/icons/time.svg') }}"
                                    alt="img"><span>
                                    Review CMS</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('reviewView') }}">All Reviews</a></li>
                                <li><a href="{{ route('addReview') }}">Add Review</a></li>

                            </ul>
                        </li>



                    </ul>
                </div>
            </div>
        </div>


        @yield('adminContent')

    </div>


    <script src="{{ asset('frontendAdmin/assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('frontendAdmin/assets/js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('frontendAdmin/assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('frontendAdmin/assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/js/script.js') }}"></script>
    <!--new add-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <!-- CK editor -->
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



    @yield('ckeditor')



</body>

</html>
