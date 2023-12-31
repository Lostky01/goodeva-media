@extends('evamedia.app-evamedia')
@section('title', 'Main')
@section('css_before')
    <link href="https://fonts.cdnfonts.com/css/georgia" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .banner {
            background-image: url('{{ asset('goodeva-media/bgatas.png') }}');
            background-size: cover;
        }

        .insightful {
            font-family: 'Georgia', sans-serif !important;
        }



        .badge-topics {
            background-color: #f2f2f2 !important;
            color: #000 !important;
            border-radius: 20px !important;
            border: 0 !important;
        }

        .badge-topics.btn-active {
            border: 1px solid #000 !important;
        }

        .button-set {
            display: flex;
            overflow-x: hidden;
            transition: transform 0.3s ease;
            /* Add transition for smooth animation */
        }

        .button-set button {
            flex: 0 0 auto;
        }

        .desktop-show {
            display: block;
        }

        .mobile-show {
            display: none;
        }

        @media screen and (max-width:450px) {
            .desktop-show {
                display: none;
            }

            .mobile-show {
                display: block;
            }

            .banner {
                background-image: url('{{ asset('goodeva-media/bgatas.png') }}');
                width: auto;
                height: auto;
            }
        }

        .topics-text {
            font-size: 14px !important;
        }
    </style>

@endsection

@section('css-after')
@endsection

