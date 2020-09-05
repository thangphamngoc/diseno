<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/master.min.css')}}">
	<title> master</title>
</head>
<body>
	<div class="site">
        <div class="wrapper-fluid wrapper-navbar desktop-nav">
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <!-- Logo (flex item 1)-->
                    <div class="logo">
                        <a href="http://127.0.0.1:8000/">
                            <img src="https://www.saota.com/wp-content/uploads/2017/10/saota-logo-white.png" alt="SAOTA Architecture &amp; Design">
                        </a>
                    </div>

                    <!-- Navigation Menu (flex item 2)-->
                    <div id="navbarNavDropdown" class="collapse navbar-collapse">
                        <ul id="main-menu" class="navbar-nav">
                            <li>
                                <a href="/#/home">Home</a>
                                <ul class="sub-menu dl-submenu"">
                                    <li><a href="https://www.saota.com/all-projects/public/">Public</a></li>
                                    <li><a href="https://www.saota.com/all-projects/">All Projects</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/#/projects">Projects</a>
                                <!-- <ul class="sub-menu dl-submenu"">
                                    <li><a href="https://www.saota.com/all-projects/public/">Public</a></li>
                                    <li><a href="https://www.saota.com/all-projects/">All Projects</a></li>
                                </ul> -->
                            </li>
                            <li>
                                <a href="/#/about">About</a>
                                <!-- <ul class="sub-menu dl-submenu"">
                                    <li><a href="">Profile</a></li>
                                </ul> -->
                            </li>
                            <li><a href="/#/news" aria-current="page">News</a></li>
                            <li><a href="/#/contact">Contact</a></li>
                        </ul>
                    </div>
                    <!--Social Media & Search (flex item 3)-->
                    <div class="social-media-and-search-cont">
                        <div class="social-media">
                            <a href="https://www.facebook.com/pages/SAOTA-Stefan-Antoni-Olmesdahl-Truen-Architects/158867007525510" target="_blank">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="https://twitter.com/_saota" target="_blank">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.pinterest.com/saota/" target="_blank">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com/_saota/" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>

                        <div class="input-group input-group-sm">
                            <input type="search" placeholder="Search" aria-label="Search" class="form-control form-control-navbar">
                                <div class="input-group-append">
                                    <a href="#" class="btn btn-navbar">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            <!-- .container -->
            </nav>
        <!-- .site-navigation -->
        </div>
        <div class="header-bar-and-mobile-dropdown">
            <div class="mobile-header-bar">
                <div class="container">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="https://www.saota.com">
                            <img src="https://www.saota.com/wp-content/uploads/2017/10/saota-logo-white.png" alt="SAOTA Architecture &amp; Design">
                        </a>
                    </div>

                    <!--Mobile search-->
                    <div class="mobile-search-cont">
                        <i class="fa fa-search" id="mobileMagnifyingGlass" onclick="toggleFunction()"></i>

                        <!--Mobile search box-->
                        <div class="mobile-search-box clearfix" id="mobileSearchBox">
                            <div class="container">
                                <form method="get" id="searchform" action="https://www.saota.com/" role="search">
                                    <div class="input-group">
                                        <input class="field form-control" id="s" name="s" type="text" placeholder="Search …">
                                        <span class="input-group-btn">
                                            <input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit" value="Search">
                                        </span>
                                    </div>
                                </form>
                                <div class="close-mobile-form" id="closeMobileCross">
                                    <img onclick="closeFunction()" src="https://www.saota.com/wp-content/themes/saota/img/cross-mobile-search.png" alt="Close Button">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--icon toggle-->
                    <div class="icon-toggle"  onclick="iconOpen()">
                        <i class="fa fa-bars"></i>
                        <i class="fa fa-times icon_active"></i>
                    </div>

                </div>
                <!-- .container -->
            </div>
            <!-- .wrapper-navbar end -->
            <!--Mobile Dropdown Navigation-->
            <nav class="mobile-navigation" id="iconOpen" onclick="backgroundFc()">
                <div id="dl-menu" class="dl-menuwrapper">
                    <ul id="main-menu-mobile" class="dl-menu dl-menuopen">
                        <li class="menu_mb">
                            <div class="sub_div">
                                <a href="">Projects</a>
                                <i class="fa fa-chevron-down" onclick="menutgmb()"></i>
                            </div>
                            <ul id="menuSub" class="menu_tg_mb">
                                <li><a href="">Hospitality</a></li>
                            </ul>
                        </li>
                        <li><a href="/about">About</a></li>
                        <li><a href="">Projects</a></li>
                        <li><a href="">Projects</a></li>
                        <li><a href="">Projects</a></li>

                    </ul>
                </div>
                <!--Social Media & Search -->
                <div class="container social-media-and-search-cont">
                    <div class="social-media">
                        <a href="#" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="app">
            <router-view></router-view>
        </div>
        <footer class="site-footer" id="footer-home">
            <div class="container">
                <div class="row">
                    <div class="col-12 clearfix">
                        <div class="copyright">
                             © 2020 Thangpn.
                             <span>All Rights Reserved.</span>
                        </div>
                        <div class="affiliates">
                            <span> <a href="#" target="_blank">Liên kết</a></span>
                            <span> <a href="#" target="_blank">Back link</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/master.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="{{asset('js/light-carousel.js')}}"></script>
    <script src="{{asset('js/detail-slider.js')}}"></script>

    
    <!-- <script src="js/jssor.slider-28.0.0.min.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>