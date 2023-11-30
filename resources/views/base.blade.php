<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Propulse4U </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Sites meta Data -->
    <meta name="application-name"
          content="Propulse4U - Crypto, BitCoin, Etheruim">
    <meta name="author" content="Propulse4U">
    <meta name="keywords" content="Propulse4U- Propulse4U, Propulse4U, Propulse4U">
    <meta name="description"
          content="">

    <!-- OG meta data -->
    <meta property="og:title"
          content="">
    <meta property="og:site_name" content=Propulse4U>
    <meta property="og:url" content="https://Propulse4U.com/">
    <meta property="og:description"
          content="Welcome to Infinix,">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/images/og.png">

    <link rel="shortcut icon" href="{{asset('images/preview.svg')}}" type="image/x-icon">

    <!--Bootstrap Min Css-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!--Macnific Popup Css-->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!--Owl Carousel min Css-->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!--Owl theme Default Css-->
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
    <!--nice select Css-->
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <!--Glyphter Css-->
    <link rel="stylesheet" href="{{asset('glyphter-font/css/Glyphter.css')}}">
    <!--animation Css-->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!--Fontawsome all min Css-->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <!--Main custom Css-->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- main css for template -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body>
<div class="main-wrapper">
@include('_partials._header')
    @yield('sub_header')
        <div class="page-content">
@yield('content')
        </div>

    </div>
<!--Login Modal Start-->
<div class="modal register__modal" id="signupin" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-6">
                            <div class="modal__left">
                                <img src="assets/img/modal/modal.png" alt="modal">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="modal__right">
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="home-tab1" data-bs-toggle="tab" data-bs-target="#home2" type="button" role="tab" aria-selected="true">Sign Up</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="contact-tab3" data-bs-toggle="tab" data-bs-target="#contact2" type="button" role="tab" aria-selected="false">Sign In</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade " id="home2" role="tabpanel">
                                        <div class="form__tabs__wrap">
                                            <div class="focus__icon">
                                                <p>
                                                    or registration via social media accounts
                                                </p>
                                                <div class="social__head">
                                                    <ul class="social">
                                                        <li>
                                                            <a href="#0">
                                                                <i class="fa-brands fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#0">
                                                                <i class="fab fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#0">
                                                                <i class="fa-brands fa-linkedin-in"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <form action="#0">
                                                <div class="form__grp">
                                                    <label for="emailsign">Email</label>
                                                    <input type="email" id="emailsign" placeholder="Email Your">
                                                </div>
                                                <div class="form__grp">
                                                    <label for="toggle-password3">Password</label>
                                                    <input id="toggle-password3" type="password" placeholder="Your Password">
                                                    <span id="#toggle-password3" class="fa fa-fw fa-eye field-icon toggle-password3"></span>
                                                </div>
                                                <div class="login__signup">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="remem">
                                                        <label class="form-check-label" for="remem">
                                                            Remember me
                                                        </label>
                                                    </div>
                                                    <a href="#0">
                                                        Forgot Password
                                                    </a>
                                                </div>
                                                <div class="create__btn">
                                                    <a href="#0" class="cmn--btn">
                                                        <span>Sign Up</span>
                                                    </a>
                                                </div>
                                                <p>
                                                    Do you have an account? <a href="#0">Registration</a>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="contact2" role="tabpanel">
                                        <div class="form__tabs__wrap">
                                            <div class="focus__icon">
                                                <p>
                                                    or registration via social media accounts
                                                </p>
                                                <div class="social__head">
                                                    <ul class="social">
                                                        <li>
                                                            <a href="#0">
                                                                <i class="fa-brands fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#0">
                                                                <i class="fab fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#0">
                                                                <i class="fa-brands fa-linkedin-in"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <form action="#0">
                                                <div class="form__grp">
                                                    <label for="email34">Email</label>
                                                    <input type="email" id="email34" placeholder="Email Your">
                                                </div>
                                                <div class="form__grp">
                                                    <label for="toggle-password10">Password</label>
                                                    <input id="toggle-password10" type="password" placeholder="Your Password">
                                                    <span id="#toggle-password10" class="fa fa-fw fa-eye field-icon toggle-password10"></span>
                                                </div>
                                                <div class="form__grp">
                                                    <label for="toggle-password9">Confrim</label>
                                                    <input id="toggle-password9" type="password" placeholder="Password">
                                                    <span id="#toggle-password9" class="fa fa-fw fa-eye field-icon toggle-password9"></span>
                                                </div>
                                                <div class="create__btn">
                                                    <a href="#0" class="cmn--btn">
                                                        <span>Sign Up</span>
                                                    </a>
                                                </div>
                                                <p>
                                                    Do you have an account? <a href="#0">Login</a>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Login Modal End-->





<!-- vendor plugins -->
@stack('scripts')
<!--Jquery min js-->
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<!--Bootstrap bundle min js-->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!--Magnific Popup js-->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!--Owl Carousel min js-->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!--nice select min js-->
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<!--Wow min js-->
<script src="{{asset('js/wow.min.js')}}"></script>
<!--jquery ui min-->
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<!--Main js-->
<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
