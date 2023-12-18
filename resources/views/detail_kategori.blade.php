@extends('layouts.app-evamedia')

@section('title', 'Goodeva Technology Ai & iOT Enterprise')
{{-- Meta Section --}}

@section('meta_desc')
Wujudkan ide & mimpi dalam satu platform terintegrasi untuk membantu bisnis berkembang hebat bersama technology
@endsection

@section('meta_key')
Goodeva technology, goodeva software, goodeva, good evaluation, IT & digital solutions, jasa pembuatan aplikasi andorid, jasa pembuatan aplikasi ios, jasa pembuatan aplikasi website, smart safety, jasa penghubung api, perusahaan IT bekasi, perusahaan it jakarta
@endsection

@section('meta_auth')
goodeva
@endsection

@section('css_before')

<!-- ==== Document Title ==== -->
<title>Evamedia | {{ $kategori }}</title>
<!-- ==== Document Meta ==== -->
<meta name="author" content="Goodeva">
<meta name="description" content="">
<meta name="keywords" content="">
@endsection

{{-- End Meta Section --}}

@section('css_after')

    <link rel="stylesheet" href="{{asset('public/css/materialize.min.css')}}">



    <link rel="stylesheet" href="{{asset('public/css/slick.css')}}">



    <link rel="stylesheet" href="{{asset('public/css/slick-theme.css')}}">

    <link href="{{ asset('public/css/lity.css') }}" rel="stylesheet">


    <style>

        .hslide-area .slid-content img {

            height: 696px;

            object-fit: cover;

        }

        .hslide-area .slid-content img.char--info-img {

            height: auto !important;

        }





        .hslide-area .slick-dots li.slick-active button:before {

            opacity: 1;

            color: white;

        }



        .hslide-area .slick-dots li button:before {

            font-size: 9px;

            top: -35px;

            color: white;

        }



        .hslide-area .slid-content {

            position: relative;

        }


        .mt-6rem{
            margin-top:6rem !important;
        }

        .mt-10rem{
            margin-top: 10rem !important;
        }



        .txt-header-right, .txt-header-right-hp, .txt-header-left {

            position: absolute;

            /* top: 54%;

            left: 76%; */

            top: 50%;

            left: 77%;

            padding-right: 3rem;

            -webkit-transform: translate(-50%, -50%);

            transform: translate(-50%, -50%);

            color: white;

            font-size: 46px;

            -webkit-transition: all 300ms ease;

            transition: all 300ms ease;

        }



        #hslide-area-mobile .slid-content .txt-header-right-hp{
            position: absolute;

            /* top: 54%;

            left: 76%; */

            top: 10%;

            left: 5%;
        }

        #hslide-area-mobile .slick-track{
            min-height:736px
        }





        .txt-header-right-hp {

            /* padding-right: 7.5rem; */

        }



        .txt-header-left {

            top: 47% !important;

            left: 38% !important;

            padding-right: 22%;

        }



        .img-left-hp {

            position: absolute;

            top: 57.5% ;

            left: 24% ;

            height: 659px ;

            object-fit: contain ;

            -webkit-transform: translate(-50%, -50%);

            transform: translate(-50%, -50%);

            -webkit-transition: all 300ms ease;

            transition: all 300ms ease;

        }



        .img-left-worker {

            position: absolute;

            top: 57% ;

            left: 26% ;

            height: 597px ;

            object-fit: contain ;

            -webkit-transform: translate(-50%, -50%);

            transform: translate(-50%, -50%);

            -webkit-transition: all 300ms ease;

            transition: all 300ms ease;

        }



        /* Testimoni */

        .testimoni {

            padding: 8em 9em 6em 9em;

        }



        .testimoni h4 {

            color: #fff;

            font-size: 18px;

            font-weight: 200;

            letter-spacing: 0.32px;

            font-family: 'Inter', sans-serif !important;

            padding-right: 20%;

            line-height: 22px;

            margin-top: 16px;

        }



        .testimoni p {

            font-family: 'Inter', sans-serif;

            color: #fff;

            font-size: 14px !important;

            font-weight: 700;

            margin-top: 3.5em;

            margin-bottom: 0em;

        }



        .testimoni span {

            color: #fff;

            font-size: 14px !important;

            font-weight: 500;

        }



        .testimoni .p-putih {

            color: #fff;

            padding-bottom: 1em;

            font-weight: 200;

            font-size: 14px !important;

            letter-spacing: 0.07px;

            margin-top: -5px;

        }



        .testimoni .box-box {

            border-radius: 7px;

            margin: -2em -4em 0em 2em;

            min-height: 250px;

            background: #133A72;

            padding-left: 5px;

            width: 520px;

            padding: 15px;

        }



        .testimoni .lay {

            z-index: 0;

        }



        .testimoni .img-customer {

            padding: 2em 11em 3em 1em;

            padding-bottom: 0 !important;

        }



        .testimoni .img-customer img {

            width: 40px;

        }

        .testimoni .img-customer img.kpp-logo {

            width: 50px;

        }



        /* .container-jud-testi{

            padding: 3em 10em 1em 10em;

        }



        .container-jud-testi h2{

            font-family: 'Open Sans' ;

            color: #2a3271;

            font-weight: 700;

            font-size: 34px;

            line-height: 1.1;

            text-align: center;

        }



        .container-jud-testi .skyni{

            font-weight: 400;

        }

        .container-jud-testi .t-col{

            position: relative;

            padding: 0 .1em;

            color: #2a3271;

            font-weight: 700;

        }



        .container-jud-testi .t-col:after{

            content: "";

            position: absolute;

            bottom: 5px;

            left: -2px;

            width: 100%;

            height: 35%;

            background-color: #fed596;

            z-index: -10;

            -webkit-transition: all .1s linear;

            -moz-transition: all .1s linear;

            transition: all .1s linear;

        } */

        .txt-header-right h2 {



            font-weight: 600;

        }

        .txt-header-right-hp h2{

            font-weight: 600;
        }


        @media screen and (max-width: 1515px) {

            .txt-header-right h2 {

                font-size: 54px !important;
                line-height: 64px;
                font-weight: 600;

            }

            .txt-header-right-hp h2{
                font-size: 54px !important;
                line-height: 64px;
            }

        }

        @media (min-width:767px){
            .slick-dotted.slick-slider{
                margin-bottom: 0;
            }

            .info-card .card-safety img{
                right: 82px;
            }
        }




        @media screen and (max-width: 767px) {

            .txt-header-right-hp h2 {

                font-size: 30px !important;


            }

            .header .navbar{

            background: transparent;

            }

            .testimoni-h .slick-dots li button:before {
                top: 14px !important;
            }

            .testimoni .lay {

                /* margin-top: 2rem ; */

            }


            /* .header .navbar .navbar-nav > li > a {

            color: #fff;

            } */

            /* Slider Card */

            .btn-lihat-detail {
                border-radius: 8px;
                padding: 2px 36px;
            }

            .btn-lihat-detail span {
                font-size: 14.5px;
            }

            .info-card .card-safety .text-judul {
                color: #FFA200 !important;
                font-weight: 300;
                font-size: 12.5px;
            }

            .info-card .card-safety p {
                font-size: 18px !important;
                line-height: 24px;
            }

            #infocard_slider .slick-center .h-box-f,
            #infocard_slider .slick-slide[aria-hidden="true"]:not([tabindex="-1"]) + .slick-cloned[aria-hidden="true"] .h-box-f{
                height: 425px !important;
                margin-top: 0 !important;
                -webkit-transition: all 1s cubic-bezier(0.39, 0.58, 0.57, 1);
            }



            #infocard_slider .slick-slide .h-box-f,
            #infocard_slider .slick-slide[aria-hidden="true"]:not(.slick-cloned) ~ .slick-cloned[aria-hidden="true"] .h-box-f{
                height: 390px;
                margin-top: 2rem;
                -webkit-transition: all 1s cubic-bezier(0.39, 0.58, 0.57, 1);
            }

            .info-card .card-safety span, .info-card .card-safety .text-judul {
                font-weight: 200;
            }

            .h-box-f {
                width: 300px !important;
            }

            #infocard_slider .slick-dots li.slick-active button:before {
                color: #63A6B3;
            }

            #infocard_slider .slick-dots li button:before {
                color: #63A6B3;
                top: 22px;
            }
            /* Akhir Slider Card */

            .col-sm-12 {

                width: 100%

            }

            .col-sm-11 {

                width: 91.66666667%

            }

            .col-sm-10 {

                width: 83.33333333%

            }

            .col-sm-9 {

                width: 75%

            }

            .col-sm-8 {

                width: 66.66666667%

            }

            .col-sm-7 {

                width: 58.33333333%

            }

            .col-sm-6 {

                width: 50%

            }

            .col-sm-5 {

                width: 41.66666667%

            }

            .col-sm-4 {

                width: 33.33333333%

            }

            .col-sm-3 {

                width: 25%

            }

            .col-sm-2 {

                width: 16.66666667%

            }

            .col-sm-1 {

                width: 8.33333333%

            }

            .section-watch-video .header h5 {
                font-size: 22px;
            }

            .testimoni h4 {
                font-size: 15px;
            }

            .testimoni span {
                font-size: 14px;
                margin-top: 5px;
                margin-bottom: -5px !important;
                display: block;
            }

            .testimoni .p-putih {
                font-size: 13px !important;
            }

            .testimoni h4 {
                font-size: 15px;
            }

            .testimoni span {
                font-size: 14px;
                margin-top: 5px;
                margin-bottom: -5px !important;
                display: block;
            }

            .testimoni .p-putih {
                font-size: 13px !important;
            }

            .content-title span {
                font-size: 28px;
            }
            .fitur img{
                box-shadow: 0px 3px 25px #0000002E;
                margin-top:-54px!important;
                border-radius: 10px;
            }

            .pt-sm-1-5rem{
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .section-compannies.liputan{
                padding-bottom: 1.5rem !important;
            }

            .w-100p{
                width: 100%;
            }

        }



        .btn-started > span {

            display: inherit;

            /* color: #000; */

            font-size: 14px;

            line-height: 0;

            font-weight: 600;

        }



        .btn-started > i {

            font-size: 11px;

        }

        @media screen and (max-width: 770px){

            .testimoni .box-box{

                margin: -2em -3em 0em -3em;

                height: 280px;

            }



            .testimoni .max-img{

                width: 347px;

                height: 275px;

                margin-left: 1em;

            }



            .testimoni h4{

                font-size: 13px;

            }



        }



        @media screen and (max-width: 450px){

            /* .container-jud-testi .t-col:after{

                height: 20%;

            } */

            /* .testimoni{

                padding: 2em 2em 2em 2em;

            } */

            .testimoni-h .slick-dots li button:before {

            left: 0px !important;

            }

            .testimoni .box-box{

                margin: -1em -14em 0em 0em;

            }



            .testimoni p{

                margin-top: 3.5em;

                font-size: 11px;

            }



            .testimoni .hid{

                display: none;

            }



            /* .container-jud-testi{

                padding: 0;

            }



            .container-jud-testi h2{

                font-size: 20px;

                padding-top: 2em;

            } */

        }



        .testimoni-h .slick-dots{

			background: transparent;

		}



        .testimoni-h .slick-dots li.slick-active button:before {

            opacity: 1;

            color: #63A6B3;

        }



        .testimoni-h .slid-content {

            position: relative;

        }

        .atas-rounded
        {
            margin-top: -135px !important;
            background: #F5F5F5 !important;
            border-top-left-radius: 70px;
            border-top-right-radius: 70px;
        }

        /* Zoom 150% */

        @media screen and (min-width: 1000px) and (max-width: 1098px) {

            .testimoni-h .slick-dots li button:before {

                left: 140px !important;

            }

			.hslide-area .slid-content img{
				height: 565px;
			}

            .atas-rounded
            {
                margin-top: -115px !important;
            }

            .slick-dotted.slick-slider{
                margin-bottom: 0;
            }

			.hslide-area .slid-content img{
				height: 580px;
			}

            .info-card .card-erp p{
                font-size:26px;
            }



            .testimoni .max-img {

                right: -219px !important;

            }



            .ml-7rem {

                margin-left: 2rem !important;

            }



            .h-box-f {

                width: 366px;

            }



            .info-card .card-safety img {

                right: 71px;

            }



            .img-left-hp {

                left: 29% !important;

            }



            .portfolio {

                padding-left: 20px !important;

            }



            .testimoni {

                padding: 8em 9em 6em 5em;

            }

        }



        /* Zoom 125% */

        @media screen and (min-width: 1098px) and (max-width: 1300px) {





            .testimoni-h .slick-dots li button:before {

                left: 68px !important;

            }



            .testimoni .max-img {

                right: -135px !important;

            }



            .txt-header-right-hp h2 {

                font-size: 49px !important;

            }



            .txt-header-right-hp p {

                font-size: 19px;

            }



            .txt-header-right-hp span {

                font-size: 16px;

            }



            .txt-header-right-hp .btn-started-header span {

                font-size: 13.5px !important;

            }



            .portfolio {

                padding-left: 20px !important;

            }

        }

        @media (min-width: 1098px) and (max-width:1100px){
            .h-box-l{
                height: 242px;
            }

            .info-card .card-erp p{
                padding-right: 35%;
            }

            .info-card .card-erp img{
                width:36%;
            }
        }

        @media(max-width: 990px){
            .fitur {

                overflow: hidden;

            }
        }



        /* Zoom 110% */

        @media screen and (min-width: 1300px) and (max-width: 1410px) {

            .testimoni-h .slick-dots li button:before {

                left: 22px !important;

            }



            .testimoni .max-img {

                right: -85px !important;

            }

        }



        /* Zoom 90% */

        @media screen and (min-width: 1556px) {

            .testimoni-h .slick-dots li button:before {

                left: -115px !important;

            }



            .testimoni .max-img {

                right: 150px !important;

            }

        }



        /* All */



        .testimoni-h .slick-dots li button:before {

            font-size: 9px;

            top: -72px;

            left: -29px;

            color: #63A6B3;

        }



        .testimoni .max-img {

            width: 350px;

            height: 259px;

            object-fit: cover;

            z-index: 999;

            border-radius: 10px;

            position: absolute;

            top: 45px;

            right: 13px;

        }



        .btn-lihat-detail {

            border-radius: 7px;

            padding: 0 36px;

            padding-right: 20px !important;

            text-transform: none;

            background: transparent linear-gradient(1deg, #FFA234 0%, #FFDB50 100%) 0% 0% no-repeat padding-box;

        }



        .btn-lihat-detail:hover {

            background: transparent linear-gradient(1deg, #f98900 0%, #e5b707 100%) 0% 0% no-repeat padding-box;

        }



        .btn-lihat-detail span {

            color: #133A72 !important;

            font-size: 13.5px !important;

            font-weight: 700 !important;

            margin-right: 10px !important;

        }



        .btn-lihat-detail i {

            color: #133A72;

            font-size: 13px !important;

        }



        .fitur img {

            width: 50%;

            height: 80px;

            object-fit: contain;

        }

        @media (min-width:768px) and (max-width:1000px) {

        .fitur p{
            padding-right: 0;
        }

        .portfolio{
            padding-right: 0px !important;
            padding-left: 0px !important;
        }

        .info-card .card-erp p{
            font-size: 24px
        }

        .info-card .card-safety img{
            right:65px;
        }

        .testimoni .max-img {
            width: 272px;
            height: 183px;
            object-fit: cover;
            z-index: 999;
            border-radius: 10px;
            position: absolute;
            top: -115px;
            right: -41px;
        }

        .txt-header-right h2{
            font-size: 44px !important;
            line-height: 58px;
        }

        .txt-header-right-hp h2{
            font-size: 44px !important;
            line-height: 58px;
        }

        .txt-header-right p, .txt-header-left p{
            font-size: 17px;
        }



        .atas-rounded{
            margin-top:-100px;
        }

        .section-watch-video .control-button{
            top: 150px;
        }

        .play-btn {
            width: 70%;
        }

        #started .content-title span{
            font-size: 40px;
        }

        #started img{
            margin-top:-10px;
        }

        .hslide-area .slid-content img.img-left-worker{
            height: 605px !important;
        }
        .hslide-area .slid-content img.img-left-hp{
            height:511px !important
        }

        .txt-header-right, .txt-header-right-hp, .txt-header-left{
            top: 40%;
        }

        .img-left-worker{
            left: 29%;
        }

        .img-left-hp {
            left: 31%;
            top: 63.5%;
        }

        img.img-left-hp{
            height: 415px !important;
        }


    }

        @media (max-width:375px)
        {
            .h-box-f {
                    width: 275px !important;
                }
        }

        @media(max-width:361px){
            .h-box-f{
                width: 265px !important
            }

            .section-watch-video .header h5 {
                font-size: 20px;
            }

            .info-card .card-safety .text-judul {
                font-size: 13px;
            }

            .info-card .card-safety p {
                font-size: 17px;
            }

            .info-card .card-safety .text-judul {
                font-size: 16px;
            }

            .info-card .card-safety p {
                font-size: 20px !important;
                line-height: 28px;
            }

            .img-left-hp{
                top: 75% !important;
            }

            .img-left-worker {
                top : 77% !important;
                height: 322px !important;
            }

            .txt-header-right-hp h2{
                font-size: 28px !important;
            }

        }

        @media(max-width:321px){
            .h-box-f{
                width: 228px !important
            }
            /* Ini Yang Diatas Video  */
            .section-watch-video .header h5 {
                font-size: 18px !important;
                margin-left: 0px !important;
                margin-right: 0px !important;
                margin-bottom: 7px !important;
            }

            .section-watch-video .p {
                font-size: 12px !important;
                line-height: 20px !important;
            }

            /* Ini Yang Card */
            .info-card .card-safety .text-judul {
                font-size: 12px !important;
            }

            .info-card .card-safety p {
                font-size: 16px !important;
            }

            .img-health, .img-safety {
                width: 85%;
                right: 6%;
            }

            .img-erp {
                width: 96%;
                right: 0%;
            }

            /* Testimoni */
            .testimoni .p-putih {
                font-size: 11px !important;
            }

            /* Footer */
            .content-title span {
                font-size: 25px;
            }

            #infocard_slider .slick-center .h-box-f,
            #infocard_slider .slick-slide[aria-hidden="true"]:not([tabindex="-1"]) + .slick-cloned[aria-hidden="true"] .h-box-f{
                height: 371px !important;
                margin-top: 0 !important;
                -webkit-transition: all 1s cubic-bezier(0.39, 0.58, 0.57, 1);
            }



            #infocard_slider .slick-slide .h-box-f,
            #infocard_slider .slick-slide[aria-hidden="true"]:not(.slick-cloned) ~ .slick-cloned[aria-hidden="true"] .h-box-f{
                height: 338px;
                margin-top: 2rem;
                -webkit-transition: all 1s cubic-bezier(0.39, 0.58, 0.57, 1);
            }

            .img-left-hp{
                top:77% !important;
            }

            .img-left-worker{
                top:77% !important;
                left: 51% !important;
                height: 326px !important;
            }

            .portfolio .header h4, .liputan .header h4, .fitur-heatlhy .header-fitur h4, .info-card .header-fitur-safety h4{
                font-size: 28px !important;
            }

            .txt-header-right-hp h2{
                font-size: 25px !important;
            }
        }

        .section-watch-video
        {
            margin-top:-2.5%;
        }



        .atas-rounded.mobile-show
        {
            margin-top: -18.5% !important;
            background: #F5F5F5 !important;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }

        .ml-2-5rem
        {
            margin-left: 2.5rem!important;
        }

        .info-card.desktop-show{
            background: #f5f5f5 !important;
            padding-top: 6rem !important;
            padding-bottom: 6rem !important;
        }

        .info-card.mobile-show{
            background: #f5f5f5 !important;
            padding-top: 0rem !important;
            padding-bottom: 3rem !important;
        }

        .section-compannies.liputan{
            background: #f5f5f5 !important;
            padding-top:1.5rem!important;
        }

         /* EVAMEDIA */
         .text-kategori{
            color:#18929F;
            text-transform: uppercase;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0.32px;
            font-family: 'Inter', sans-serif !important;
        }
        .title-artikel{
            color:#1D1D1D;
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 0.32px;
            font-family: 'Inter', sans-serif !important;
        }
        .title-artikel.list-title-artikel{
            font-size: 20px;
        }
        .title-artikel.list-title-artikel.top-news-side{
            font-size: 15px;
            font-weight: 500;
        }
        .text-recent-news{
            color:#1D1D1D;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 0.32px;
            font-family: 'Inter', sans-serif !important;
        }
        .desc-artikel{
            color:#636F73;
            font-size: 16px;
            letter-spacing: 0.32px;
            font-family: 'Inter', sans-serif !important;
            font-weight: 300;
            margin-top: 1rem;
        }

        .see-more-action{
            color: #133A72;
            text-decoration: underline;
            font-style: italic;
            font-size: 16px;
        }
        .color-date{
            color:#7E7E7E;
        }
        .mt-18rem{
            margin-top: 8rem;
        }
        .bullet-utama{
            font-size: 9px;
            margin-left: 2%;
        }
        .date--artikel{
            margin-left: 1%;
        }
        .list-bullet-article .date--artikel{
            margin-left: 0;
        }

        .list-date-article.list-inline>li{
            display: inline !important;
        }
        .list-date-article li.list-date{
            font-size: 25px;
            list-style-type:none;
        }
        .list-date-article li.list-date span{
            font-size: 18px;
        }
        ul.list-date-article li.list-date:before {
            content: "•";
            font-size: 80%;
        }
        .line--vertical{
            border-top: 2px solid #D8D8D8;
            margin-top: 1rem;
        }
        ul.list-date-article li.list-bullet-article:before{
            font-size: 70%;
        }
        .text-kategori.list-article-text,.list-date span.date--artikel.list-article-text{
            font-size: 14px;
        }
        .mt-1rem{
            margin-top: 1rem
        }
        .mt-5rem{
            margin-top: 5rem;
        }

        .mt-4rem{
            margin-top: 3rem;
        }


        @media (max-width:767px)
        {
            .content-title{
                padding-left: 25px;
                padding-right: 25px;
            }

            .txt-fitur-blue{
                color:#140080;
            }
            .txt-fitur-cyan{
                color:#03B4CF;
            }
            .txt-fitur-green{
                color:#188A59;
            }
            .title-fitur{
                font-size:29px;
                font-weight: 600;
            }
            .by--goodeva{
                color:#B4B4B4;
                font-size:12px;
                margin-bottom: 5%;

            }

            .my-fitur:nth-last-child(1)
            {
                margin-bottom: 3rem !important;
            }

            .section-watch-video .header p.mobile-show{
                padding-top: 5%;
            }

            .px-xs-0{
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .mb-xs-1rem{
                margin-bottom: 1rem !important;
            }

            .text-kategori{
                font-size: 14px !important;
            }
            .title-artikel{
                font-size: 20px !important;
            }

            .title-artikel.list-title-artikel{
                font-size: 14px !important;
                font-weight: 500;
            }

            .list-date-article li.list-date span{
                font-size: 14px !important;
            }

            .date--artikel{
                margin-left: 0 !important;
            }

            body{
                background:#f9f9f9;
            }

            .text-recent-news{
                font-size: 18px;
            }

            .mt-xs-list-artikel{
                margin-top: .5rem !important;
            }

            .mt-xs-05{
                margin-top: 0.5rem !important;
            }

            .my-xs-5{
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .mt-custom-mob{
                margin-top: 3.8rem !important;
            }
        }

        .h-box-f{
            width: 100%;
        }



    </style>

@endsection



@section('content')

    <section class="desktop-show primary-section mt-18rem">
        <div class="container">
            <div class="row mb-5">
                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                    <div id="post_data"></div>
                    {{-- <div class="row mx-0 mt-3">
                        <div class="col-sm-5 col-md-5 col-lg-5">
                            <img src="{{asset('public/img/assets/home/slider/goodeva-technology-iot-enterprise.png')}}" class="d-block w-100 mt-1rem" alt="">
                        </div>
                        <div class="col-sm-7 col-md-7 col-md-7">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <ul class="list-date-article list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-kategori list-article-text">NEWS</span>
                                        </li>
                                        <li class="list-date list-bullet-article list-inline-item">
                                            <span class="color-date date--artikel list-article-text">{{ Helper::tanggal_indo(date('Y-m-d')) }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="title-artikel list-title-artikel">
                                        Apple’s Spring iPad Event Won’t Repeat This iPhone 12 Mistake
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="desc-artikel">
                                        5G should let creators upload video from anywhere, making it the iPad Pro’s best friend. But the networks just aren’t there...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--RECENT NEWS CATEGORY-->
                    {{-- @foreach ($data_kategori as $kat)
                    <div id="post_data_{{ $kat->id }}"></div>
                    @endforeach --}}

                    {{-- <div class="row mx-0">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <img src="{{asset('public/img/assets/home/slider/goodeva-technology-iot-enterprise.png')}}" class="d-block w-100" alt="">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                            <ul class="list-date-article list-inline">
                                <li class="list-inline-item">
                                    <span class="text-kategori">NEWS</span>
                                </li>
                                <li class="list-date list-inline-item">
                                    <span class="color-date date--artikel">{{ Helper::tanggal_indo(date('Y-m-d')) }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="title-artikel">
                                11 Best Soundbar Recommendations That Can Be Purchased in Any Online Shop
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 mt-5 mb-4">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="pull-left">
                                <span class="text-recent-news">START UP RECENT NEWS</span>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="see-more-action">See More</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="line--vertical">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 mt-3">
                        <div class="col-sm-5 col-md-5 col-lg-5">
                            <img src="{{asset('public/img/assets/home/slider/goodeva-technology-iot-enterprise.png')}}" class="d-block w-100 mt-1rem" alt="">
                        </div>
                        <div class="col-sm-7 col-md-7 col-md-7">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <ul class="list-date-article list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-kategori list-article-text">NEWS</span>
                                        </li>
                                        <li class="list-date list-bullet-article list-inline-item">
                                            <span class="color-date date--artikel list-article-text">{{ Helper::tanggal_indo(date('Y-m-d')) }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="title-artikel list-title-artikel">
                                        Apple’s Spring iPad Event Won’t Repeat This iPhone 12 Mistake
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="desc-artikel">
                                        5G should let creators upload video from anywhere, making it the iPad Pro’s best friend. But the networks just aren’t there...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!--SIDEBAR -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" id="sidebars">
                    <div class="row mx-0">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="pull-left">
                                <span class="text-recent-news">Top News</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="line--vertical">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                    @foreach($top_news as $tops)
                    <div class="row mx-0 mt-3">
                        <div class="col-sm-5 col-md-5 col-lg-5">
                            <img src="{{asset('public/evamedia/artikel-img/foto-cover/'.$tops->foto_cover)}}" class="d-block w-100 mt-1rem side-img" alt="{{ $tops->foto_cover }}">
                        </div>
                        <div class="col-sm-7 col-md-7 col-md-7 px-0">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <ul class="list-date-article list-inline">
                                        <li class="list-inline-item">
                                            <a href="{{ url('evamedia/'.$tops->nama_kategori) }}">
                                                <span class="text-kategori list-article-text">{{ $tops->nama_kategori }}</span>
                                            </a>
                                        </li>
                                        <li class="list-date list-bullet-article list-inline-item">
                                            <span class="color-date date--artikel list-article-text">{{ Helper::tanggal_indo($tops->publish_date) }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <a href="{{ url('evamedia-detail/'.$tops->slug_url) }}">
                                        <div class="title-artikel list-title-artikel top-news-side">
                                            {{ Helper::cekJudul($tops->judul) }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="row mx-0 mt-3">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <img src="{{asset('public/img/assets/smart_safety/Goodeva-smart-safety.jpg')}}" class="d-block w-100 mt-1rem" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MOBILE -->
    <section class="mobile-show primary-section mt-custom-mob">
        <div class="">
            <div class="row mx-0">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 px-0">
                    <div id="post_data_mobile"></div>
                    {{-- <div class="row mx-0 mt-3">
                        <div class="col-sm-5 col-md-5 col-lg-5">
                            <img src="{{asset('public/img/assets/home/slider/goodeva-technology-iot-enterprise.png')}}" class="d-block w-100 mt-1rem" alt="">
                        </div>
                        <div class="col-sm-7 col-md-7 col-md-7">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <ul class="list-date-article list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-kategori list-article-text">NEWS</span>
                                        </li>
                                        <li class="list-date list-bullet-article list-inline-item">
                                            <span class="color-date date--artikel list-article-text">{{ Helper::tanggal_indo(date('Y-m-d')) }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="title-artikel list-title-artikel">
                                        Apple’s Spring iPad Event Won’t Repeat This iPhone 12 Mistake
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="desc-artikel">
                                        5G should let creators upload video from anywhere, making it the iPad Pro’s best friend. But the networks just aren’t there...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row mx-0 mt-5 mb-4 desktop-show">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="line--vertical">
                                &nbsp;
                            </div>
                        </div>
                    </div>


                    {{-- <div class="row mx-0">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <img src="{{asset('public/img/assets/home/slider/goodeva-technology-iot-enterprise.png')}}" class="d-block w-100" alt="">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                            <ul class="list-date-article list-inline">
                                <li class="list-inline-item">
                                    <span class="text-kategori">NEWS</span>
                                </li>
                                <li class="list-date list-inline-item">
                                    <span class="color-date date--artikel">{{ Helper::tanggal_indo(date('Y-m-d')) }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="title-artikel">
                                11 Best Soundbar Recommendations That Can Be Purchased in Any Online Shop
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 mt-5 mb-4">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="pull-left">
                                <span class="text-recent-news">START UP RECENT NEWS</span>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="see-more-action">See More</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="line--vertical">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 mt-3">
                        <div class="col-sm-5 col-md-5 col-lg-5">
                            <img src="{{asset('public/img/assets/home/slider/goodeva-technology-iot-enterprise.png')}}" class="d-block w-100 mt-1rem" alt="">
                        </div>
                        <div class="col-sm-7 col-md-7 col-md-7">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <ul class="list-date-article list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-kategori list-article-text">NEWS</span>
                                        </li>
                                        <li class="list-date list-bullet-article list-inline-item">
                                            <span class="color-date date--artikel list-article-text">{{ Helper::tanggal_indo(date('Y-m-d')) }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="title-artikel list-title-artikel">
                                        Apple’s Spring iPad Event Won’t Repeat This iPhone 12 Mistake
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="desc-artikel">
                                        5G should let creators upload video from anywhere, making it the iPad Pro’s best friend. But the networks just aren’t there...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!--SIDEBAR -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-5 px-0" id="sidebars">
                    <div class="row mx-0 mb-5">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img src="{{asset('public/img/assets/smart_safety/Goodeva-smart-safety.jpg')}}" class="d-block w-100 mt-1rem" alt="">
                        </div>
                    </div>
                    <div class="row mx-0">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="pull-left">
                                <span class="text-recent-news">Top News</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="line--vertical">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                    @foreach($top_news as $tops)
                    <div class="row mx-0 mt-3">
                        <div class="col-xs-4 col-sm-4 col-md-5 col-lg-5 pr-sm-0">
                            <img src="{{asset('public/evamedia/artikel-img/foto-cover/'.$tops->foto_cover)}}" class="d-block w-100 mt-1rem mt-xs-05 side-img" alt="{{ $tops->foto_cover }}">
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-7 col-md-7">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <ul class="list-date-article list-inline">
                                        <li class="list-inline-item">
                                            <a href="{{ url('evamedia/'.$tops->nama_kategori) }}">
                                                <span class="text-kategori list-article-text">{{ $tops->nama_kategori }}</span>
                                            </a>
                                        </li>
                                        <li class="list-date list-bullet-article list-inline-item">
                                            <span class="color-date date--artikel list-article-text">{{ Helper::tanggal_indo($tops->publish_date) }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <a href="{{ url('evamedia-detail/'.$tops->slug_url) }}">
                                        <div class="title-artikel list-title-artikel top-news-side">
                                            {{ Helper::cekJudul($tops->judul) }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
                 <!--RECENT NEWS CATEGORY-->
                 <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 pb-5 px-0">
                    <div id="post_data_mobile_next"></div>
                 </div>
            </div>
        </div>
    </section>

@endsection




@section('js_after')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



    <script src="{{asset('public/js/slick.min.js')}}" charset="utf-8"></script>

    {{-- <script src="vendor/jquery.js"></script> --}}
    <script src="{{asset('public/js/lity.min.js')}}"></script>

    <script>
        $(document).ready(function(){

         var _token = "{{ csrf_token() }}";

         load_data('','','', _token);
         load_data_mobile('','','', _token);



         function load_data(id="",dates_data="",times_data="", _token)
         {
          $.ajax({
           url:"{{ url('loadmore/load_data/'.Helper::GetUri()) }}",
           method:"POST",
           data:{id:id,dates_data:dates_data,times_data:times_data, _token:_token},
           success:function(data)
           {
            $('#loads').remove();
            $('#post_data').append(data.output);
           }
          })
         }

         function load_data_mobile(id="",dates_data="",times_data="", _token)
         {
          $.ajax({
           url:"{{ url('loadmore/load_data_mobile/'.Helper::GetUri()) }}",
           method:"POST",
           data:{id:id,dates_data:dates_data,times_data:times_data, _token:_token},
           success:function(data)
           {
            $('#loads').remove();
            $('#post_data_mobile').append(data.output);
            $('#post_data_mobile_next').append(data.output_bawah);
           }
          })
         }

        //  function load_data_all_kategori(id="",dates_data="",times_data="",kategori="",tipe="", _token)
        //  {
        //   $.ajax({
        //    url:"{{ url('loadmore/load_data_kategori/'.Helper::GetUri()) }}",
        //    method:"POST",
        //    data:{id:id,dates_data:dates_data,times_data:times_data,kategori:kategori,tipe:tipe, _token:_token},
        //    success:function(data)
        //    {
        //     $('#loads_kategori_'+kategori).remove();
        //     $('#post_data_'+kategori).append(data);
        //    }
        //   })
        //  }

         $(document).on('click', '#load_more_button', function(){
            var id = $(this).attr('data-loadid');
            var date = $(this).attr('data-loaddate');
            var time = $(this).attr('data-loadtime');
            $('#load_more_button').html('<b>Loading...</b>');
            load_data(id,date,time, _token);
         });



        });
        </script>


    <script type="text/javascript">

        $('#hslide-area,#hslide-area-mobile').slick({

            dots: true,

            infinite: true,

            adaptiveHeight: true,

            //   slidesToShow: 3,

            //   slidesToScroll: 1,

            autoplay: false,

            autoplaySpeed: 4000,

            arrows: false,

            pauseOnHover: false,

            pauseOnFocus: false,

            responsive: [

                {

                        breakpoint: 767,

                        settings: {

                            arrows: false,

                            dots: false,

                            adaptiveHeight: true,


                        }

                }

            ]

        });

        $('#infocard_slider').slick({

        dots: true,

        infinite: true,

        adaptiveHeight: true,

        //   slidesToShow: 3,

        //   slidesToScroll: 1,

        autoplay: false,

        autoplaySpeed: 4000,

        arrows: false,

        pauseOnHover: false,

        pauseOnFocus: false,



        responsive: [

            {

                    breakpoint: 480,

                    settings: {

                        arrows: false,

                        centerMode: true,

                        centerPadding: '40px',



                    }

            }

        ]

        });

    </script>



    <script type="text/javascript">

        $('.testimoni-h').slick({

         infinite: true,

        //  speed: 400,

         slidesToShow: 1,

         variableWidth: false,

         autoplay: false,

         pauseOnHover: false,

        //  autoplaySpeed: 3000,

         dots: true,

         arrows: false,

          responsive: [

            {

              breakpoint: 672,

              settings: {

                // variableWidth: false,

              autoplay: false,

            //   autoplaySpeed: 3000,

              centerMode : true,



              centerPadding: '50px',

              }

            }

          ]

        });

    </script>



@endsection

