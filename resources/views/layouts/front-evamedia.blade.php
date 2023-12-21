@inject('request', 'Illuminate\Http\Request')

<!doctype html>

<?php
$baseurl = 'https://omsetku.id/';
?>

{{-- @php
    $tipe_page = '';
    $check_company = Helper::listCompany();
@endphp --}}

<html lang="{{ config('app.locale') }}" class="no-focus">


<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">



    <title>Dashboard Omsetku - @yield('title')</title>

    {{-- @if (Session::has('download.in.the.next.request')) --}}
    {{-- <meta http-equiv="refresh" content="1;url={{ Session::get('download.in.the.next.request') }}"> --}}
    {{-- @endif --}}
    {{-- @if (Session::has('download.in.the.next.request_export_2')) --}}
    {{-- <meta http-equiv="refresh" content="1;url={{ Session::get('download.in.the.next.request_export_2') }}"> --}}
    {{-- @endif --}}

    {{-- @if (Session::has('export1')) --}}
    {{-- <meta http-equiv="refresh" content="1;url={{ Session::get('export1') }}"> --}}
    {{-- <meta http-equiv="refresh" content="1;url={{ Session::get('export2') }}"> --}}

    {{-- @php --}}
    {{-- Session::flash('download.in.the.next.request_export_2', $path_2); --}}
    {{-- @endphp --}}

    {{-- @endif --}}


    <meta name="description" content="Omsetku - Goodeva Smart Sales">

    <meta name="author" content="Goodeva">

    <meta name="keywords" content="Omsetku - Goodeva Smart Sales">

    <meta name="robots" content="noindex, nofollow">



    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Icons -->

    <link rel="shortcut icon" href="{{ $baseurl }}public/assets/img/logo omsetku rev.png">

    <link rel="icon" sizes="192x192" type="image/png"
        href="{{ $baseurl }}public/assets/img/logo omsetku rev.png">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ $baseurl }}public/assets/img/logo omsetku rev.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Fonts and Styles -->

    @yield('css_before')

    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700"> --}}

    <noscript>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    </noscript>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.cdnfonts.com/css/manrope" rel="stylesheet">

    <link rel="stylesheet" id="css-main" href="{{ $baseurl }}public/backend-asset/css/codebase.css">


    <link href="{{ $baseurl }}public/backend-asset/backend-asset/sweetalert2/dist/sweetalert2.min.css"
        rel="stylesheet" />

    <link href="{{ $baseurl }}public/backend-asset/select2js/css/select2.min.css " rel="stylesheet" />
    <link href="{{ $baseurl }}public/backend-asset/selectbs2/select2-bootstrap.min.css" rel="stylesheet" />
    <link href="{{ $baseurl }}public/backend-asset/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">


    <link href="{{ $baseurl }}public/backend-asset/fonts/themify/css/themify-icons.css" rel="stylesheet">
    <link href="{{ $baseurl }}public/backend-asset/datepicker3/datepicker3.css" rel="stylesheet">
    <link href="{{ $baseurl }}public/backend-asset/css/inline-style.css" rel="stylesheet">

    <!-- cdn css fontawesome -->

    <!-- end cdn css fontawesome -->



    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->

    <!-- <link rel="stylesheet" id="css-theme" href="{{ $baseurl }}/css/themes/corporate.css"> -->

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
            font-family: 'Manrope', sans-serif !important;
        }

        .status-expired {
            background: #EF64641A !important;
            color: #EF6464 !important;
            font-size: 13px;
            padding: 7px 20px;
            border-radius: 5px;
        }

        .status-delivered {
            background: #4b7de81a !important;
            color: #2b84e9 !important;
            font-size: 13px;
            padding: 7px 20px;
            border-radius: 5px;
        }

        .status-green {
            background: #5fde961a !important;
            color: #2bc14a !important;
            font-size: 13px;
            padding: 7px 20px;
            border-radius: 5px;
        }

        .status-blue-young {
            background: #4e9bda21 !important;
            color: #3f9ce8 !important;
            font-size: 13px;
            padding: 7px 17px;
            border-radius: 5px;
        }

        .status-gray {
            background: #A7A7A71F !important;
            color: #A7A7A7 !important;
            font-size: 13px;
            padding: 7px 29px;
            border-radius: 5px;
        }


        .sidebar-icon {
            width: 25px;
        }

        .w-20 {
            width: 20% !important;
        }

        .w-30 {
            width: 30% !important;
        }

        .nav-main a {
            color: #FFFFFF;
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: 5px 10px;
            clear: both;
            font-weight: 400;
            color: #1D2F5F;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }

        .nav-main li {
            border-bottom: 0px solid #f7f8f9;
            padding: 5px 1px;
            padding-bottom: 0px;
        }

        .nav-main a:hover,
        .nav-main a:focus,
        .nav-main a.active {
            color: #ffff;
            background: #ffffff1c;
            border-left: 5px solid #ffffff;
            transition: .25s ease-in-out;
        }

        .nav-main .submenu a:hover,
        .nav-main .submenu a:focus,
        .nav-main .submenu a.active {
            color: #ffff;
            background: #ffffff1c;
            border-left: 0px !important;
            transition: .25s ease-in-out;
            /* padding-left: 40px; */
        }

        /* .nav-main .submenu li:hover */
        /* .nav-main .submenu li:focus */
        /* .nav-main .submenu li.active { */
        /* width: 125%; */
        /* margin-left: -40px; */
        /* } */

        .text-logo {

            font-family: 'Mulish';
            font-size: 24px;
            font-weight: 800;
            padding: 10px 10px 10px 10px;
        }

        .p-6 {
            padding: 3rem !important;
        }

        .nav-main a {
            padding: 9px 16px 9px 30px;
        }

        .btn-primary-omsetku {
            background: #1E3168;
            color: #ffffff;
        }

        .btn-primary-omsetku:hover {
            opacity: .8;
        }

        .nav-main a>img {
            position: absolute;
            top: 49%;
            right: auto;
            left: 10px;
            transform: translateX(0) translateY(-50%);
            width: 20px;
            height: 20px;
        }

        .sidebar-mini-hide,
        .sidebar-mini-show {
            padding-left: 7%;
        }

        .logo-web {
            width: 130px;
        }

        .name-account-info {
            font-size: 18px;
            font-weight: 400;
            line-height: 25px;
            letter-spacing: 0em;
            text-align: left;
            margin-left: -10px;
        }

        .role-account-info {
            font-family: Nunito;
            font-size: 16px;
            font-weight: 300;
            line-height: 25px;
            letter-spacing: 0em;
            color: #C7C7C7;
            text-align: left;
            margin-left: -10px;
        }

        .circle-ava {
            /* background: #d9d9d900; */
            color: #ffffff00;
            border-radius: 50%;
            width: 64px;
            height: 64px;
            overflow: hidden;
            display: flex;
            align-items: baseline;
            justify-content: center;
            border: 1px solid #ffac2f;
            background: whitesmoke;
            font-size: 30px;
            text-align: center;
            line-height: 55px;
            margin-left: -15px;
        }

        .circle-ava span {
            display: inline-block;
            vertical-align: middle;
            line-height: normal;
        }

        .content-header-section .navicon {
            width: 25px;
            margin-top: -5px;
        }

        .content-header-section .logotext {
            margin-left: 10px;
            width: 100px;
        }

        .btn-primary-dark {
            background: #1E3168;
            color: #ffffff;
        }

        .pt-5 {
            padding-top: 2.5rem !important;
        }

        .txt-blue-primary,
        .blue-primary {
            color: #1E3168;
        }

        .txt-blue-secondary,
        .blue-secondary {
            color: #7BABF1;
        }

        .txt-red-primary,
        .red-primary {
            color: #FF2D55;
        }

        .bg-blue-secondary-progress {
            background: #588EBE !important;
        }

        .bg-red-primary-progress {
            background: #FF2D55 !important;
        }

        .bg-blue-primary {
            background: #1E3168 !important;
            color: #ffffff
        }

        .bg-abu-dropdown {
            background: #F2F1F1;
            width: 411px;
            padding: 20px 20px 20px 20px;
            /* height: fit-content; */
        }

        .txt-green,
        .green {
            color: #34B768;
        }

        .txt-red {
            color: #FF0000;
        }

        .txt-yellow-primary {
            color: #FFB14A;
        }

        .txt-black {
            color: #121212;
        }

        .btn-primary-dark:hover {
            opacity: .8;
        }

        .modal-header {
            padding-top: 10px;
            padding-bottom: 0px;
        }

        .toast-success,
        .toast-success .toast-header {
            background: #59CB86;
            color: #ffffff;
        }

        .toast-failed,
        .toast-failed .toast-header {
            background: #FF2D55;
            color: #ffffff;
        }

        .toast-notif-icon i {
            font-size: 60px;
            color: #ffffff;
        }

        .toast .toast-header {
            border-bottom: none !important;
        }

        .toast .toast-header button span {
            color: #ffffff !important;
        }

        .toast .toast-notif-title {
            font-size: 18px;
            font-weight: 700;
            color: #ffffff
        }

        .toast .toast-notif-desc {
            font-size: 13px;
            font-weight: 400;
            color: #ffffff
        }

        .font-w800 {
            font-weight: 800 !important;
        }

        .font-w700 {
            font-weight: 700 !important;
        }

        .toast .toast-body {
            padding: 0 !important;
        }

        .toast .toast-header {
            padding: .25rem 0 !important;
        }

        .alert-popup .icon-img-alert {
            width: 100%;
        }

        .alert-popup .modal-header {
            /*padding: 50px 50px 20px;*/
            padding: 20px 80px 5px;
        }

        .alert-popup .modal-body {
            padding-top: 0 !important;
        }

        .alert-popup .modal-title {
            text-align: center;
            font-size: 20px;
            font-weight: 700;
            line-height: 33px;
            letter-spacing: 0em;
            color: #1E3168;
        }

        .alert-popup .modal-footer {
            justify-content: center;
            padding: 0 28px 28px;
            border-top: none;
        }

        .alert-popup .btn-outline-done {
            width: 100%;
        }

        .alert-popup .modal-desc {
            text-align: center;
            font-size: 15px;
            font-weight: 400;
            line-height: 25px;
            letter-spacing: 0em;
            color: #37474F;
            margin-bottom: 0;
        }

        .form-popup-sm .modal-header {
            padding: 15px;
            border-top-right-radius: 0px;
            border-top-left-radius: 0px;
        }

        .form-popup-sm .modal-footer {
            border-top: none;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 1100px;
                margin: 1.75rem auto;
            }

            .alert-popup .modal-sm {
                width: 340px;
                max-width: 350px;
            }

            .form-popup-sm .modal-sm {
                width: 455px;
                max-width: 475px;
            }

        }

        .alert-popup .confirm-button {
            display: inherit;
        }

        .btn-outline-done {
            border: 1px solid #1E3168;
            background: #ffffff;
            color: #1E3168;
        }

        .btn-outline-done:hover {
            border: 1px solid #1E3168;
            background: #1E3168;
            color: #ffffff;
        }

        .welcome-popup .modal-header {
            border-bottom: 1px solid #707070;
        }

        .welcome-popup .modal-header,
        .welcome-popup .modal-header .close.pop-up-welcome,
        .form-popup-sm .modal-header .close.pop-up-form {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-popup-sm .modal-header .close.pop-up-form img {
            width: 24px;
        }

        .modal-data-analytic .modal-header {
            display: block !important;
        }

        .modal-data-analytic .modal-content {
            background: #DADADA
        }

        .modal-data-analytic .card-header-content {
            background: #ffffff !important;
            padding: 10px;
        }

        .modal-data-analytic .card-header-content .desc-data-analytic label {
            font-weight: 800;
            color: #000000;
        }

        .modal-data-analytic .card-header-content .desc-data-analytic {
            font-size: 16px;
        }

        .modal-data-analytic .dataTableModal tr td,
        .modal-data-analytic .dataTableModal tr th {
            font-weight: 700 !important;
        }

        .modal-data-analytic.modal-data-analytic-target .accordion-header {
            background: #F7F7F7;
            color: #1E3168;
            border-bottom: 1px solid #C7C7C7 !important;
            font-size: 16px;
            font-weight: 700 !important;
        }

        .modal-data-analytic.modal-data-analytic-target .accordion-header div div {
            padding: 10px;
        }

        .modal-data-analytic.modal-data-analytic-target .dataTableModal tbody tr td {
            background: #FBFBFB !important;
        }

        .modal-data-analytic.modal-data-analytic-target .dataTableModal thead tr th {
            background: #f7f7f7 !important;
        }

        .bg-third-gray {
            background: #F7F7F7 !important
        }

        .bg-alt-danger {
            color: #FF0000;
            background: #FFBECA;
        }

        .bg-alt-success {
            color: #7BABF1;
            background: #EBF2FD;
        }

        .bg-alt-go {
            color: #019557;
            background: #C2E9D2;
        }

        .bg-go {
            color: #ffffff;
            background: #34B768;
        }

        .txt-go {
            color: #34B768;

        }

        .bg-pref {
            background: #F7F7F7;
            height: 50px;
        }

        .badge {
            padding: 5px 20px;
        }

        .bg-alt-doubt {
            color: #707070;
            background: #e2e2e2;
        }

        .bg-grey-secondary {
            background: #d9d9d9;
            border: 1px solid #ADADAD;
        }

        .txt-grey-secondary {
            color: #6A707E
        }

        .btn-back-page {
            color: #FF2D55;
            font-weight: bold;
        }

        .down {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
        }

        .txt-hidden {
            display: none;
        }

        .bg-transparent {
            background: transparent !important;
        }

        .h-100 {
            height: 100%;
        }

        .welcome-popup .modal-header .modal-title {
            font-weight: 700;
        }

        .myText {
            cursor: pointer;
        }

        .myText.active {
            background: #F9F9FB;
            border-width: 0.5px 0px;
            border-style: solid;
            border-color: #DADADA;
            width: 405px;
            height: 75px;
            margin: auto;
        }


        .checkIcon {
            display: block;
            width: 10px;
            height: 10px;
        }

        .myText.active+.checkIcon {
            display: inline-block;

        }

        .welcome-popup .modal-header .close.pop-up-welcome,
        .form-popup-sm .modal-header .close.pop-up-form {
            opacity: 1;
        }

        .close.pop-up-welcome img {
            width: 25px;
        }

        .welcome-popup .content-pop-up .title-pop-up h1 {
            margin: 20px 0px 10px;
        }

        .welcome-popup .content-pop-up p,
        .pop-up-card-list .card .card-body .card-title {
            margin: 0px;
        }

        .welcome-popup .content-pop-up .title-pop-up hr {
            width: 100%;
            border: 1px solid #707070;
        }

        .pop-up-card-list {
            margin: 10px 0px;
        }

        .pop-up-card-list .card .card-body {
            padding: 5px;
            border: 1px solid #707070;
            border-radius: 5px;
        }

        .pop-up-card-list .card .card-body img {
            width: 75%;
        }

        .pop-up-card-list .card .card-body .card-title {
            font-size: 15px;
        }

        .nav-main li.open>ul {
            background-color: #ffffff1c;
        }

        .nav-main li.open>a.nav-submenu {
            color: #fefefe;
        }

        .nav-main ul a {
            color: rgb(254 254 254);
        }

        .modal {
            z-index: 9999;
        }

        .table thead tr th {
            font-weight: 800 !important;
        }

        .round-image {
            width: 70px;
            /* height: 50px; */
            /* border-radius: 50%; */
            overflow: hidden;
            background-color: #0000ff00;
            display: inline-block;
            vertical-align: middle;
        }

        .round-image-2 {
            width: 70px;
            /* height: 73px; */
            /* border-radius: 50%; */
            overflow: hidden;
            background-color: #0000ff00;
            display: inline-block;
            vertical-align: middle;
        }

        .text-grays {
            color: #6A707E !important;
        }



        .alert.alert-server {
            background: #71D875;
            color: black;
            padding-left: 7%;
            margin-bottom: 0;
            border-radius: 0;
        }

        .btn-primary-not {
            background: #626262;
            color: #ffffff;
        }

        .color-gray {
            color: #9D9D9D !important;
        }

        .label-forms {
            color: #9D9D9D !important;
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 0px;
        }

        .scrollable-menu {
            height: 200px;
            max-height: 200px;
            overflow-x: hidden;
        }


        #page-container.page-header-fixed #main-container {
            padding-top: 87px !important;
        }

        .bg-1E3168 {
            background: #1E3168 !important;
        }

        #sidebar {
            border-radius: 20px;
            background-color: #329FAF;
            width: 25vh;
            height: 95%;
            margin-left:25px;
            margin-top:25px;
            margin-bottom:25px;
        }

        .content-side {
            margin-left: 0 !important;
        }

        body {
            background: #FFFEEC;
            padding-left: 3% !important;
            padding-right: 20px !important;
        }
    </style>
    @yield('css_after')