@section('content')
    {{-- Section banner desktop --}}
    <section class="banner desktop-show" style="padding:10%">
        <h1 class="insightful" style="color:#FFF;font-family: Georgia;font-size: 107px;font-weight: 300; line-height:70%">
            <span id="typed-output">
        </h1>
        <p style="color:#fff;font-family: 'Roboto', sans-serif;font-size: 23.625px;font-weight: 400;">Discover stories,
            thinking, and expertise from <br> writers on any topic.</p>
        <a href="" class="btn btn-primary mt-2"
            style="color: #35A6B3; background-color: #FFFFFF; border-radius: 20px; width: auto; border: none;font-size:15px">Baca
            Sekarang</a>
    </section>


    {{-- Section banner mobile --}}
    <section class="banner mobile-show" style="padding-top:25%;padding-bottom:25%; padding-left:5%">
        <div class="container">
            <h1 class="insightful"
                style="color:#FFF;font-family: Georgia;font-size: 60px;font-weight: 300; line-height:100%">
                <span id="typed-output-mobile"></span>
            </h1>
            <p style="color:#fff;font-family: 'Roboto', sans-serif;font-size: 12px;font-weight: 400; line-height:100%">
                Discover
                stories,
                thinking, and expertise from <br> writers on any topic.</p>
            <a href="" class="btn btn-primary mt-2"
                style="color: #35A6B3; background-color: #FFFFFF; border-radius: 20px; width: auto; border: none;font-size:15px">Baca
                Sekarang</a>
        </div>
    </section>


    {{-- Section kedua desktop --}}
    <section class="kedua desktop-show">
        <div class="col-12 mt-5" style="padding-left:10%">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="row justify-content-center button-set">
                        <button id="exploreBtn" class="col-sm-1 mr-5 btn btn-primary topics-text"
                            style="background-color: #f2f2f2; color: #000; border-radius: 20px; border: 0; background-image: url('{{ asset('goodeva-media/compass.png') }}'); background-size: 20px; background-position: 10px center; background-repeat: no-repeat;width:auto;">
                            Explore Topics
                        </button>
                        <div class="badges-container" style="display: flex; align-items: center;">
                            <button class="mx-1 btn btn-primary filter-btn badge-topics topics-text"
                                data-filter="Technology">Technology</button>
                            <button class="mx-1 btn btn-primary filter-btn badge-topics topics-text"
                                data-filter="Artificial Intelligence">Artificial Intelligence</button>
                            <button class="mx-1 btn btn-primary filter-btn badge-topics topics-text"
                                data-filter="Programming">Programming</button>
                            <button class="mx-1 btn btn-primary filter-btn badge-topics topics-text"
                                data-filter="Tech">Tech</button>
                            <button class="mx-1 btn btn-primary filter-btn badge-topics topics-text"
                                data-filter="Business">Business</button>
                            <button class="mx-1 btn btn-primary filter-btn badge-topics topics-text"
                                data-filter="Data Science">Data
                                Science</button>
                            <button class="mx-1 btn btn-primary filter-btn badge-topics topics-text"
                                data-filter="Machine Learning">Machine Learning</button>
                            <button class="mx-1 btn btn-primary filter-btn badge-topics topics-text"
                                data-filter="Blockchain">Blockchain</button>
                        </div>
                        <span style=" font-size: 25px;color:#242424;display:flex; align-items:center"><a class="ml-5"
                                href="#" style="color:#000000" id="nextBtn"><i class="fa fa-angle-right"
                                    aria-hidden="true"></i></a></span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Section kedua mobile --}}
    <section class="kedua mobile-show">
        <div class="col-sm-12 mt-5">
            <div class="col-12">
                <button id="exploreBtnMobile" class="col-sm-6 mb-3 btn btn-primary"
                    style="background-color: #f2f2f2; color: #000; border-radius: 20px; border: 0; background-image: url('{{ asset('goodeva-media/compass.png') }}'); background-size: 20px; background-position: 10px center; background-repeat: no-repeat;">
                    Explore Topics
                </button> <br>
                <div class="badges-container"></div>
                <button class="mx-1 mb-2 mt-1 btn btn-primary filter-btn badge-topics"
                    data-filter="Technology">Technology</button>
                <button class="mx-1 mb-2 mt-1 btn btn-primary filter-btn badge-topics"
                    data-filter="Artificial Intelligence">Artificial Intelligence</button>
                <br>
                <button class="mx-1 mb-2 mt-1 btn btn-primary filter-btn badge-topics"
                    data-filter="Programming">Programming</button>
                <button class="mx-1 mb-2 mt-1 btn btn-primary filter-btn badge-topics" data-filter="Tech">Tech</button>
                <br>
                <button class="mx-1 mb-1 mt-1 btn btn-primary filter-btn badge-topics"
                    data-filter="Business">Business</button>
                <button class="mx-1 mb-1 mt-1 btn btn-primary filter-btn badge-topics" data-filter="Data Science">Data
                    Science</button>
                <br>
                <button class="mx-1 mt-2 btn btn-primary filter-btn badge-topics" data-filter="Machine Learning">Machine
                    Learning</button>
                <button class="mx-1 mt-2 btn btn-primary filter-btn badge-topics"
                    data-filter="Blockchain">Blockchain</button>
            </div>
        </div>
        </div>
    </section>


    {{-- Section ketiga desktop --}}
    <section class="ketiga desktop-show" style="padding-left:10%;padding-top:5%;">
        <div class="col-sm-12 mb-4" style="display: flex; align-items: center;">
            <img src="{{ asset('goodeva-media/up.png') }}" alt="" style="margin-right: 10px;">
            <span style="color:#000;font-family: Roboto;font-weight: 800;line-height: 0px;font-size: 15.5px;">Trending di
                Evamedia</span>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-2 ml-2" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">01</h3>
                        </div>
                        <div class="col-sm-8" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile1.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Luka Bönisch in The
                                    Taoist
                                    Online</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">The
                                    Problem
                                    You
                                    Think You Have Is Never <br> the Real Problem</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 24 . 9 min read</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-2 ml-2" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">02</h3>
                        </div>
                        <div class="col-sm-8" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile2.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Thomas Smith in The
                                    Generator</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">Did
                                    OpenAI
                                    Secretly Create a Brain-Like <br>
                                    Intelligence After All?</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 26 . 5 min read</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-2 ml-2" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">03</h3>
                        </div>
                        <div class="col-sm-8" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile3.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Kevin Chisholm in The
                                    Flutter</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">What’s
                                    new
                                    in Flutter 3.16</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 15 . 14 min read</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-2 ml-2" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">04</h3>
                        </div>
                        <div class="col-sm-8" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile4.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Carlos
                                    Arguelles</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">My
                                    favorite
                                    coding question to give <br> candidates</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 13px;font-weight: 400;">Nov 12 . 11 min read</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-2 ml-2" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">05</h3>
                        </div>
                        <div class="col-sm-8" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile5.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Michael Thomsen in
                                    Dart</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">
                                    Announcing
                                    Dart 3.2</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 15 . 6 min read</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-2 ml-2" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">06</h3>
                        </div>
                        <div class="col-sm-8" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile6.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Natalie Worth in UX
                                    Collective
                                    Online</span>
                            </div>
                            <a href="">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">Is
                                    technology harming our brains?</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 28 . 4 min read</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section ketiga mobile --}}
    <section class="ketiga mobile-show" style="padding-top:5%;">
        <div class="col-sm-12 mb-4" style="display: flex; align-items: center;">
            <img src="{{ asset('goodeva-media/up.png') }}" alt="" style="margin-right: 10px;">
            <span style="color:#000;font-family: Roboto;font-weight: 800;line-height: 0px;font-size: 15.5px;">Trending di
                Evamedia</span>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-10" style="display: flex; align-items:flex-start">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">01</h3>
                        </div>
                        <div class="col-md-4" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile1.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Luka Bönisch in The
                                    Taoist
                                    Online</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">The
                                    Problem
                                    You
                                    Think You Have Is Never <br> the Real Problem</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 24 . 9 min read</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-4" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">02</h3>
                        </div>
                        <div class="col-md-4" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile2.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Thomas Smith in The
                                    Generator</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">Did
                                    OpenAI
                                    Secretly Create a Brain-Like <br>
                                    Intelligence After All?</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 26 . 5 min read</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-4" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">03</h3>
                        </div>
                        <div class="col-md-8" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile3.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Kevin Chisholm in The
                                    Flutter</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">What’s
                                    new
                                    in Flutter 3.16</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 15 . 14 min read</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-4" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">04</h3>
                        </div>
                        <div class="col-md-4" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile4.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Carlos
                                    Arguelles</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">My
                                    favorite
                                    coding question to give <br> candidates</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 13px;font-weight: 400;">Nov 12 . 11 min read</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-4" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">05</h3>
                        </div>
                        <div class="col-md-4" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile5.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Michael Thomsen in
                                    Dart</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">
                                    Announcing
                                    Dart 3.2</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 15 . 6 min read</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-4" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">06</h3>
                        </div>
                        <div class="col-md-4" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile6.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Natalie Worth in UX
                                    Collective
                                    Online</span>
                            </div>
                            <a href="">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">Is
                                    technology harming our brains?</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 28 . 4 min read</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- Section keempat desktop --}}
    <section class="lastone desktop-show">
        <div class="container-fluid" style="padding-left:15%;padding-top:5%;padding-bottom:5%">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews1.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Biz
                                    Stone</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">The No Homework Policy
                                </h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 15px;font-family: Roboto;font-weight: 400;">An early
                                experience in making my own rules came when I entered <br>
                                high school. In the first weeks of my freshman year, I tried to do…</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 21 . 4 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">High
                                School</span>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('goodeva-media/newscontent1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-8">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews2.png') }}" alt="">
                                <span
                                    style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Jacqueline
                                    Dooley</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">Sometimes The Cracks Get
                                    Too
                                    Big to Hold a <br>
                                    Friendship Together</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 15px;font-family: Roboto;font-weight: 400;">Why I’m
                                letting
                                a 40-year friendship go.</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 13 . 7 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Memoir</span>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('goodeva-media/newscontent2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-8">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews3.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Jane
                                    Elliott PhD in Better Humans</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">The Trouble With
                                    Teachability
                                </h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 15px;font-family: Roboto;font-weight: 400;">Why solving
                                for
                                what’s easily explained winds up making things <br>
                                hard</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 23 . 6 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Psychology</span>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('goodeva-media/newscontent3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-8">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews4.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Cameron
                                    Kruse in Earth Genome</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">Food Twin: Stress Testing
                                    the
                                    U.S. Food System</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 15px;font-family: Roboto;font-weight: 400;">Today the
                                Plotline, the food climate and data community organized <br>
                                by Earth Genome, is launching Food Twin, a proof of concept digit…
                                twin…</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 26 . 8 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Climate
                                Change</span>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('goodeva-media/newscontent4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-8">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews5.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Pernoste
                                    & Dahl in SYNERGY</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">How to Read a Poem</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 15px;font-family: Roboto;font-weight: 400;">For poets
                                and
                                non-poets</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 9 . 10 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Blog</span>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('goodeva-media/newscontent5.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-8">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews6.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Duane
                                    Valz</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">The Corporate Governance
                                    Failure at the Heart of <br>
                                    Sam Altman’s Ouster from OpenAI</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 15px;font-family: Roboto;font-weight: 400;">In this
                                piece I
                                examine the flawed corporate structure of OpenAI, <br>
                                and the neglect of governance evolution during a year of immens…
                                change</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 20 . 12 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Governance</span>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('goodeva-media/newscontent6.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-8">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews7.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Mike
                                    Grindle in ILLUMINATION</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">Frutiger Aero: When the
                                    Future
                                    Looked Optimistic</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 15px;font-family: Roboto;font-weight: 400;">The 2000s
                                design aesthetic that you forgot about</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 12 . 8 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Design</span>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('goodeva-media/newscontent7.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-8">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews8.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Jessicah
                                    Lahitou in Fanfare</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">Being 40 with Beyoncé</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 15px;font-family: Roboto;font-weight: 400;">Entering
                                middle-age with Queen Bey in Toronto: highly <br>
                                recommend.</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Oct 14 . 6 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Music</span>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('goodeva-media/newscontent8.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-8">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews9.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Ty
                                    Stephens in Towards Data Science</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">From Punch Cards to
                                    ChatGPT
                                </h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 15px;font-family: Roboto;font-weight: 400;">My
                                Grandfather’s Glimpse into Generative AI</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 1 . 9 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">ChatGPT</span>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('goodeva-media/newscontent9.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-8">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews10.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Vicki
                                    Tan</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">The Long View</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 15px;font-family: Roboto;font-weight: 400;">A
                                metaphysical
                                design framework to help us design better <br>
                                possible past/present/futures to create the human experience we…
                                want, for all time</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Oct 26 . 17 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Technology</span>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('goodeva-media/newscontent10.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 500;">Discover more of
                        what matters to you</h3>
                    <span> <button class="mt-3  mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Programming</button></span>
                    <span> <button class="mt-3  mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Data
                            Science</button></span>
                    <span> <button class="mt-3  mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Technology</button></span>
                    <br>
                    <span><button class="mt-3 mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Self
                            Improvement</button></span>
                    <span><button class="mt-3 mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Writing</button></span>
                    <span><button class="mt-3 mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Relationships</button></span>
                    <br>
                    <span><button class="mt-3 mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Machine
                            Learning</button></span>
                    <span><button class="mt-3 mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Productivity</button></span>
                    <span><button class="mt-3 mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Politics</button></span>
                </div>
            </div>
        </div>
    </section>



    {{-- Section keempaat mobile --}}
    <section class="lastone mobile-show">
        <div class="container-fluid" style="padding-left:5%;padding-top:10%;padding-bottom:5%">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{ asset('goodeva-media/newscontent1.png') }}" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews1.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 12px;font-weight: 800;">Biz
                                    Stone</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">The No Homework Policy
                                </h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 13px;font-family: Roboto;font-weight: 400;">An early
                                experience in making my own rules came when I entered
                                high school. In the first weeks of my freshman year, I tried to do…</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 21 . 4 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">High
                                School</span>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <img src="{{ asset('goodeva-media/newscontent2.png') }}" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews2.png') }}" alt="">
                                <span
                                    style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Jacqueline
                                    Dooley</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">Sometimes The Cracks Get
                                    Too
                                    Big to Hold a
                                    Friendship Together</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 13px;font-family: Roboto;font-weight: 400;">Why I’m
                                letting
                                a 40-year friendship go.</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 13 . 7 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Memoir</span>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <img src="{{ asset('goodeva-media/newscontent3.png') }}" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews3.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Jane
                                    Elliott PhD in Better Humans</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">The Trouble With
                                    Teachability
                                </h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 13px;font-family: Roboto;font-weight: 400;">Why solving
                                for
                                what’s easily explained winds up making things
                                hard</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 23 . 6 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Psychology</span>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <img src="{{ asset('goodeva-media/newscontent4.png') }}" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews4.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Cameron
                                    Kruse in Earth Genome</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">Food Twin: Stress Testing
                                    the
                                    U.S. Food System</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 13px;font-family: Roboto;font-weight: 400;">Today the
                                Plotline, the food climate and data community organized
                                by Earth Genome, is launching Food Twin, a proof of concept digit…
                                twin…</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 26 . 8 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Climate
                                Change</span>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <img src="{{ asset('goodeva-media/newscontent5.png') }}" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews5.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Pernoste
                                    & Dahl in SYNERGY</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">How to Read a Poem</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 13px;font-family: Roboto;font-weight: 400;">For poets
                                and
                                non-poets</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 9 . 10 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Blog</span>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <img src="{{ asset('goodeva-media/newscontent6.png') }}" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews6.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Duane
                                    Valz</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">The Corporate Governance
                                    Failure at the Heart of
                                    Sam Altman’s Ouster from OpenAI</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 13px;font-family: Roboto;font-weight: 400;">In this
                                piece I
                                examine the flawed corporate structure of OpenAI,
                                and the neglect of governance evolution during a year of immens…
                                change</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 20 . 12 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Governance</span>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <img src="{{ asset('goodeva-media/newscontent7.png') }}" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews7.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Mike
                                    Grindle in ILLUMINATION</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">Frutiger Aero: When the
                                    Future
                                    Looked Optimistic</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 13px;font-family: Roboto;font-weight: 400;">The 2000s
                                design aesthetic that you forgot about</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 12 . 8 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Design</span>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <img src="{{ asset('goodeva-media/newscontent8.png') }}" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews8.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Jessicah
                                    Lahitou in Fanfare</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">Being 40 with Beyoncé</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 13px;font-family: Roboto;font-weight: 400;">Entering
                                middle-age with Queen Bey in Toronto: highly <br>
                                recommend.</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Oct 14 . 6 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Music</span>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <img src="{{ asset('goodeva-media/newscontent9.png') }}" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews9.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Ty
                                    Stephens in Towards Data Science</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">From Punch Cards to
                                    ChatGPT
                                </h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 13px;font-family: Roboto;font-weight: 400;">My
                                Grandfather’s Glimpse into Generative AI</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Nov 1 . 9 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">ChatGPT</span>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <img src="{{ asset('goodeva-media/newscontent10.png') }}" alt="">
                        </div>
                        <div class="col-sm-10">
                            <div class="mb-2" style="display: flex; align-items:center">
                                <img class="mr-2" src="{{ asset('goodeva-media/profnews10.png') }}" alt="">
                                <span style="color: #242424;font-family: Roboto;font-size: 13px;font-weight: 800;">Vicki
                                    Tan</span>
                            </div>
                            <a href="#">
                                <h5 style="color: #242424;font-family: Roboto;font-weight: 800;">The Long View</h5>
                            </a>
                            <p style="color: #6B6B6B;font-size: 13px;font-family: Roboto;font-weight: 400;">A
                                metaphysical
                                design framework to help us design better
                                possible past/present/futures to create the human experience we…
                                want, for all time</p>
                            <span style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Oct 26 . 17 min
                                read</span><span class="ml-3"
                                style="color: #6B6B6B;font-size: 12px;font-weight: 400; padding:5px; background-color:#F2F2F2;border-radius:20px">Technology</span>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <h3 style="color: #242424;font-family: Roboto;font-size: 17px;font-weight: 800;">Discover more of
                        what matters to you</h3>
                    <span> <button class="mt-3  mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Programming</button></span>
                    <span> <button class="mt-3  mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Data
                            Science</button></span>
                    <span> <button class="mt-3  mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Technology</button></span>
                    <span><button class="mt-3 mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Self
                            Improvement</button></span>
                    <span><button class="mt-3 mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Writing</button></span>
                    <span><button class="mt-3 mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Relationships</button></span>
                    <br>
                    <span><button class="mt-3 mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Machine
                            Learning</button></span>
                    <span><button class="mt-3 mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Productivity</button></span>
                    <span><button class="mt-3 mx-1 btn btn-primary"
                            style="background-color:#f2f2f2;color:#000; border-radius:20px; border:0">Politics</button></span>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js_after')
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <style>
        .button-set {
            display: flex;
            overflow: hidden;
            transition: transform 0.5s ease;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var buttonSet = document.querySelector('.button-set');
            var badgesContainer = document.querySelector('.badges-container');
            var nextBtn = document.getElementById('nextBtn');
            var topics = [
                'Music',
                'Programming',
                'ChatGPT',
                'High School',
                'Governance',
                'Politics',
                'Economics',
                'Productivity',
                'Self Improvement',
                'Writing',
                'Reading',
                'Lifestyle',
                'Technology',
                'Artifical Intelligence',
                'Programming',
                'Tech',
                'Business',
                'Data Science',
                'Machine Learning',
                'Blockchain',
            ];

            nextBtn.addEventListener('click', function() {
                var firstItem = badgesContainer.querySelector('.filter-btn');
                badgesContainer.removeChild(firstItem);

                var newBadge = document.createElement('button');
                newBadge.className = 'mx-1 btn btn-primary filter-btn badge-topics topics-text';
                newBadge.setAttribute('data-filter', 'New Topic');
                var randomTopic = topics[Math.floor(Math.random() * topics.length)];
                newBadge.innerText = randomTopic;

                badgesContainer.appendChild(newBadge);
            });
            var filterButtons = document.querySelectorAll('.badge-topics');
            filterButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    filterButtons.forEach(function(btn) {
                        btn.classList.remove('btn-active');
                    });
                    this.classList.add('btn-active');
                });
            });
            var exploreButton = document.getElementById('exploreBtn');
            exploreButton.addEventListener('click', function() {
                filterButtons.forEach(function(btn) {
                    btn.classList.remove('btn-active');
                });
            });
            var exploreButtonMob = document.getElementById('exploreBtnMobile');
            exploreButtonMob.addEventListener('click', function() {
                filterButtons.forEach(function(btn) {
                    btn.classList.remove('btn-active');
                });
            });
            var badgesContainer = document.querySelector('.badges-container');
            var nextBtn = document.getElementById('nextBtn');

            badgesContainer.addEventListener('click', function(event) {
                if (event.target && event.target.classList.contains('badge-topics')) {
                    document.querySelectorAll('.badge-topics').forEach(function(btn) {
                        btn.classList.remove('btn-active');
                    });
                    event.target.classList.add('btn-active');
                }
            });
            var options = {
                strings: [
                    "discover stories.",
                    "stay insightful.",
                    "explore topics.",
                    "ignite your potential.",
                    "innovate with purpose.",
                    "empower your team.",
                    "collaborate for success.",
                    "strive for excellence.",
                    "build a resilient culture.",
                    "inspire positive change.",
                    "foster creativity.",
                    "lead with passion.",
                    "drive sustainable success.",
                    "embody teamwork spirit.",
                    "pioneer possibility.",
                    "fuel your ambition.",
                    "champion diversity.",
                    "aspire to inspire.",
                    "navigate with confidence.",
                    "discover stories.",
                ],
                typeSpeed: 80,
                backSpeed: 50,
                backDelay: 1000,
                startDelay: 500,
                loop: true,
                showCursor: true,
            };

            var typed = new Typed('#typed-output', options);
            var typedmob = new Typed('#typed-output-mobile', options);
        });
    </script>
@endsection
