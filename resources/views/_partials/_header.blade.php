<!--Header Here-->
<header class="header-section">
    <div class="container-fluid p-0">
        <div class="header-wrapper">
            <div class="menu__left__wrap">
                <div class="logo-menu px-2">
                    <a href="{{route('home')}}" class="logo">
                        <img src="{{asset('images/logo.png')}}" alt="logo">
                    </a>
                </div>
                <div class="lang d-flex align-items-center px-2">
                    <div class="language__wrap">
                        <div class="flag">
                            <img src="{{asset('img/header/uk.png')}}" alt="flag">
                        </div>
                        <select name="flag" id="flag-img1">
                            <option value="1">
                                En
                            </option>
                            <option value="1">
                                Cy
                            </option>
                            <option value="1">
                                Et
                            </option>
                        </select>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <ul class="main-menu">
                    <li>
                        <a href="{{route('home')}}">
                            <span>Live</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('sportbetting')}}">
                            <span>Sports Betting</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('casino')}}">
                            <span>Casino</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('sportbetting')}}">
                            <span>Lucky Drops</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('casino')}}">
                            <span>Live Casino</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('promotions')}}">
                            <span>Promotions</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('standings')}}">
                            <span>standings</span>
                        </a>
                    </li>
                    <li class="cmn-grp">
                            <span class="cmn--btn" data-bs-toggle="modal" data-bs-target="#signup">
                                <span class="rela">Sign In</span>
                            </span>
                        <span class="cmn--btn2" data-bs-toggle="modal" data-bs-target="#signup">
                                <span class="rela">Sign Up</span>
                            </span>
                    </li>
                </ul>
            </div>
            <div class="mneu-btn-grp">
                <div class="language__wrap">
                    <div class="flag">
                        <img src="{{asset('img/header/uk.png')}}" alt="flag">
                    </div>
                    <select name="flag" id="flag-img2">
                        <option value="1">
                            En
                        </option>
                        <option value="1">
                            Cy
                        </option>
                        <option value="1">
                            Et
                        </option>
                    </select>
                </div>
                <a href="#0" class="cmn--btn" data-bs-toggle="modal" data-bs-target="#signupin">
                    <span>Sign In</span>
                </a>
                <a href="#0" class="cmn--btn2" data-bs-toggle="modal" data-bs-target="#signupin">
                    <span class="rela">Sign Up</span>
                </a>
            </div>
        </div>
    </div>
</header>
<!--Header End-->