</head>

<body>

    <body>
        <div id="page-container"
            class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-header-inverse main-content-boxed side-trans-enabled">
            <aside id="side-overlay">
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <button type="button" class="btn btn-circle btn-side-header align-v-r" data-toggle="layout"
                            data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="javascript:void(0)">
                                <img class="img-avatar img-avatar32"
                                    src="{{ $baseurl }}public/backend-asset/media/avatars/avatar15.jpg"
                                    alt="">
                            </a>
                            <!-- <a class="align-middle link-effect text-primary-dark font-w600" href="javascript:void(0)">{{-- Auth::user()->name --}}</a> -->
                            <a class="align-middle link-effect text-primary-dark font-w600"
                                href="javascript:void(0)">Admin test</a>
                        </div>
                    </div>
                </div>
                <div class="content-side">
                </div>
            </aside>
            <nav id="sidebar">
                <div class="sidebar-content">
                    <div class="content-header content-header-fullrow px-15">
                        <div class="content-header-section sidebar-mini-visible-b">
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                        </div>
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <button type="button" class="btn btn-circle btn-side-header d-lg-none align-v-r"
                                data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <div class="content-header-item">
                                <a class="font-w700" href="{{ url('/') }}">
                                    <!-- <img src="{{ URL::asset(' public/backend-asset/img/logo-goodeva upd.png') }}" class="img-responsive" style="width: 85px;"> -->
                                    <img src="{{ asset('goodeva-media/logodeva.png') }}"
                                        class="img-responsive logo-web">

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <p style="color: #FFF;font-size: 11px;font-weight: 300;" class="sidebar-mini-hide">
                                    MENU </p>
                            </li>
                            <li>
                                <a href="" class="">
                                    <img src="{{ asset('goodeva-media/bag-shopping.png') }}" alt=""
                                        srcset="" class="sidebar-icon">
                                    <span style="color: #FFF;font-size: 13px;font-weight: 300;"
                                        class="sidebar-mini-hide"> Berita
                                </a>
                            </li>
                            <li>
                                <a href="" class="">
                                    <img src="{{ asset('goodeva-media/Menu.png') }}" alt="" srcset=""
                                        class="sidebar-icon">
                                    <span style="color: #FFF;font-size: 13px;font-weight: 300;"
                                        class="sidebar-mini-hide"> Master Data Tags
                                </a>
                            </li>
                            <li>
                                <p style="color: #FFF;font-size: 11px;font-weight: 300; margin-top:10px"
                                    class="sidebar-mini-hide"> OTHER </p>
                            </li>
                            <li>
                                <a href="" class="">
                                    <img src="{{ asset('goodeva-media/logout.png') }}" alt="" srcset=""
                                        class="sidebar-icon">
                                    <span style="color: #FFF;font-size: 13px;font-weight: 300;"
                                        class="sidebar-mini-hide"> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>



            <!-- END Header -->



            <!-- Main Container -->

            <main id="main-container">

                <div class="modal fade" id="modalTrial" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" style="max-width : fit-content;">
                        <div class="modal-content">
                            <div class="modal-header" style="background: #EFEFEF;">
                                <h5 class="modal-title" style="color: #575757;font-size: 113%;padding: 2%;">Siap untuk
                                    lanjut omsetku enterprise?</h5>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <img src="{{ $baseurl }}public/backend-asset/img/Group 240523.png"
                                        alt="" class="mb-4" style="max-width: 64%">
                                </center>
                                <center>
                                    <h5 style="margin-bottom :7px;">
                                        {{--  @if ($statusAccount == 'Expired Trial') --}}
                                        Trial
                                        {{--  @else
                                            {{ $statusAccount }}
                                        @endif
                                        anda habis dalam
                                        {{ $sisaccount }} Hari --}}
                                    </h5>
                                    <p class="mb-4">Kami harap Anda menikmati pengalaman Anda dengan <br> Langganan
                                        Omsetku sejauh ini. Inilah yang dapat Anda lakukan <br> untuk memastikan
                                        transisi yang mulus dari rencana uji coba:</p>
                                </center>
                                <center>
                                    <button onclick="location.href='{{ url('billing-system') }}';"
                                        class="btn btn-info mb-2" data-dismiss="modal" aria-label="Close"
                                        style="width: 69%;height: 44px;background: #1E3168;">Mulai Langganan</button>
                                </center>
                                <center>
                                    <button onclick="location.href='{{ url('logout') }}';" class="btn btn-info"
                                        data-dismiss="modal" aria-label="Close"
                                        style="width: 69%;height: 44px;background: red;">Log Out</button>
                                </center>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalTrialNext" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" style="max-width : fit-content;">
                        <div class="modal-content">
                            <div class="modal-header" style="background: #EFEFEF;">
                                <h5 class="modal-title" style="color: #575757;font-size: 113%;padding: 2%;">Siap untuk
                                    lanjut omsetku enterprise?</h5>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <img src="{{-- {{ asset('backend-asset/img/limit.svg') }} --}}" alt="" class="mb-4"
                                        style="max-width: 64%">
                                </center>
                                <center>
                                    <h5 style="margin-bottom :7px;" class="mb-50 ml-20 mr-20">Maaf Anda Sudah Mencapai
                                        Limit Untuk <br> Menambah Data Anda. Silahkan Mulai <br> Langganan untuk tambah
                                        data lebih banyak</h5>
                                    {{-- <p class="mb-4">Kami harap Anda menikmati pengalaman Anda dengan <br> Langganan
                                        Omsetku sejauh ini. Inilah yang dapat Anda lakukan <br> untuk memastikan
                                        transisi yang mulus dari rencana uji coba:</p> --}}
                                </center>
                                <center>
                                    <button onclick="/*  */" class="btn btn-info mb-2" data-dismiss="modal"
                                        aria-label="Close" style="width: 69%;height: 44px;background: #1E3168;">Mulai
                                        Langganan</button>
                                </center>
                                <center>
                                    {{-- <button onclick="location.href=''" class="btn btn-info"
                                        data-dismiss="modal" aria-label="Close"
                                        style="    width: 69%;
                                        height: 44px;
                                        background: #ffffff42;
                                        color: #000000;">Batal</button> --}}
                                    <button type="button" class="btn mx-1 btn-outline-done" data-dismiss="modal"
                                        style="    width: 69%;
                                           height: 44px;
                                           background: #ffffff42;
                                           color: #1E3168;">Nanti
                                        Saja</button>
                                </center>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalTrialFirst" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" style="max-width : fit-content;">
                        <div class="modal-content">
                            <div class="modal-header" style="background: #EFEFEF;">
                                <h5 class="modal-title" style="color: #575757;font-size: 113%;padding: 2%;">Siap untuk
                                    lanjut omsetku enterprise?</h5>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <img src="{{ $baseurl }}backend-asset/img/Finance Calculator.png"
                                        alt="" class="mb-4" style="max-width: 64%">
                                </center>
                                <center>
                                    <h5 style="margin-bottom :7px;" class="ml-20 mr-20" style="font-weight:700">
                                        Selamat Datang Di Omsetku Enterprise <br>
                                        Penawaran Khusus Untuk Anda Trial 14 Hari</h5>
                                    <p class="mb-4">Coba pengalaman baru menggunakan Omsetku Enterprise, <br>
                                        Akses semua fitur tanpa batas. Ayo tingkatkan omset penjualan anda <br>
                                        sekarang</p>
                                </center>
                                <center>
                                    <button onclick="location.href='';" class="btn btn-info mb-2"
                                        data-dismiss="modal" aria-label="Close"
                                        style="width: 69%;height: 44px;background: #1E3168;">Mulai Trial</button>
                                </center>
                                <center>
                                    <button onclick="" class="btn btn-info" data-dismiss="modal"
                                        aria-label="Close" style="width: 69%;height: 44px;background: red;">Log
                                        Out</button>
                                </center>
                                <center>
                            </div>

                        </div>
                    </div>
                </div>
                @yield('content')
            </main>

        </div>

        {{-- <div class="modal-ajax">Place at bottom of page</div> --}}

        <!-- END Page Container -->



        <!--------------------------------------- POP-UP --------------------------------------->

        <!----- Pop-up welcome ----->

        <?php
        $header = 'Getting Started';
        $text_img = 'Omset';
        $title = 'Welcome to Omsetku!';
        $text_content1 = '<p>Lets start the easier way to make your sales get <b>better and provitable.</b></p>';
        $text_content2 = 'Functional feature on dashboard to monitor your sales activity and sales flow.';
        $text_content3 = 'What will you get on omsetku dashboard';
        $icon_delete = 'Vector-close-button.png';
        $img_main = 'geting started - img.png';
        $list_card = [
            [
                'title' => 'Sales Order',
                'vision' => 'To Monitor',
                'icon' => 'icon 1.png',
            ],
            [
                'title' => 'Quotation',
                'vision' => 'To Deal',
                'icon' => 'icon 2.png',
            ],
            [
                'title' => 'Invoice',
                'vision' => 'To Bill',
                'icon' => 'icon 3.png',
            ],
        ];
        ?>

        <div class="modal fade welcome-popup" id="welcome-popup" tabindex="-1" aria-labelledby="welcome-popupLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="welcome-popupLabel">{{ $header }}</h5>
                        <button type="button" class="close pop-up-welcome" data-dismiss="modal" aria-label="Close">
                            <!-- <span aria-hidden="true">&times;</span> -->
                            <img src="{{ $baseurl }}/public/backend-asset/img/getting-started/' . $icon_delete"
                                alt="" srcset="">
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5 col-lg-5 image-pop-up">
                                <img src="{{ $baseurl }}/public/backend-asset/img/getting-started/' . $img_main"
                                    alt="" srcset="" style="width: 100%">
                            </div>

                            <div class="col-md-7 col-lg-7 content-pop-up">
                                <div class="row">

                                    <div class="col-md-12 col-lg-12 title-pop-up">
                                        <h1>{{ $title }}</h1>
                                        <?php echo $text_content1; ?>
                                        <hr>
                                    </div>

                                    <div class="col-md-12 col-lg-12 ">
                                        <div class="row">

                                            <div class="col-md-12 col-lg-12">
                                                <p>{{ $text_content2 }}</p>
                                                <p style="font-weight: bold;">{{ $text_content3 }}</p>
                                            </div>

                                            <div class="col-md-12 col-lg-12 pop-up-card-list">
                                                <div class="row">

                                                    @for ($idx = 0; $idx < count($list_card); $idx++)
                                                        <div class="col-md-4 col-lg-4 card px-1">

                                                            <div class="card-body">

                                                                <div class="row">
                                                                    <div
                                                                        class="col-md-5 col-lg-5 pr-1 d-flex justify-content-center">
                                                                        <img src="{{ $baseurl }}/public/backend-asset/img/getting-started/' . $list_card[$idx]['icon']"
                                                                            alt="" srcset="">
                                                                    </div>
                                                                    <div
                                                                        class="col-md-7 col-lg-7 px-1 d-flex align-items-center">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-lg-12">
                                                                                <h5 class="card-title">
                                                                                    {{ $list_card[$idx]['title'] }}
                                                                                </h5>
                                                                            </div>
                                                                            <div class="col-md-12 col-lg-12">
                                                                                <p class="card-text">
                                                                                    {{ $list_card[$idx]['vision'] }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    @endfor

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="modal-footer"> -->
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                    <!-- </div> -->

                </div>
            </div>
        </div>
        <!----- end Pop-up welcome ----->

        {{-- TAMBAH COMPANY --}}
        <div class="modal fade " id="formCompany" tabindex="-1" role="dialog" aria-labelledby="modal-slideup"
            aria-hidden="true">
            {{-- <div class="modal fade welcome-popup" id="welcome-popup" tabindex="-1" aria-labelledby="welcome-popupLabel"
        aria-hidden="true"> --}}
            <div class="modal-dialog modal-dialog-slideup" role="document">
                <div class="modal-content">
                    <div class=" block-themed block-transparent mb-0 ">
                        <div class="block-header bg-head-grey">
                            <h3 class="block-title label-form-blue"><img
                                    src="{{ $baseurl }}public/backend-asset/img/Group 1310.png"
                                    class="width-35">&nbsp; Tambah Company</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option label-form-blue" data-dismiss="modal"
                                    aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="{{ url('tambah-company') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row ml-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="label-form-blue">Nama Perusahaan <span
                                                            class="txt-red">*</span></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="nama_company"
                                                        class="input-sm form-control bx-shdw-form"
                                                        placeholder="Ketik nama Company"
                                                        value="{{ old('nama_company') }}" required>
                                                    <small id="emailHelp"
                                                        class="form-text text-muted">{{ $errors->first('nama_company') }}</small>
                                                    <small id="errNama" class="txt-err"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="label-form-blue">No Telp <span
                                                            class="txt-red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="tel" class="form-control bx-shdw-form"
                                                        placeholder="Ketik No Telp" id="no_telp_company"
                                                        name="no_telp_company" value="{{ old('no_telp_company') }}"
                                                        onkeypress="validate(event)" required>
                                                    <small id="no_telp"
                                                        class="form-text text-muted">{{ $errors->first('no_telp_company') }}</small>
                                                    <small id="errTelp" class="txt-err"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="label-form-blue">Alamat <span
                                                            class="txt-red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <textarea name="alamat_company" id="alamat_company" cols="20" rows="3"
                                                        class="form-control  bx-shdw-form" required>{{ old('alamat_company') }}</textarea>
                                                    <small
                                                        class="form-text text-muted">{{ $errors->first('alamat_company') }}</small>
                                                    <small id="errAlamat" class="txt-err"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer no-bd-t">
                        <button class="btn btn-simpan" type="submit">Simpan</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>

        {{--  @foreach ($check_company as $companys) --}}
        <!-- START Modal Edit Form Company -->
        <div class="modal fade" id="ubahCompany{{-- {{ $companys->id }} --}}" tabindex="-1" role="dialog"
            aria-labelledby="modal-slideup" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideup" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0 ">
                        <div class="block-header bg-blue-primary">
                            <h3 class="block-title label-form-blue">&nbsp; Ubah Company</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option label-form-blue" data-dismiss="modal"
                                    aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="{{-- {{ url('ubah-company/' . $companys->id) }} --}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row ml-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="label-form-blue">Nama Perusahaan <span
                                                            class="txt-red">*</span></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="nama_company_edit"
                                                        style="width: 100% !important;"
                                                        class="input-sm input--modal form-control bx-shdw-form"
                                                        placeholder="Ketik nama Company"
                                                        value="{{-- {{ $companys->nama }} --}}" required>
                                                    <small id="emailHelp"
                                                        class="form-text text-muted">{{-- {{ $errors->first('nama_company_edit') }} --}}</small>
                                                    <small id="errNama" class="txt-err"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="label-form-blue">No Telp <span
                                                            class="txt-red">*</span></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="tel" style="width: 100% !important;"
                                                        class="form-control input--modal bx-shdw-form"
                                                        placeholder="Ketik No Telp" name="no_telp_edit_company"
                                                        value="{{-- {{ $companys->no_telp }} --}}"
                                                        onkeypress="/* validate(event) */" required>
                                                    <small id="no_telp"
                                                        class="form-text text-muted">{{-- {{ $errors->first('no_telp_edit_company') }} --}}</small>
                                                    <small id="errTelp" class="txt-err"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="label-form-blue">Alamat <span
                                                            class="txt-red">*</span></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="alamat_edit_company" style="width: 100% !important;" cols="20" rows="3"
                                                        class="form-control input--modal  bx-shdw-form" required>{{-- {{ $companys->alamat }} --}}</textarea>
                                                    <small class="form-text text-muted">{{-- {{ $errors->first('alamat_edit_company') }} --}}</small>
                                                    <small id="errAlamat" class="txt-err"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer no-bd-t">
                        <button class="btn btn-simpan" type="submit">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade alert-popup" id="staticBackdropAlert" tabindex="-1"
            aria-labelledby="staticBackdropAlertLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <img src="{{ $baseurl }}public/backend-asset/img/popup/popup - duplicate.png"
                            alt="" class="icon-img-alert">
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title" id="staticBackdropAlertLabel">Modal title</h5>
                        <h5 class="modal-desc">Modal title</h5>
                    </div>
                    <div class="modal-footer text-center">
                        <div class="confirm-button">
                            <a href="#" class="link-confirm mx-1">

                            </a>
                            <button type="button" class="btn mx-1 btn-outline-done"
                                data-dismiss="modal">Close</button>
                        </div>
                        <div class="alert-notif-button">
                            <button type="button" class="btn btn-outline-done" data-dismiss="modal">Done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade alert-popup-expired" id="staticBackdropAlert" tabindex="-1"
            aria-labelledby="staticBackdropAlertLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <img src="{{ $baseurl }}public/backend-asset/img/popup/popup - duplicate.png"
                            alt="" class="icon-img-alert">
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title" id="staticBackdropAlertLabel">Modal title</h5>
                        <h5 class="modal-desc">Modal title</h5>
                    </div>
                    <div class="modal-footer text-center">
                        <div class="confirm-button">
                            <a href="#" class="link-confirm mx-1">

                            </a>
                            <button type="button" class="btn mx-1 btn-outline-done"
                                data-dismiss="modal">Close</button>
                        </div>
                        <div class="alert-notif-button">
                            <button type="button" class="btn btn-outline-done" data-dismiss="modal">Done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade form-popup-sm" id="staticBackdropAlert" tabindex="-1"
            aria-labelledby="staticBackdropAlertLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered ">
                <div class="modal-content block-form">
                    <div class="modal-header bg-blue-primary">
                        <span class="font-size-h3 font-w800" id="formTitlePopUp"></span>
                        <button type="button" class="close pop-up-form" data-dismiss="modal" aria-label="Close">
                            <img src="{{ $baseurl }}/public/backend-asset/img/popup/' . $icon_delete"
                                alt="" srcset="">
                        </button>
                    </div>
                    <div class="modal-body p-4" id="divFormPopUp">

                    </div>
                    <div class="modal-footer text-center">
                        <div class="alert-notif-button">
                            <button type="button" id="saveFormInput" class="btn btn-primary-omsetku">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="position: fixed; top: 3rem; right: 3rem; z-index: 9999999;">
            <div id="toast--message" class="toast fade hide" data-delay="4000" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="row mx-0">
                    <div class="col-lg-3 col-md-3">
                        <div class="toast-notif-icon text-center">
                            <i class="fa fa-check-circle-o"></i>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 pl-0">
                        <div class="toast-header">
                            <h3 class="toast-notif-title mb-0"></h3>
                            <button type="button" class="ml-4 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            <h3 class="toast-notif-desc mb-0"></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        <script src="{{ $baseurl }}public/backend-asset/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="{{ $baseurl }}public/backend-asset/js/codebase.app_min.js?V=1"></script>
        <script src="{{ $baseurl }}public/backend-asset/js/laravel.app_min.js"></script>
        <script src="{{ $baseurl }}public/backend-asset/js/plugins/select2/js/select2.full.min.js"></script>
        <script src="{{ $baseurl }}public/backend-asset/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js">
        </script>
        <script src="{{ $baseurl }}public/backend-asset/js/plugins/es6-promise/es6-promise.auto.min.js"></script>
        <script src="{{ $baseurl }}public/backend-asset/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script src="{{ $baseurl }}public/backend-asset/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
        @yield('js_after')
        <script>
            function sudahExport() {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'File Sudah di Export'
                });
            }
            jQuery(document).ready(function($) {
                $('#example').DataTable();
            });
            $('.delete-so').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - hapus.png') }}";
                var messageTitlePopup = 'Delete Sales Order';
                var messageDescPopup = 'Do you want to delete this Sales Order?';

                var dataIdSO = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('delete-sales-order') }}' + '/' + dataIdSO)
                $('.alert-popup .link-confirm').html('<button type="button" class="btn btn-danger">Delete</button>');
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.status-expireds').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/expired.svg') }}";
                var messageTitlePopup = 'Expired!';
                var messageDescPopup = 'Your data has been expired';

                var dataIdQuotation = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('delete-quotation') }}' + '/' + dataIdQuotation)
                $('.alert-popup .link-confirm').hide();
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.status-closes').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/expired.svg') }}";
                var messageTitlePopup = 'Close!';
                var messageDescPopup = 'Your data has been close';

                var dataIdQuotation = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('delete-quotation') }}' + '/' + dataIdQuotation)
                $('.alert-popup .link-confirm').hide();
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.delete-invoice').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - hapus.png') }}";
                var messageTitlePopup = 'Delete Invoice';
                var messageDescPopup = 'Do you want to delete this Invoice?';

                var dataIdInvoice = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('delete-invoice') }}' + '/' + dataIdInvoice)
                $('.alert-popup .link-confirm').html('<button type="button" class="btn btn-danger">Delete</button>');
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.delete-quotation').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - hapus.png') }}";
                var messageTitlePopup = 'Delete Quotation';
                var messageDescPopup = 'Do you want to delete this Quotation?';

                var dataIdInvoice = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('delete-quotation') }}' + '/' + dataIdInvoice)
                $('.alert-popup .link-confirm').html('<button type="button" class="btn btn-danger">Delete</button>');
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })


            $('.convert-quotation').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup-convert.svg') }}";
                var messageTitlePopup = 'Ingin Convert ke SO?';
                var messageDescPopup = 'Anda yakin ingin convert Quotation ke Sales Order?';

                var dataIdQuotation = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('convert-quotation') }}' + '/' + dataIdQuotation)
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Lanjutkan</button>'
                );
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.convert-invoice').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup-convert.svg') }}";
                var messageTitlePopup = 'Ingin Convert ke Invoice?';
                var messageDescPopup = 'Anda Akan Melewati Kirim Email!';

                var dataIdQuotation = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('convert-invoice') }}' + '/' + dataIdQuotation)
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Lanjutkan</button>'
                );
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.convert-invoice-after-email').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup-convert.svg') }}";
                var messageTitlePopup = 'Ingin Convert ke Invoice?';
                var messageDescPopup = 'Anda yakiin ingin convert SO ke Invoice?';

                var dataIdQuotation = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('convert-invoice') }}' + '/' + dataIdQuotation)
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Lanjutkan</button>'
                );
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })


            $('.paid-invoice').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/ubah-status.svg') }}";
                var messageTitlePopup = 'Ingin Mengubah Status?';
                var messageDescPopup = 'Apakah anda yakin ingin mengubah status pesanan?';

                var dataIdInvoice = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('status-paid-invoice') }}' + '/' + dataIdInvoice)
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Lanjutkan</button>'
                );
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.unpaid-invoice').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/ubah-status-2.svg') }}";
                var messageTitlePopup = 'Ingin Mengubah Status?';
                var messageDescPopup = 'Apakah anda yakin ingin mengubah status pesanan?';

                var dataIdInvoice = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('status-unpaid-invoice') }}' + '/' +
                    dataIdInvoice)
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Lanjutkan</button>'
                );
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })


            $('.deal-view').on('click', '.deleteDataBtn', function() {
                var dataId = $(this).attr('data-id');
                var dataType = $(this).attr('data-type');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: ApibaseURL + "/check-exist-data-delete",
                    data: {
                        id: dataId,
                        type: dataType,
                    },
                    dataType: 'json',
                    success: function(data) {
                        ConfirmDelete(dataId, dataType);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            })
            $('#tbdData').on('click', '.deleteDataBtn', function() {

                var dataId = $(this).attr('data-id');
                var dataType = $(this).attr('data-type');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: ApibaseURL + "/check-exist-data-delete",
                    data: {
                        id: dataId,
                        type: dataType,
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.msg == 'exists') {
                            AlertDelete(dataId, dataType);
                        } else {
                            ConfirmDelete(dataId, dataType);
                        }
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });

            })

            function ConfirmDelete(id, type) {
                $('.alert-popup .link-confirm').html('');
                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - hapus.png') }}";

                var dataId = id;
                var dataType = type;

                if (dataType == 'customer') {
                    var messageTitlePopup = 'Do you want to delete <br> this Customer?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                if (dataType == 'product') {
                    var messageTitlePopup = 'Do you want to delete <br> this Product?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                if (dataType == 'commission') {
                    var iconImgPopup =
                        "{{ asset('public/backend-asset/img/popup/popup - delete - commission - confirm.png') }}";
                    var messageTitlePopup = 'Do you want to delete <br> this Commission?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                if (dataType == 'reimburse') {
                    var iconImgPopup =
                        "{{ asset('public/backend-asset/img/popup/popup - delete - reimburse - confirm.png') }}";
                    var messageTitlePopup = 'Do you want to delete <br> this Reimburse?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                if (dataType == 'brand') {
                    var messageTitlePopup = 'Do you want to delete <br> this Brand?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                if (dataType == 'sales_order') {
                    var messageTitlePopup = 'Do you want to delete <br> this Sales Order?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                if (dataType == 'dealCRM') {
                    var messageTitlePopup = 'Do you want to delete <br> this Deal?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '#')
                $('.alert-popup .link-confirm').html('<button type="submit" form="formDelete' + dataId +
                    '" class="btn btn-danger">Delete</button>');
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            }

            function confirmUpdate(selector) {
                $('.alert-popup .link-confirm').html('');
                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                dataType = $(selector).attr('data-page');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit.png') }}";
                var messageTitlePopup = 'Update Data';
                var messageDescPopup = 'Are you sure want update this data?';

                if (dataType == 'customer') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit - product - confirm.png') }}";
                    var messageTitlePopup = messageTitlePopup + ' <br> Customer';
                }

                if (dataType == 'product') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit - brand - confirm.png') }}";
                    var messageTitlePopup = messageTitlePopup + ' <br> Product';
                }

                if (dataType == 'commission') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit - brand - confirm.png') }}";
                    var messageTitlePopup = messageTitlePopup + ' <br> Commission';
                }

                if (dataType == 'reimburse') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit - brand - confirm.png') }}";
                    var messageTitlePopup = messageTitlePopup + ' <br> Reimburse';
                }

                if (dataType == 'brand') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit - brand - confirm.png') }}";
                    var messageTitlePopup = messageTitlePopup + ' <br> Brand';
                }

                if (dataType == 'sales_order') {
                    var messageTitlePopup = messageTitlePopup + ' <br> Sales Order';
                }

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '#')
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Update</button>');
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            }

            function confirmConvert(selector) {
                $('.alert-popup .link-confirm').html('');
                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                dataType = $(selector).attr('data-page');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit.png') }}";
                var messageTitlePopup = 'Ingin Convert ke SO?';
                // var messageDescPopup = 'Are you sure want convert Quotation to Sales Order?';
                var messageDescPopup = 'Anda yakin ingin convert Quotation ke Sales Order?';

                var dataIdQuotation = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('convert-quotation') }}' + '/' + dataIdQuotation)
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Lanjutkan</button>');
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            }

            function AlertDelete(id, type) {
                $('.alert-popup .link-confirm').html('');
                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - alert - customer - delete.png') }}";

                var dataId = id;
                var dataType = type;

                if (dataType == 'customer') {
                    var messageTitlePopup = 'Customer Has Sales Order';
                    var messageDescPopup = 'You cannot delete, because this customer has sales order';
                }

                if (dataType == 'product') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - integrated - brand- alert.png') }}";
                    var messageTitlePopup = 'Product Has Sales Order';
                    var messageDescPopup = 'You cannot delete, because this product has sales order';
                }

                if (dataType == 'brand') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - integrated - brand- alert.png') }}";
                    var messageTitlePopup = 'Brand Has Product';
                    var messageDescPopup = 'You cannot delete, because this brand has product';
                }

                if (dataType == 'commission_update') {
                    var iconImgPopup =
                        "{{ asset('public/backend-asset/img/popup/popup - update - commission - alert.png') }}";
                    var messageTitlePopup = 'Successfully Update';
                    var messageDescPopup = 'Your data successfully status update';
                }

                $('.confirm-button').hide();
                $('.alert-notif-button').show();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            }


            //TOAST MESSAGE
            let session_has = "{{ Session::has('msg_toast') }}";
            let session_get = "{{ Session::get('msg_toast') }}";
            if (session_has) {

                let msgToastget = session_get.split("|");
                let keyWordToast = msgToastget[1];
                let statusToast = msgToastget[0];
                var msgToastText = "";
                if (typeof msgToastget[2] === 'undefined') {

                } else {
                    var msgToastText = msgToastget[2];
                }

                jQuery('#toast--message').toast('show');

                if (statusToast == 'success') {

                    if (keyWordToast == 'add') {
                        var messageTitleToast = 'Successfully Create Data';
                        var messageDescToast = 'Your data Successfully Created';
                    }

                    if (keyWordToast == 'delete') {
                        var messageTitleToast = 'Successfully Delete Data';
                        var messageDescToast = 'Your data Successfully Deleted';
                    }

                    $('#toast--message').removeClass('toast-failed');
                    $('#toast--message').addClass('toast-success');
                    $('#toast--message .toast-header .toast-notif-title').html(messageTitleToast);
                    $('#toast--message .toast-body .toast-notif-desc').html(messageDescToast);

                } else {

                    if (keyWordToast == 'add') {
                        if (msgToastText != "") {
                            var messageDescToast = msgToastText;
                        } else {
                            var messageDescToast = 'Your data Failed Created';
                        }
                        var messageTitleToast = 'Failed Create Data';
                    }

                    if (keyWordToast == 'update') {
                        var messageTitleToast = 'Failed update Data';
                        if (msgToastText != "") {
                            var messageDescToast = msgToastText;
                        } else {
                            var messageDescToast = 'Your data Failed Created';
                        }
                    }

                    if (keyWordToast == 'delete') {
                        var messageTitleToast = 'Failed Delete Data';
                        var messageDescToast = 'Your data Failed Deleted';
                    }

                    if (keyWordToast == 'open') {
                        var messageTitleToast = 'Failed Open Data';
                        var messageDescToast = msgToastget[2];
                    }

                    $('#toast--message').removeClass('toast-success');
                    $('#toast--message').addClass('toast-failed');
                    $('#toast--message .toast-header .toast-notif-title').html(messageTitleToast);
                    $('#toast--message .toast-body .toast-notif-desc').html(messageDescToast);

                }

                //END TOAST MESSAGE



                // has
                /*
                jQuery(function() {
                  Codebase.helpers('notify', {
                    align: 'right', // 'right', 'left', 'center'
                    from: 'top', // 'top', 'bottom'
                    type: '{{ in_array(Session::get('msg'), ['berhasil', 'Berhasil']) ? 'success' : 'danger' }}', // 'info', 'success', 'warning', 'danger'
                    icon: '{{ in_array(Session::get('msg'), ['berhasil', 'Berhasil']) ? 'fa fa-check-circle mr-5 ' : 'fa fa-times-circle mr-5' }}', // Icon class
                    message: '{{ Session::get('msg') }}'
                  });
                });
                */
            }

            //////////// MODAL POPUP ALERT ////////////
            let session_popup_has = "{{ Session::has('msg_popup') }}";
            let session_popup_get = "{{ Session::get('msg_popup') }}";
            if (session_popup_has) {

                let msgPopUpget = session_popup_get.split("|");
                let keyWordPopup = msgPopUpget[1];
                let statusPopup = msgPopUpget[0];

                var msgPopUpText = "";
                if (typeof msgPopUpget[2] === 'undefined') {

                } else {
                    var msgPopUpText = msgPopUpget[2];
                }

                if (keyWordPopup == 'add') {
                    if (msgPopUpText == 'brand') {
                        var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - add - brand.png') }}";
                    } else if (msgPopUpText == 'customer') {
                        var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - add - customer -alert.png') }}";
                    } else if (msgPopUpText == 'product') {
                        var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - add - product - alert.png') }}";
                    } else if (msgPopUpText == 'commission' || msgPopUpText == 'reimburse' || msgPopUpText == 'data_sales') {
                        var iconImgPopup =
                            "{{ asset('public/backend-asset/img/popup/popup - add - commission - alert.png') }}";
                    } else if (msgPopUpText == 'target_sales') {
                        var iconImgPopup =
                            "{{ asset('public/backend-asset/img/popup/popup - update - commission - alert.png') }}";
                    } else if (msgPopUpText == 'expense' || msgPopUpText == 'task') {
                        var iconImgPopup =
                            "{{ asset('public/backend-asset/img/popup/omsetku-popup-success.png') }}";
                    } else {
                        var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit.png') }}";
                    }
                }
                if (keyWordPopup == 'update') {
                    if (msgPopUpText == 'commission') {
                        var iconImgPopup =
                            "{{ asset('public/backend-asset/img/popup/popup - update edit - commission - alert.png') }}";
                    } else if (msgPopUpText == 'expense' || msgPopUpText == 'task') {
                        var iconImgPopup =
                            "{{ asset('public/backend-asset/img/popup/omsetku-popup-success.png') }}";
                    } else {
                        var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit.png') }}";
                    }
                }

                if (keyWordPopup == 'update-company') {

                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit.png') }}";

                }

                if (keyWordPopup == 'email') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/send-email.svg') }}";
                }


                if (keyWordPopup == 'duplicate') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - duplicate.png') }}";
                }

                if (keyWordPopup == 'access') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - add - customer -alert.png') }}";
                }

                $('.confirm-button').hide();
                $('.alert-notif-button').show();

                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });

                if (statusPopup == 'success') {

                    if (keyWordPopup == 'update') {
                        var baseTextTitle = 'Successfully Update';
                        var messageDescPopup = 'Your data Successfully Updated';
                    }

                    if (keyWordPopup == 'update-company') {
                        var baseTextTitle = 'Successfully Moved';
                        var messageDescPopup = 'Your Company Successfully Moved';
                    }

                    if (keyWordPopup == 'add') {
                        var baseTextTitle = 'Successfully Created';
                        var messageDescPopup = 'Your data Successfully Created';
                    }

                    if (keyWordPopup == 'email') {
                        var baseTextTitle = 'Successfully Send Email';
                        var messageDescPopup = 'Your data Successfully Send';
                    }

                    if (keyWordPopup == 'invite') {
                        var baseTextTitle = 'Successfully Invited';
                        var messageDescPopup = 'Your Sales Successfully Invited';
                    }

                    if (msgPopUpText == 'brand') {
                        var messageTitlePopup = baseTextTitle + ' Brand';
                    } else if (msgPopUpText == 'billing') {
                        var messageTitlePopup = baseTextTitle + ' Master Billing';
                    } else if (msgPopUpText == 'bank') {
                        var messageTitlePopup = baseTextTitle + ' Master Bank';
                    } else if (msgPopUpText == 'customer') {
                        var messageTitlePopup = baseTextTitle + ' Customer';
                    } else if (msgPopUpText == 'product') {
                        var messageTitlePopup = baseTextTitle + ' Product';
                    } else if (msgPopUpText == 'commission') {
                        var messageTitlePopup = baseTextTitle + ' Commission';
                    } else if (msgPopUpText == 'reimburse') {
                        var messageTitlePopup = baseTextTitle + ' Reimburse';
                    } else if (msgPopUpText == 'target_sales') {
                        var messageTitlePopup = baseTextTitle + ' Target Sales';
                    } else if (msgPopUpText == 'data_sales') {
                        var messageTitlePopup = baseTextTitle + ' Data Sales';
                    } else if (msgPopUpText == 'company') {
                        var messageTitlePopup = baseTextTitle + ' Company';
                    } else if (msgPopUpText == 'email-quotation') {
                        var messageTitlePopup = baseTextTitle + ' Quotation';
                    } else if (msgPopUpText == 'email-so') {
                        var messageTitlePopup = baseTextTitle + ' Sales Order';
                    } else if (msgPopUpText == 'email-invoice') {
                        var messageTitlePopup = baseTextTitle + ' Invoice';
                    } else if (msgPopUpText == 'update-company') {
                        var messageTitlePopup = baseTextTitle + ' Company';
                    } else {
                        var messageTitlePopup = baseTextTitle + ' Data';
                    }

                    if (keyWordPopup == 'duplicate') {
                        var messageTitlePopup = 'Successfully Duplicate Data';
                        var messageDescPopup = 'Your data Successfully Duplicated';
                    }

                    $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                    $('.alert-popup .modal-title').html(messageTitlePopup);
                    $('.alert-popup .modal-desc').html(messageDescPopup);

                } else {

                    if (keyWordPopup == 'update') {
                        var messageTitlePopup = 'Failed Update Data';
                        var messageDescPopup = 'Your data Failed Updated';
                    }

                    if (keyWordPopup == 'update-company') {
                        var messageTitlePopup = 'Failed Moved Company';
                        var messageDescPopup = 'Your data Failed Updated';
                    }

                    if (keyWordPopup == 'duplicate') {
                        var messageTitlePopup = 'Failed Duplicate Data';
                        var messageDescPopup = 'Your data Failed Duplicated';
                    }

                    if (keyWordPopup == 'email') {
                        var messageTitlePopup = 'Failed Send Email';
                        var messageDescPopup = 'Your data Failed Send';
                    }

                    if (keyWordPopup == 'invite') {
                        // var baseTextTitle = 'Failed Invited';
                        var messageTitlePopup = 'Failed Invited';
                        var messageDescPopup = 'Your Sales is not registered';
                    }

                    if (keyWordPopup == 'access') {
                        // var baseTextTitle = 'Failed Access';
                        var messageTitlePopup = 'Failed Access';
                        var messageDescPopup = 'Your account is not allowed to access';
                    }

                    $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                    $('.alert-popup .modal-title').html(messageTitlePopup);
                    $('.alert-popup .modal-desc').html(messageDescPopup);

                }
            }

            //END MODAL POPUP ALERT

            // {{-- @endif --}}

            @if (Session::has('msg_harga'))
                jQuery(function() {
                    Codebase.helpers('notify', {
                        align: 'right', // 'right', 'left', 'center'
                        from: 'top', // 'top', 'bottom'
                        type: 'danger', // 'info', 'success', 'warning', 'danger'
                        icon: 'fa fa-check-circle mr-5', // Icon class
                        @if (Session::get('msg_harga') == 'harga_1')
                            message: 'Harga 1 tidak boleh kurang dari harga terendah'
                        @elseif (Session::get('msg_harga') == 'harga_2')
                            message: 'Harga 2 tidak boleh kurang dari harga terendah'
                        @elseif (Session::get('msg_harga') == 'harga_3')
                            message: 'Harga 3 tidak boleh kurang dari harga terendah'
                        @elseif (Session::get('msg_harga') == 'harga_4')
                            message: 'Harga 4 tidak boleh kurang dari harga terendah'
                        @elseif (Session::get('msg_harga') == 'harga_5')
                            message: 'Harga 5 tidak boleh kurang dari harga terendah'
                        @endif
                    });
                });
            @endif


            @if (Session::has('msgr'))

                jQuery(function() {
                    Codebase.helpers('notify', {
                        align: 'right', // 'right', 'left', 'center'
                        from: 'top', // 'top', 'bottom'
                        type: '{{ Session::get('msgr') == 'berhasil' ? 'success' : 'danger' }}', // 'info', 'success', 'warning', 'danger'
                        icon: '{{ Session::get('msgr') == 'berhasil' ? 'fa fa-check-circle mr-5 ' : 'fa fa-times-circle mr-5 ' }}', // Icon class
                        message: '{{ Session::get('msgr') == 'berhasil' ? 'Data Excel Berhasil Diimport!' : 'Row Excel Ada Yang Kosong / Format Salah / Data Sudah Ada!' }}'
                    });
                });
            @endif

            @if (Session::has('msgs'))
                jQuery(function() {
                    Codebase.helpers('notify', {
                        align: 'right', // 'right', 'left', 'center'
                        from: 'top', // 'top', 'bottom'
                        type: '{{ Session::get('msgs ') == 'berhasil' ? 'success ' : 'danger ' }}', // 'info', 'success', 'warning', 'danger'
                        icon: '{{ Session::get('msgs ') == 'berhasil' ? 'fa fa-check-circle mr-5 ' : 'fa fa-times-circle mr-5 ' }}', // Icon class
                        message: '{{ Session::get('msgs ') == 'berhasil' ? 'Data Excel Berhasil Diimport!' : 'Row Excel Ada Yang Kosong / Format Salah!' }}'
                    });
                });
            @endif

            @if (Session::has('msg_export'))
                @if (Session::get('msg_export') == 'berhasil')
                    jQuery(function() {
                        Codebase.helpers('notify', {
                            align: 'right', // 'right', 'left', 'center'
                            from: 'top', // 'top', 'bottom'
                            type: '{{ Session::get('msg_export ') == 'berhasil' ? 'success ' : 'danger ' }}', // 'info', 'success', 'warning', 'danger'
                            icon: '{{ Session::get('msg_export ') == 'berhasil' ? 'fa fa-check-circle mr-5 ' : 'fa fa-times-circle mr-5 ' }}', // Icon class
                            message: '{{ Session::get('msg_export ') == 'berhasil' ? 'Data Excel Berhasil Diexport!' : 'Data Excel Gagal Diexport!' }}'
                        });
                    });
                @endif
            @endif

            @if (Session::has('failed'))
                jQuery(function() {
                    Codebase.helpers('notify', {
                        align: 'right', // 'right', 'left', 'center'
                        from: 'top', // 'top', 'bottom'
                        type: 'danger', // 'info', 'success', 'warning', 'danger'
                        icon: 'fa fa-times-circle mr-5', // Icon class
                        message: '{{ Session::get('
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          failed ') }}'
                    });
                });
            @endif


            @if (Session::has('message'))
                @if (Session::get('message') == 'sama')
                    $(function() {
                        var pesan = 'No PO sudah dipakai';
                        // printErrorMsg(pesan);
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'No PO sudah terpakai! silahkan menggunakan No PO lainnya'
                        });
                    });
                @endif
                @if (Session::get('message') == 'nama_barang')
                    $(function() {
                        var pesan = 'Barang Tidak Boleh Kosong';
                        // printErrorMsg(pesan);
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Barang Tidak Boleh Kosong'
                        });
                    });
                @endif
                @if (Session::get('message') == 'tanggal_keluar')
                    $(function() {
                        var pesan = 'Tanggal Keluar Tidak Boleh Kosong';
                        // printErrorMsg(pesan);
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Tanggal Keluar Tidak Boleh Kosong'
                        });
                    });
                @endif
                @if (Session::get('message') == 'data_ir')
                    $(function() {
                        var pesan =
                            'PO ini terdapat data Item Received, silahkan untuk menghapus terlebih dahulu data Item Received terkait!';
                        // printErrorMsg(pesan);
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'PO ini terdapat data Item Received, silahkan untuk menghapus terlebih dahulu data Item Received terkait!'
                        });
                    });
                @endif
                @if (Session::get('message') == 'data_do')
                    $(function() {
                        var pesan =
                            'PO ini terdapat data DO, silahkan untuk menghapus terlebih dahulu data DO terkait!';
                        // printErrorMsg(pesan);
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'PO ini terdapat data DO, silahkan untuk menghapus terlebih dahulu data DO terkait!'
                        });
                    });
                @endif
                @if (Session::get('message') == 'data_rec_p')

                    @if (Session::has('no_inv'))
                        var no_inv =
                            '{{ Session::get('
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  no_inv ') }}';
                    @else
                        var no_inv = '-';
                    @endif

                    $(function() {



                        var pesan =
                            'Invoice ini terdapat data Record Payment, silahkan untuk menghapus terlebih dahulu Record Payment Terkait!';
                        // printErrorMsg(pesan);
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Invoice ' + no_inv +
                                ' terdapat data Record Payment, silahkan untuk menghapus terlebih dahulu Record Payment Terkait!'
                        });
                    });
                @endif
            @endif


            @if (\Session::has('login'))
                @if (Session::get('login') == true)
                    // $(window).load(function() {

                    //     // $('#page-header-loader').hide();

                    //   });
                    $(document).ready(function() {
                        $('.modal-ajax').hide();
                        $('#page-loader').hide();
                    });
                @endif
            @else
            @endif

            //   $('.modal-ajax').hide();
            $(document).ready(function() {
                var tes = document.getElementById("jumlah_bayar");
                if (tes != null) {
                    tes.value = formatRupiah(document.getElementById("jumlah_bayar").value, "");
                }

                var tes_total = document.getElementById("total_format");
                if (tes_total != null) {
                    tes_total.value = formatRupiah(document.getElementById("total_format").value, "");
                }

                var harga_pembelian = document.getElementById("harga_pembelian");
                if (harga_pembelian != null) {
                    harga_pembelian.value = formatRupiah(document.getElementById("harga_pembelian").value, "");
                }

                var harga_penjualan = document.getElementById("harga_penjualan");
                if (harga_penjualan != null) {
                    harga_penjualan.value = formatRupiah(document.getElementById("harga_penjualan").value, "");
                }




                $(document).ajaxStart(function() {
                    // $(".modal-ajax").show();
                    $('#page-header-loader').show();
                }).ajaxStop(function() {
                    $('#page-header-loader').hide();
                    // $(".modal-ajax").hide();
                });
            });

            function hapusAlert(link) {

                Swal.fire({

                    title: 'Anda Yakin?',

                    text: "Anda Akan Menghapus Data Ini!",

                    type: 'warning',

                    showCancelButton: true,

                    confirmButtonColor: '#3085d6',

                    cancelButtonColor: '#d33',

                    confirmButtonText: 'Hapus Data!',

                    cancelButtonText: 'Batal',

                }).then((result) => {

                    if (result.value) {

                        window.location.href = '{{ url('/') . '/' }}' + link;

                    }

                });

            }

            var rph = document.getElementById("jumlah_bayar");
            if (rph != null) {
                rph.addEventListener("keyup", function(e) {
                    // tambahkan 'Rp.' pada saat form di ketik
                    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                    rph.value = formatRupiah(this.value, "");
                });
            }

            var total_format = document.getElementById("total_format");
            if (total_format != null) {
                total_format.addEventListener("keyup", function(e) {
                    // tambahkan 'Rp.' pada saat form di ketik
                    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                    total_format.value = formatRupiah(this.value, "");
                });
            }

            var harga_pembelian = document.getElementById("harga_pembelian");

            if (harga_pembelian != null) {
                harga_pembelian.addEventListener("keyup", function(e) {
                    // tambahkan 'Rp.' pada saat form di ketik
                    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                    harga_pembelian.value = formatRupiah(this.value, "");
                });
            }

            var harga_penjualan = document.getElementById("harga_penjualan");

            if (harga_penjualan != null) {
                harga_penjualan.addEventListener("keyup", function(e) {
                    // tambahkan 'Rp.' pada saat form di ketik
                    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                    harga_penjualan.value = formatRupiah(this.value, "");
                });
            }

            // var subtotal_id = document.getElementById("subtotal_id");

            // if (subtotal_id != null) {
            //     subtotal_id.addEventListener("keyup", function(e) {
            //   // tambahkan 'Rp.' pada saat form di ketik
            //   // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            //   subtotal_id.value = formatRupiah(this.value, "");
            // });
            // }



            function formatRupiah(angka, prefix) {
                var number_string = angka.replace(/[^,\d]/g, "").toString(),
                    split = number_string.split(","),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                // tambahkan titik jika yang di input sudah menjadi angka ribuan
                if (ribuan) {
                    separator = sisa ? "." : "";
                    rupiah += separator + ribuan.join(".");
                }

                rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
                return prefix == undefined ? rupiah : rupiah ? "" + rupiah : "";
            }

            function viewIDCurrency(bilangan) {
                var number_string = bilangan.toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    length = split[0].length,
                    ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

                if (length > 3) {

                    if (ribuan) {
                        separator = sisa ? '.' : '';
                        rupiah += separator + ribuan.join('.');
                    }
                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                } else {
                    rupiah = number_string;
                }

                return rupiah;
            }


            function NotAllow() {
                Swal.fire({
                    type: 'error',
                    title: 'Tidak diizinkan!',
                    text: 'Kamu belum dapat mengakses!'
                });
            }

            function HaveApprove() {
                Swal.fire({
                    type: 'error',
                    title: 'Tidak diizinkan!',
                    text: 'Kamu sudah mendapatkan Approv! Tidak bisa me-request Approval Kembali'
                });
            }

            function redirectRow(url) {

                location.href = url;

            }

            function validate(evt) {
                var theEvent = evt || window.event;

                // Handle paste
                if (theEvent.type === 'paste') {
                    key = event.clipboardData.getData('text/plain');
                } else {
                    // Handle key press
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode(key);
                }

                var regex = /[0-9]/;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault) theEvent.preventDefault();
                }

            }
            $(function() {

                $("#due_date").datepicker({
                    startDate: '-0d',
                    changeMonth: true,
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });

                $("#date-target").datepicker({

                    changeMonth: true,
                    changeYear: true,
                    format: 'mm/yyyy',
                    /*autoclose: true,*/
                    showButtonPanel: true,
                    // todayHighlight: true,
                    onClose: function(dateText, inst) {
                        var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                        var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                        $(this).datepicker('setDate', new Date(year, month, 1));
                    }
                });

                $("#periodTarget").datepicker({

                    changeMonth: true,
                    changeYear: true,
                    format: "mm-yyyy",
                    startView: "months",
                    minViewMode: "months",
                    /*autoclose: true,*/
                    showButtonPanel: true,
                    // todayHighlight: true,
                    onClose: function(dateText, inst) {
                        var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                        var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                        $(this).datepicker('setDate', new Date(year, month, 1));
                    }
                });

                $(".bulanTarget").datepicker({

                    changeMonth: true,
                    changeYear: true,
                    format: "mm-yyyy",
                    startView: "months",
                    minViewMode: "months",
                    /*autoclose: true,*/
                    showButtonPanel: true,
                    // todayHighlight: true,
                    onClose: function(dateText, inst) {
                        var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                        var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                        $(this).datepicker('setDate', new Date(year, month, 1));
                    }
                });


                $("#datepicker").datepicker({
                    startDate: '01/01/1945',
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });
                $(".datepicker").datepicker({
                    startDate: '01/01/1945',
                    format: 'dd/mm/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });

                $(".datepicker-2").datepicker({
                    startDate: '01/01/1945',
                    format: 'dd/mm/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });

                $("#datepicker-2").datepicker({
                    startDate: '01/01/1945',
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });
                $("#datepicker-3").datepicker({
                    startDate: '01/01/1945',
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });
                $("#datepicker-4").datepicker({
                    startDate: '01/01/1945',
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });
                $("#datepicker-5").datepicker({
                    startDate: '01/01/1945',
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });
                $("#datepicker-6").datepicker({
                    startDate: '01/01/1945',
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });

            });

            var myText = document.getElementsByClassName("myText");

            for (var i = 0; i < myText.length; i++) {
                myText[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    if (current.length > 0) {
                        current[0].classList.remove("active");
                    }
                    this.classList.add("active");
                });
            }
        </script>
        @yield('js_before')
    </body>

</html>
