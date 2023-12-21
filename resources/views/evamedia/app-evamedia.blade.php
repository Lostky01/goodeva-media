<!DOCTYPE html>
<?php
$baseurl = 'https://dev.goodeva.co.id/';
?>

<html lang="en">

<head>

    <title>Evamedia | @yield('title')</title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> --}}

    {{-- <meta name="description" content="@yield('meta_desc')">
		<meta name="keyword" content="@yield('meta_key')">
		<meta name="author" content="@yield('meta_auth')"> --}}

    <link rel="icon" href="{{ $baseurl }}public/img/assets/gdv-icon.png" type="image/x-icon">

    <link rel="shortcut icon" href="{{ $baseurl }}public/img/assets/gdv-icon.png" type="image/x-icon">



    @yield('css_before')

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <link
        href='https://fonts.googleapis.com/css?family=Raleway:400,500,400italic,300,300italic,500italic,600,600italic,700,700italic,900'
        rel='stylesheet' type='text/css'>
    <link href="https://fonts.cdnfonts.com/css/georgia" rel="stylesheet" type="text/css">
    {{--  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic' rel='stylesheet'

                type='text/css'> --}}

    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic' rel='stylesheet'
        type='text/css'>

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="{{ $baseurl }}public/fonts/style.css" rel="stylesheet" type="text/css" />

    <link href='{{ $baseurl }}public/fonts/font-awesome.min.css' rel='stylesheet' type='text/css'>



    <!-- components -->

    <link href="{{ $baseurl }}public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ $baseurl }}public/css/owl.carousel.css" rel="stylesheet" type="text/css" />

    <link href="{{ $baseurl }}public/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />



    <link href="{{ $baseurl }}public/css/main-front.css?v=1.23" rel="stylesheet" type="text/css" />

    <link href="{{ $baseurl }}public/css/style-custom.css?v=2.42" rel="stylesheet" type="text/css" />

    <link href="{{ $baseurl }}public/css/style.css?v=1.75" rel="stylesheet" type="text/css" />

    <link href="{{ $baseurl }}public/css/bootstrap-add.css?v=1.1" rel="stylesheet" type="text/css" />

    <link href="{{ $baseurl }}public/css/style-mobile.css?v=3.38" rel="stylesheet" type="text/css" />

    {{-- Effect Fade Scrolling --}}

    <link rel="stylesheet" href="{{ $baseurl }}public/css/smooth-scroll.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140427921-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-140427921-1');
    </script>

    <style>
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        div,
        a,
        strong,
        li,
        ol {
            font-family: 'Roboto', sans-serif;
        }


        #post_data img.img-list-article,
        img.img-list-article {
            width: 217px !important;
            height: 158px;
            object-fit: cover;
            border-radius: 5px
        }

        .side-img {
            height: 95px;
            object-fit: cover;
            border-radius: 4px
        }

        .bg-menu-grey {
            background: #f5f5f5 !important;
        }

        .btn-hubungi {
            color: #26A7B5;
            border: 1px solid #D1D1D1;
            border-radius: 7px;
            padding: 0 45px;
            text-transform: none;
            background: #ffffff;
            line-height: 35px;
        }

        .btn-hubungi a {
            color: #26A7B5;
        }

        .btn-hubungi:hover {
            background: #fbfbfb !important;
            color: #26A7B5 !important;
        }

        .btn-visit {
            color: #ffffff;
            border: 1px solid #D1D1D1;
            border-radius: 7px;
            padding: 0 45px;
            text-transform: none;
            background: #26A7B5;
            line-height: 35px;
        }

        .btn-visit:hover {
            background: #238792 !important;
            color: #ffffff !important;
        }

        .btn-load-more {
            color: #ffffff;
            border-radius: 7px;
            padding: 0 20px;
            text-transform: none;
            background: #26A7B5;
        }

        .btn-load-more:hover {
            background: #238792 !important;
            color: #ffffff !important;
        }

        .header .navbar .toggle-button {
            float: left;
        }

        .l-burger-new {
            left: 20px;
        }


        .mr-15px {

            margin-right: 15px;

        }

        .ptop--30 {
            padding-top: 30px;
        }

        .pbottom--20 {
            padding-bottom: 20px;
        }

        .b-radius10px {
            border-radius: 10px !important;
        }

        .pb-4rem {
            padding-bottom: 4rem !important;
        }

        .mt-4rem {
            margin-top: 4rem !important;
        }

        .mb-6rem {
            margin-bottom: 6rem !important;
        }

        .pt-6rem {
            padding-top: 6rem !important;
        }

        .pb-6rem {
            padding-bottom: 6rem !important;
        }

        .logo-evamedia {
            float: left !important;
        }

        .menu-evamedia {
            margin-left: 22px !important;
        }

        @media(max-width:767px) {

            #post_data img.img-list-article,
            img.img-list-article {
                width: 217px !important;
                height: 80px;
                object-fit: cover;
                border-radius: 5px;
            }

            .btn-hubungi {

                padding: 2px 45px !important;

            }


            .btn-visit {

                padding: 2px 45px !important;

            }

            .side-img {
                width: 217px !important;
                height: 80px !important;
            }

            .mt-sm-0 {
                margin-top: 0 !important;
            }

            .pl-sm-1 {
                padding-left: 1rem !important;
            }

            .mb-sm-0 {
                margin-bottom: 0 !important;
            }

            .logo-evamedia {
                float: none !important;
                margin-left: 3rem
            }

            .menu-evamedia {
                margin-left: 0rem !important;
            }

            .header .navbar.navbar-default .navbar-collapse .right-nav-block .navbar-nav li {
                float: right !important;
                display: flex;
            }

            .header .navbar .right-nav-block.pull-right .navbar-nav>li>a {
                padding: 0px 5px 0px !important
            }
        }

        @media(min-width:767px) and (max-width:992px) {
            .footer-tablet:nth-child(1) {
                order: 2;
            }

            .footer .desktop-show .row {
                display: flex;
                flex-wrap: wrap;
            }

            .footer-tablet:nth-child(2) {
                order: 1;
            }

            .part-footer:nth-child(1) {
                order: 2;
            }

            .part-footer:nth-child(2)>div {
                margin-bottom: 3rem !important;
                margin-top: .5rem !important;
            }


            .part-footer:nth-child(2) {
                order: 1;
            }

            .footer .footer-tablet:nth-child(1) {
                text-align: center;
            }

            .footer-navigation {
                margin-top: 30px;
            }

            .footer .footer-nav {
                padding-bottom: 20px;
            }
        }

        @media(max-width:767px) {
            .btn btn-visit {
                height: 40px;
                width: 200px;
            }

            .btn btn-hubungi {
                height: 40px;
                width: 200px;
            }

            .footer-tablet:nth-child(1) {
                order: 2;
            }

            .footer .desktop-show .row {
                display: flex;
                flex-wrap: wrap;
            }

            .footer-tablet:nth-child(2) {
                order: 1;
            }

            .part-footer:nth-child(1) {
                order: 2;
            }

            .part-footer:nth-child(2)>div {
                margin-bottom: 3rem !important;
                margin-top: .5rem !important;
            }


            .part-footer:nth-child(2) {
                order: 1;
            }

            .footer .footer-tablet:nth-child(1) {
                text-align: center;
            }

            .footer-navigation {
                margin-top: 20px;
            }

            .footer .footer-nav {
                padding-bottom: 20px;
            }
        }

        .bg-blue-header {
            background: #192535;
        }

        .bg-cyan-header {
            background: #068391;
        }

        .bg-purple-header {
            background: #33344A;
        }

        #infocard_slider .slick-active {
            opacity: 1 !important;
        }

        #infocard_slider .slick-slide {
            opacity: 0.6;
        }



        .header .navbar.navbar-default.navbar-scrolling .navbar-nav>li:hover>a>i,
        .header .navbar .navbar-nav>li:hover a,
        .header .navbar .navbar-nav>li:hover a>i {

            color: #63A6B3 !important;

        }

        .text-black {
            color: #000000 !important
        }

        .wrap-inside-nav .inside-col .inside-nav li {

            width: 100%;

        }

        .wrap-inside-nav-mobile .inside-nav li {

            width: 100%;

        }



        .header .navbar {

            /* Ini buat ada effectnya */

            /* padding-top: 20px;

                padding-bottom: 15px; */

            padding-top: 15px;

            padding-bottom: 6px;

            background: #f5f5f5
        }



        .header .navbar .navbar-nav>li>a {

            font-family: 'Roboto', sans-serif;

            color: #808080;

            font-weight: 400;

            font-size: 16px;

            margin: 0 11px;

            text-transform: uppercase
        }

        .header .navbar .right-nav-block.pull-right .navbar-nav>li>a {
            padding: 5px 5px 9px;
        }



        .footer .footer-social .footer-title {
            font-family: 'Inter', sans-serif
        }

        #nav {

            /* -webkit-box-shadow: none !important; */

        }



        .header .navbar .navbar-nav>.current>a {

            color: #1D1D1D;

            font-weight: 600;

        }



        .wrap-inside-nav .inside-col .inside-nav li a>div span:nth-child(2) {

            margin-top: -9px;

            /* margin-bottom: 12px; */

            display: block;

        }

        .wrap-inside-nav-mobile .inside-nav li a>div span:nth-child(2) {
            margin-top: 10px;
            display: block;
        }



        .wrap-inside-nav .inside-col .inside-nav li a,
        .wrap-inside-nav-mobile .inside-nav li a {

            padding-bottom: 12px;

        }



        .wrap-inside-nav .inside-col .inside-nav li a:hover {

            padding-bottom: 12px;

        }

        .wrap-inside-nav .inside-col .inside-nav li a>div span:nth-child(2) {

            margin-top: -9px;

            /* margin-bottom: 12px; */

            display: block;

        }



        .wrap-inside-nav .inside-col .inside-nav li a,
        .wrap-inside-nav-mobile .inside-nav li a {

            padding-bottom: 12px;

        }



        .wrap-inside-nav .inside-col .inside-nav li a:hover {

            padding-bottom: 12px;

        }



        .fa-chevron-down {

            font-size: 11px;

            /* color: #535161;

                margin-left: 3px; */

            font-size: 11px;

            color: #666477;

            margin-left: 3px;

            position: absolute;

            top: 14.5px;

            right: -13px;

        }



        .header.scrolling-header .navbar.navbar-default.navbar-scrolling,
        .header.scrolling-header .navbar.navbar-default.navbar-scrolling-fixing {

            padding-bottom: 6px;

            box-shadow: 0 3px 5px 0 rgb(0 0 0 / 13%) !important;

        }

        .header .navbar {
            box-shadow: 0 3px 5px 0 rgb(0 0 0 / 13%) !important;
        }




        /* Footer */

        .footer p {

            letter-spacing: 0.08px;

            font-family: 'Roboto' !important;

            font-size: 14.5px;

            font-weight: 500;

        }



        .e-footer__nav-list>li>div>ul li {

            margin-bottom: 1rem;

        }



        .e-footer__nav-list>li>div>ul li a {

            font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-normal) 17px/49px Open Sans;

        }



        .footer .footer-contact ul li {

            font-family: 'Open Sans';

            letter-spacing: 0.06px;

            line-height: 22px;

            font-size: 14.5px;

        }

        .l-burger-new {
            top: 12px;
        }

        .l-burger-new span:nth-child(1) {
            width: 30px;
        }

        .l-burger-new span:nth-child(2) {
            width: 24px;
        }

        .l-burger-new span:nth-child(3) {
            width: 18px;
        }

        .l-burger-new.open span {
            width: 30px !important;
        }

        .navbar-collapse.in {
            max-height: 100vh !important;
        }

        .bg-menu-grey .navbar-collapse {
            border-color: transparent !important;
        }

        #data_scrollbar {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }


        .header .navbar .right-nav-block.pull-right .navbar-nav>li {
            /* padding: 0 5px; */
        }

        @media (max-width:767px) {

            .pr-sm-0 {
                padding-right: 0 !important;
            }

            .header .navbar {
                box-shadow: none !important;
            }

            .header .navbar.bg-white,
            .header .navbar.bg-menu-grey {
                box-shadow: 0 3px 5px 0 rgb(0 0 0 / 13%) !important;
            }

            .navbar-nav {
                margin: 0;
                width: 100%;
            }

            .pad-mobile-t-2 {
                padding-top: 0.5rem;
            }

            .pad-mobile-b-3 {
                padding-bottom: 1rem;
            }

            .pad-mobile-b-2 {
                padding-bottom: 0.5rem:
            }

            .header .navbar .right-nav-block.pull-right .navbar-nav>li {
                padding-top: 3px;
                padding-bottom: 3px;
            }

            .btn-hubungi,
            .btn-visit {
                width: 100%;
            }

            .header .navbar .navbar-nav>li>a {
                margin: 0;
            }


            .l-burger-new {
                position: absolute;
                cursor: pointer;
            }

            .l-burger-new span {
                display: block;
                /* background: #d3531a; */
                border-radius: 9px;
                opacity: 1;
                /* left: 0; */
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                -webkit-transition: .25s ease-in-out;
                -moz-transition: .25s ease-in-out;
                -o-transition: .25s ease-in-out;
                transition: .25s ease-in-out;
                width: 30px;
                height: 2px;
                border-radius: 3px;
                background-color: #000000;
                margin: 7px 0;
            }

            .l-burger-new.open span {
                display: none;
            }

            .l-burger-new.open span:first-child {
                display: block;
                transform: rotate(45deg) translate(9px, 7px);
                -webkit-transform: rotate(45deg) translate(9px, 7px);
                -moz-transform: rotate(45deg) translate(9px, 7px);
            }

            .l-burger-new.open span:last-child {
                display: block;
                transform: rotate(-45deg) translate(-1px, 2px);
                -webkit-transform: rotate(-45deg) translate(-1px, 2px);
                -moz-transform: rotate(-45deg) translate(-1px, 2px);
            }
        }

        .bg-submenu.smart-safety {
            background: url(https://dev.goodeva.co.id/public/asset-goodeva-lp/navbar/bg-menu-smart-safety.png);
        }

        .bg-submenu.sales-automation {
            background: url(https://dev.goodeva.co.id/public/asset-goodeva-lp/navbar/bg-menu-sales-automation.png);
        }

        .bg-submenu.digital-growth {
            background: url(https://dev.goodeva.co.id/public/asset-goodeva-lp/navbar/bg-menu-digital-growth.png);
        }
    </style>

    @yield('css_after')



</head>

<body data-scrolling-animations="true">

    {{-- <section id="data_scrollbar" data-scrollbar> --}}

    <section>

        {{-- <div id="page-preloader"><span class="spinner"></span></div> --}}



        <!-- Navigation -->

        <header class="header scrolling-header">

            <nav id="nav" class="navbar navbar-default static-nav navbar-fixed-top" role="navigation">

                <div class="container clearfix">

                    <a class="toggle-button visible-xs-block pb-3" id="burger-i" data-toggle="collapse"
                        data-target="#navbar-collapse">

                        {{-- <i class="fa fa-navicon" id="nav-button-hamburger"></i> --}}

                        <div class="l-burger-new">
                            <span class="burger-icon"></span>
                            <span class="burger-icon"></span>
                            <span class="burger-icon"></span>
                        </div>

                        {{-- <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                          </div> --}}

                    </a>

                    <a href="{{ url('/evamedia') }}" class="logo-evamedia">

                        <img class="normal-logo " id="logo-utama" onerror="this.style.display='none'"
                            data-swap="{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png"
                            width="100" />

                    </a>


                    <a class="navbar-brand scroll" href="index.html">

                    </a>

                    <div class="right-nav-block pull-right clearfix">

                        <div class="navbar-collapse collapse floated" id="navbar-collapse">

                            <!-- list menu navbar -->
                            <ul class="nav navbar-nav clearfix pad-mobile-y-3 navbar-with-inside vcenter">

                                <!-- menu home -->
                                <li class="current">
                                    <a href="https://dev.goodeva.co.id">Home</a>
                                </li>

                                <!-- menu product dan submenunya untuk tampilan desktop -->
                                <li class="e-nav--list_child mr-15px desktop-show ">

                                    <a href="#">Product <i class="fa fa-chevron-down"></i></a>

                                    <div class="wrap-inside-nav left">

                                        <div class="inside-col">

                                            <!-- list submenu product -->
                                            <ul class="inside-nav e-nav--list_child is-withicon">

                                                <!-- menu smart safety -->
                                                <li class="bg-submenu smart-safety transition-content">

                                                    <a href="https://dev.goodeva.co.id/goodeva-smart-safety">

                                                        <div>

                                                            <span style="color:white !important;">Smart Safety</span>

                                                            <span style="color:white !important;">Fatigue
                                                                Solution</span>

                                                        </div>

                                                    </a>

                                                </li>

                                                <!-- menu sales automation -->
                                                <li class="bg-submenu sales-automation transition-content">

                                                    <a href="https://omsetku.id" target="_blank">

                                                        <div>

                                                            <span style="color:white !important;">Sales
                                                                Automation</span>

                                                            <span style="color:white !important;">CRM Solutions</span>

                                                        </div>

                                                    </a>

                                                </li>

                                                <!-- menu digital growth -->
                                                <li class="bg-submenu digital-growth transition-content">

                                                    <a href="https://digideva.id" target="_blank">

                                                        <div>

                                                            <span style="color:white !important;">Digital Growth</span>
                                                            <span style="color:white !important;">Marketing
                                                                Solutions</span>

                                                        </div>

                                                    </a>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </li>
                                <!-- end menu product dan submenunya untuk tampilan desktop -->

                                <!-- menu product dan submenunya untuk tampilan mobile -->
                                <li class="dropdown e-nav--list_child wrap-inside-nav-mobile  mr-15px mobile-show">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product
                                        <i class="fa fa-chevron-down"></i>
                                    </a>

                                    <!-- list submenu product -->
                                    <ul class="dropdown-menu inside-nav mx-3 px-3 e-nav--list_child_company">

                                        <!-- menu smart safety -->
                                        <li class="bg-submenu smart-safety transition-content">
                                            <a href="https://dev.goodeva.co.id/goodeva-smart-safety">

                                                <div>

                                                    <span style="color:white !important;">Smart Safety</span>
                                                    <span style="color:white !important;">Fatigue Solution</span>

                                                </div>

                                            </a>
                                        </li>

                                        <!-- menu sales automation -->
                                        <li class="bg-submenu sales-automation transition-content">
                                            <a href="https://omsetku.id" target="_blank">

                                                <div>

                                                    <span>Sales Automation</span>
                                                    <span>CRM Solutions</span>

                                                </div style="color:white">

                                            </a>
                                        </li>

                                        <!-- menu digital growth -->
                                        <li class="bg-submenu digital-growth transition-content" target="_blank">
                                            <a href="https://digideva.id" target="_blank">

                                                <div>

                                                    <span style="color:white">Digital Growth</span>
                                                    <span style="color:white">Marketing Solutions</span>

                                                </div>

                                            </a>
                                        </li>
                                    </ul>

                                </li>
                                <!-- end menu product dan submenunya untuk tampilan mobile -->

                                <!-- menu solutions -->
                                <li class=""><a href="https://dev.goodeva.co.id/solutions">Solutions</a></li>

                                <!-- menu mengapa harus goodeva -->
                                <li class="e-nav--list_child mr-15px desktop-show ">

                                    <a href="#">Mengapa Goodeva <i class="fa fa-chevron-down"></i></a>

                                    <div class="wrap-inside-nav right ">

                                        <div class="inside-col">

                                            <ul class="inside-nav e-nav--list_child_company is-withicon">

                                                <li>

                                                    <a href="https://dev.goodeva.co.id/purna-jual">

                                                        <div>

                                                            <span>Layanan Purna Jual</span>

                                                            <span>Dukungan penuh untuk anda</span>

                                                        </div>

                                                    </a>

                                                </li>

                                                <li class="br-bottom-zero">

                                                    <a href="https://dev.goodeva.co.id/client">

                                                        <div>

                                                            <span>Klien Kami</span>

                                                            <span>Cerita sukses bersama Goodeva</span>

                                                        </div>

                                                    </a>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </li>

                                <!-- menu academy -->
                                <li class=""><a href="https://galaxy-code.goodeva.id/"
                                        target="_blank">Academy</a></li>

                                <!-- menu academy untuk tampilan desktop -->
                                <li class="e-nav--list_child mr-15px desktop-show ">

                                    <a href="#">Company <i class="fa fa-chevron-down"></i></a>

                                    <div class="wrap-inside-nav right ">

                                        <div class="inside-col">

                                            <ul class="inside-nav e-nav--list_child_company is-withicon">

                                                <li>

                                                    <a href="https://dev.goodeva.co.id/about">

                                                        <div>

                                                            <span>About</span>

                                                            <span>Learn more about us</span>

                                                        </div>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="https://dev.goodeva.co.id/careers">

                                                        <div>

                                                            <span>Careers</span>

                                                            <span>Explore our openings</span>

                                                        </div>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="https://dev.goodeva.co.id/contact">

                                                        <div>

                                                            <span>Contact</span>

                                                            <span>Keep in touch with us</span>

                                                        </div>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="https://dev.goodeva.co.id/affiliate">

                                                        <div>

                                                            <span>Affiliate</span>

                                                            <span>Bergabung menjadi mitra kami</span>

                                                        </div>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="https://dev.goodeva.co.id/evamedia">

                                                        <div>

                                                            <span>Goodeva Media</span>

                                                            <span>Get our latest update</span>

                                                        </div>

                                                    </a>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </li>

                                <!-- menu academy untuk tampilan mobile -->
                                <li class="dropdown e-nav--list_child wrap-inside-nav-mobile  mr-15px mobile-show ">

                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Company <i
                                            class="fa fa-chevron-down"></i></a>

                                    <ul
                                        class="dropdown-menu inside-nav inside-nav mx-3 px-3 e-nav--list_child_company is-withicon">

                                        <li>

                                            <a href="https://dev.goodeva.co.id/about">

                                                <div>

                                                    <span>About</span>

                                                    <span>Learn more about us</span>

                                                </div>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="https://dev.goodeva.co.id/careers">

                                                <div>

                                                    <span>Careers</span>

                                                    <span>Explore our openings</span>

                                                </div>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="https://dev.goodeva.co.id/contact">

                                                <div>

                                                    <span>Contact</span>

                                                    <span>Keep in touch with us</span>

                                                </div>

                                            </a>

                                        </li>

                                        <li>

                                            <a href="https://dev.goodeva.co.id/evamedia">

                                                <div>

                                                    <span>Goodeva Media</span>

                                                    <span>Get our latest update</span>

                                                </div>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <!-- pilih bahasa desktop -->
                                <li class="e-nav--list_child mr-15px desktop-show ">

                                    <a href="#" class="flex-lang">English
                                        <!-- <i class="fa fa-globe"></i> -->
                                        &nbsp;
                                        <img src="https://dev.goodeva.co.id/public/asset-goodeva-lp/navbar/icon-language.png"
                                            alt="" style="width: 14px;">
                                    </a>

                                    <!-- <div class="wrap-inside-nav right "> -->
                                    <!--  -->
                                    <!-- <div class="inside-col"> -->
                                    <!--  -->
                                    <!-- <ul class="inside-nav e-nav--list_child_company is-withicon"> -->
                                    <!--  -->
                                    <!-- <li> -->
                                    <!--  -->
                                    <!-- <a href="#"> -->
                                    <!--  -->
                                    <!-- <div> -->
                                    <!--  -->
                                    <!-- <span>Indonesia</span> -->
                                    <!--  -->
                                    <!-- </div> -->
                                    <!--  -->
                                    <!-- </a> -->
                                    <!--  -->
                                    <!-- </li> -->
                                    <!--  -->
                                    <!-- <li> -->
                                    <!--  -->
                                    <!-- <a href="#"> -->
                                    <!--  -->
                                    <!-- <div> -->
                                    <!--  -->
                                    <!-- <span>English</span> -->
                                    <!--  -->
                                    <!-- </div> -->
                                    <!--  -->
                                    <!-- </a> -->
                                    <!--  -->
                                    <!-- </li> -->
                                    <!--  -->
                                    <!--  -->
                                    <!-- </ul> -->
                                    <!--  -->
                                    <!-- </div> -->
                                    <!--  -->
                                    <!-- </div> -->

                                </li>

                                <!-- pilih bahasa mobile -->
                                <li class="dropdown e-nav--list_child wrap-inside-nav-mobile mobile-show ">

                                    <a href="#" class="flex-lang">English
                                        <img src="https://dev.goodeva.co.id/public/asset-goodeva-lp/navbar/icon-language.png"
                                            alt="" style="width: 14px;">
                                    </a>

                                </li>

                                <li>
                                    <a href="{{ url('contact') }}" style="text-decoration: none; margin: 0;">

                                        <button class="btn btn-hubungi">

                                            Hubungi Kami

                                        </button>

                                    </a>

                                </li>
                                <li>

                                    <a href="{{ url('/') }}" style="text-decoration: none; margin: 0;">
                                        <button class="btn btn-visit">

                                            Visit Goodeva

                                        </button>
                                    </a>
                                </li>


                            </ul>

                        </div>

                    </div>

                </div>

        </header><!--./navigation -->



        @yield('content')



        <!-- Footer -->

        <footer class="footer ">

            <div class="container desktop-show">

                <div class="row footer-nav">

                    <div class="col-md-5 col-sm-12 footer-tablet">


                        <div class="footer-navigation">

                            <div class="row">

                                <div class="col-md-12 col-sm-12 part-footer">

                                    <img class="normal-logo mb-20"
                                        src="{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png"
                                        width="135" alt="logo" />

                                    <br>

                                    <p>

                                        © Copyright @php echo(date('Y')) @endphp Goodeva Technology

                                        <br>

                                        All right reserved

                                    </p>

                                </div>

                                <div class="col-md-12 col-sm-12 part-footer">


                                    <div class="mt-5" style="margin-left: -9px;">

                                        <ul>

                                            <li><a target="_blank"
                                                    href="https://www.instagram.com/goodeva.id/?hl=en"><button
                                                        class="btn btn-social-media"><i
                                                            class="fa fa-instagram"></i></button></a></li>

                                            <li><a target="_blank"
                                                    href="https://www.facebook.com/Goodeva-technology-103031931477024"><button
                                                        class="btn btn-social-media btn-padding-facebook"><i
                                                            class="fa fa-facebook"></i></button></a></li>

                                            {{-- <li><a href="#"><button class="btn btn-social-media"><i class="fa fa-twitter"></i></button></a></li> --}}

                                        </ul>

                                    </div>

                                </div>

                            </div>




                        </div>

                    </div>

                    <div class="col-md-7 col-sm-12 footer-tablet">

                        {{-- <div class="footer-nav"> --}}

                        <ul class="e-footer__nav-list">

                            <li>

                                <div class="footer-social">

                                    <div class="footer-title">Products</div>

                                    <ul>

                                        <li><a href="{{ url('goodeva-smart-safety') }}">Goodeva Smart Safety</a></li>

                                        <li class="mb-3"><a href="{{ url('goodeva-smart-healthy') }}">Goodeva Smart
                                                Health</a></li>

                                        <li class="mb-3"><a href="{{ url('goodeva-smart-erp') }}">Goodeva ERP</a>
                                        </li>

                                    </ul>

                                </div>



                            </li>

                            <li>

                                <div class="footer-social">

                                    <div class="footer-title">Company</div>

                                    <ul>

                                        <li><a href="{{ url('about') }}">About</a></li>

                                        <li><a href="javascript:void(0)">Careers</a></li>

                                        {{-- <li><a href="{{ url('contact') }}">Contact</a></li> --}}

                                        <li><a href="javascript:void(0)">Cerita Techno</a></li>

                                    </ul>

                                </div>

                            </li>

                            <li>

                                <div class="footer-social footer-contact">

                                    <div class="footer-title">Contact Us</div>

                                    <ul>

                                        <li>
                                            Grand Galaxy Commercial, Blok RSK 6/15 Jalan Boulevar Raya Timur, Kota
                                            Bekasi.
                                        </li>

                                    </ul>

                                </div>

                            </li>

                        </ul>

                        {{-- </div> --}}

                    </div>

                </div>

            </div>

            {{-- </footer>

    <footer class="footer"> --}}

            <div class="container  mobile-show">

                <div class="row footer-nav">



                    <div class="col-md-12">

                        {{-- <div class="footer-nav"> --}}
                        <div class="row mx-0">

                            <div class="col-xs-7 col-sm-7">

                                <ul class="e-footer__nav-list">

                                    <li>

                                        <div class="footer-social">

                                            <div class="footer-title">Products</div>

                                            <ul>

                                                <li><a href="{{ url('goodeva-smart-safety') }}">Goodeva Smart
                                                        Safety</a></li>

                                                <li class="mb-3"><a
                                                        href="{{ url('goodeva-smart-healthy') }}">Goodeva Smart
                                                        Health</a></li>

                                                <li class="mb-3"><a href="{{ url('goodeva-smart-erp') }}">Goodeva
                                                        ERP</a></li>

                                            </ul>

                                        </div>



                                    </li>
                                </ul>


                            </div>

                            <div class="col-xs-5 col-sm-5">

                                <ul class="e-footer__nav-list">

                                    <li>

                                        <div class="footer-social">

                                            <div class="footer-title">Company</div>

                                            <ul>

                                                <li><a href="{{ url('about') }}">About</a></li>

                                                <li><a href="#">Careers</a></li>

                                                {{-- <li><a href="{{ url('contact') }}">Contact</a></li> --}}

                                                <li><a href="#">Goodeva Media</a></li>

                                            </ul>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                            <div class="col-xs-12 col-sm-12 mt-5">

                                <ul class="e-footer__nav-list">

                                    <li>

                                        <div class="footer-social footer-contact">

                                            <div class="footer-title">Contact Us</div>

                                            <ul>

                                                <li>
                                                    Office : 0812-2234-036 <br>
                                                    Email : sales@goodeva.co.id
                                                </li>

                                            </ul>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                            <div class="col-xs-12 col-sm-12 mt-3">

                                <div class="footer-navigation">

                                    <div>

                                        <ul class="text-left">

                                            <li><a target="_blank"
                                                    href="https://www.instagram.com/goodeva.id/?hl=en"><button
                                                        class="btn btn-social-media"><i
                                                            class="fa fa-instagram"></i></button></a></li>

                                            <li><a target="_blank"
                                                    href="https://www.facebook.com/Goodeva-technology-103031931477024"><button
                                                        class="btn btn-social-media btn-padding-facebook"><i
                                                            class="fa fa-facebook"></i></button></a></li>

                                            {{-- <li><a href="#"><button class="btn btn-social-media"><i class="fa fa-twitter"></i></button></a></li> --}}

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>



                        {{-- </div> --}}

                    </div>

                    <div class="col-md-12 col-xs-12">

                        <div class="footer-navigation">

                            <div class="col-xs-12 col-sm-12 text-center mt-5">

                                <img class="normal-logo mb-20"
                                    src="{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png"
                                    width="135" alt="logo" />

                                <br>

                                <p>

                                    © Copyright @php echo(date('Y')) @endphp Goodeva Technology

                                    <br>

                                    All right reserved

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </footer>

    </section>

    <!-- Scripts -->



    <!-- components -->

    <script src="{{ $baseurl }}public/js/jquery.min.js"></script>

    <script src="{{ $baseurl }}public/js/scrollreveal.js"></script>

    <script src="{{ $baseurl }}public/js/bootstrap.min.js"></script>

    <script src="{{ $baseurl }}public/js/owl.carousel.min.js"></script>

    <script src="{{ $baseurl }}public/js/jquery.fancybox.pack.js"></script>

    <script src="{{ $baseurl }}public/js/wow.min.js"></script>

    <script src="{{ $baseurl }}public/js/isotope.pkgd.min.js"></script>

    <script src="{{ $baseurl }}public/js/masonry.pkgd.min.js"></script>

    <script src="{{ $baseurl }}public/js/modernizr.js"></script>

    <script src="{{ $baseurl }}public/js/jquery.scrollme.min.js"></script>

    <script src="{{ $baseurl }}public/js/jquery.spincrement.min.js"></script>

    <script src="{{ $baseurl }}public/js/jqBootstrapValidation.js"></script>

    {{-- <script src="{{asset('public/js/contact_me.js')}}"></script> --}}



    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- custom scripts -->

    <script src="{{ $baseurl }}public/js/map.js"></script>

    <script src="{{ $baseurl }}public/js/custom.js"></script>

    {{-- Effect Fade Scrolling --}}

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>


    <script src="{{ $baseurl }}public/js/smooth-scrollbar.js"></script>

    <script>
        Scrollbar.initAll();
    </script>


    @yield('js_after')

    <script>
        $(document).ready(function() {
            $('.l-burger-new').click(function() {
                $(this).toggleClass('open');

                $('.header .navbar.navbar-default.navbar-fixed-top .navbar-nav li a,.header .navbar.navbar-default.navbar-fixed-top .navbar-nav li a .fa-chevron-down')
                    .toggleClass('text-black');

                var height = $(window).scrollTop();

                if (height > 75) {
                    $('.header .navbar').addClass('bg-menu-grey');
                    // $('.burger-icon').removeClass('bg-menu-grey');

                    var _this = $('#logo-utama');
                    var current = _this.attr("src");
                    var swap = "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png";
                    _this.attr('src', "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png");
                } else {
                    var isExpanded = $('#burger-i').attr("aria-expanded");
                    if (isExpanded == 'true') {

                        var _this = $('#logo-utama');
                        var current = _this.attr("src");
                        var swap = "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png"
                        @if (
                            !in_array(request()->segment(1), [
                                'contact',
                                'goodeva-smart-safety',
                                'goodeva-smart-erp',
                                'goodeva-smart-healthy',
                                'about',
                            ]))
                            $('.header .navbar').addClass('bg-menu-grey');
                            // $('.burger-icon').addClass('bg-menu-grey');
                            // _this.attr('src', "{{ asset('public/img/assets/solution/goodeva logo white.png') }}");
                        @endif

                        @if (in_array(request()->segment(1), ['solutions']))
                            $('#logo-utama').show();
                            $('#logo-utama-2').hide();
                        @endif
                    } else {
                        $('.header .navbar').addClass('bg-menu-grey');
                        // $('.burger-icon').removeClass('bg-menu-grey');

                        var _this = $('#logo-utama');
                        var current = _this.attr("src");
                        var swap = "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png";
                        _this.attr('src',
                            "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png");

                        @if (in_array(request()->segment(1), ['solutions']))
                            $('#logo-utama').hide();
                            $('#logo-utama-2').show();
                        @endif

                    }



                }


                // $('.header .navbar').toggleClass('bg-menu-grey');
                // $('.burger-icon').toggleClass('bg-menu-grey');

                // var _this =  $('#logo-utama');
                // var current = _this.attr("src");
                // var swap = _this.attr('data-swap');
                // _this.attr('src', swap).attr("data-swap",current);

            });

            if ($(window).width() < 767) {
                @if (in_array(request()->segment(1), ['', 'solutions']))
                    $('#logo-utama').attr('src',
                        "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png");
                    $('.burger-icon').addClass('bg-menu-grey');

                    var iScrollHeight = $("body").prop("scrollHeight");
                    $(window).scroll(function() {
                        var height = $(window).scrollTop();

                        if (height > 75) {
                            $('.header .navbar').addClass('bg-menu-grey');
                            $('.burger-icon').removeClass('bg-menu-grey');

                            var _this = $('#logo-utama');
                            var current = _this.attr("src");
                            var swap = "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png";
                            _this.attr('src',
                                "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png");
                        } else {
                            var isExpanded = $('#burger-i').attr("aria-expanded");
                            if (isExpanded == 'true') {
                                $('.header .navbar').addClass('bg-menu-grey');
                            } else {
                                $('.header .navbar').addClass('bg-menu-grey');
                                $('.burger-icon').addClass('bg-menu-grey');
                                var _this = $('#logo-utama');
                                var current = _this.attr("src");
                                var swap =
                                    "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png"
                                _this.attr('src',
                                    "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png");

                                @if (in_array(request()->segment(1), ['solutions']))
                                    $('#logo-utama').show();
                                    $('#logo-utama-2').hide();
                                @endif
                            }



                        }
                    });
                @else
                    $('.header .navbar').addClass('bg-menu-grey');
                    $('.burger-icon').removeClass('bg-menu-grey');
                    $('#logo-utama').attr('src',
                        "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png");
                @endif
            } else {
                @if (in_array(request()->segment(1), ['']))
                    $('#logo-utama').attr('src',
                        "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png");
                    $('.burger-icon').addClass('bg-menu-grey');
                @elseif (in_array(request()->segment(1), ['solutions']))
                    $('#logo-utama').attr('src',
                        "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png");
                    $('.burger-icon').addClass('bg-menu-grey');
                @else
                    $('#logo-utama').attr('src',
                        "{{ $baseurl }}public/img/assets/Goodeva-technology-logo.png");
                @endif
            }
        });
    </script>

</body>

</html>
