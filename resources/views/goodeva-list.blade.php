@extends('layouts.front-evamedia')
@section('title', 'CMS Berita')
@section('css_after')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css">
    <style>
        body {
            background-color: #FFFEEC;
        }

        .wkwk {
            z-index: 999;
        }

        .btn-side-header {
            z-index: 999;
            position: relative;
            margin-right: 20px;
        }

        .satudiv {

            background-color: white;
        }

        .has-search {
            position: relative;
        }

        .has-search .form-control {
            padding-right: 2.375rem;
            /* Adjust as needed */
        }

        .has-search .input-group-addon {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            padding: 50px;
            pointer-events: none;
        }

        #example thead th {
            font-weight: 500 !important;
            font-family: Manrope;
            font-size: 12px !important;
            background-color: #FFFFFF !important;
        }

        #example tbody td {
            font-weight: 600 !important;
            font-family: Manrope;
            font-size: 15px !important;
            background-color: #FFFFFF !important;
            
        }

        #example {
            background-color: #EBF0ED !important;
            border:1px solid #EBF0ED !important;
            border-radius:10px !important;
        }
    </style>
@endsection

@section('css-before')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
@endsection

@section('content')
    <section class="">
        <div class="col-lg-12 wkwk w-100">
            <div class="row">
                <div class="col-6 pt-3">
                    <button type="button" class="btn btn-circle btn-side-header pr-4" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <img src="{{ asset('goodeva-media/bars-sort.png') }}" alt="" class="navicon">
                    </button>
                    <span style="color: #18120F;font-size: 32px;font-weight: 700;">Berita</span>
                </div>
                <div class="col-6 pt-3 d-flex justify-content-end">
                    <div class="row">
                        <div class="col-3">
                            <span><img src="{{ asset('goodeva-media/profile.png') }}" alt=""></span>
                        </div>
                        <div class="col-9">
                            <span style="color: #18120F;font-size: 15px;font-weight: 600;">Gladys Kanyinda</span>
                            <p style="color: #6B6B6B;font-size: 12px;font-weight: 400;">Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <div class="container-fluid w-100"
                style="background: white; padding-top:10px; padding-bottom:5%; width:100%; border-radius:10px;">
                <div class="row">
                    <div class="col-10">
                        <input placeholder="Search Order..." type="text" id="myInput"
                            style="background-image: url('{{ asset('goodeva-media/magnifying-glass.png') }}');background-repeat: no-repeat; border-radius:5px;   background-position: 10px center;background-size: 20px; width: 100%; font-size: 16px; padding: 12px 20px 12px 40px;border: 1px solid #EBF0ED; margin-bottom: 12px; height:6vh">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary" onclick=""
                            style="width: 100%; height: 6vh; background-color: #FF8548; border-radius: 10px; border: 0;">
                            Buat Data
                        </button>
                        {{-- <a href=""><img src="{{ asset('goodeva-media/button.png') }}" alt=""></a> --}}
                    </div>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%; margin-top:20px">
                    <thead>
                        <tr>
                            <th><input type="checkbox"> Tanggal</th>
                            <th>Penulis</th>
                            <th>Judul</th>
                            <th>Tags</th>
                            <th>Image</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input type="checkbox"> 07 Desember 2023</td>
                            <td>Gladys Kanyinda</td>
                            <td>The Trouble With...</td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#EBF0ED;border: 1px solid #b5b5b5;color: #6B6B6B;font-size: 12px;font-weight: 600;border-radius:10px">Technology</button>
                            </td>
                            <td>Checked
                            </td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#F1F7FF;border: 1px solid #44A6E9;color: #44A6E9;font-size: 12px;font-weight: 600;border-radius:10px">Published</button>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> 07 Desember 2023</td>
                            <td>Gladys Kanyinda</td>
                            <td>The Trouble With...</td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#EBF0ED;border: 1px solid #b5b5b5;color: #6B6B6B;font-size: 12px;font-weight: 600;border-radius:10px">Technology</button>
                            </td>
                            <td>Checked
                            </td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#F1F7FF;border: 1px solid #44A6E9;color: #44A6E9;font-size: 12px;font-weight: 600;border-radius:10px">Published</button>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> 07 Desember 2023</td>
                            <td>Gladys Kanyinda</td>
                            <td>The Trouble With...</td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#EBF0ED;border: 1px solid #b5b5b5;color: #6B6B6B;font-size: 12px;font-weight: 600;border-radius:10px">Technology</button>
                            </td>
                            <td>Checked
                            </td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#F1F7FF;border: 1px solid #44A6E9;color: #44A6E9;font-size: 12px;font-weight: 600;border-radius:10px">Published</button>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> 07 Desember 2023</td>
                            <td>Gladys Kanyinda</td>
                            <td>The Trouble With...</td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#EBF0ED;border: 1px solid #b5b5b5;color: #6B6B6B;font-size: 12px;font-weight: 600;border-radius:10px">Technology</button>
                            </td>
                            <td>Checked
                            </td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#F1F7FF;border: 1px solid #44A6E9;color: #44A6E9;font-size: 12px;font-weight: 600;border-radius:10px">Published</button>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> 07 Desember 2023</td>
                            <td>Gladys Kanyinda</td>
                            <td>The Trouble With...</td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#EBF0ED;border: 1px solid #b5b5b5;color: #6B6B6B;font-size: 12px;font-weight: 600;border-radius:10px">Technology</button>
                            </td>
                            <td>Checked
                            </td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#F1F7FF;border: 1px solid #44A6E9;color: #44A6E9;font-size: 12px;font-weight: 600;border-radius:10px">Published</button>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> 07 Desember 2023</td>
                            <td>Gladys Kanyinda</td>
                            <td>The Trouble With...</td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#EBF0ED;border: 1px solid #b5b5b5;color: #6B6B6B;font-size: 12px;font-weight: 600;border-radius:10px">Technology</button>
                            </td>
                            <td>Checked
                            </td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#F1F7FF;border: 1px solid #44A6E9;color: #44A6E9;font-size: 12px;font-weight: 600;border-radius:10px">Published</button>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> 07 Desember 2023</td>
                            <td>Gladys Kanyinda</td>
                            <td>The Trouble With...</td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#EBF0ED;border: 1px solid #b5b5b5;color: #6B6B6B;font-size: 12px;font-weight: 600;border-radius:10px">Technology</button>
                            </td>
                            <td>Checked
                            </td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#F1F7FF;border: 1px solid #44A6E9;color: #44A6E9;font-size: 12px;font-weight: 600;border-radius:10px">Published</button>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> 07 Desember 2023</td>
                            <td>Gladys Kanyinda</td>
                            <td>The Trouble With...</td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#EBF0ED;border: 1px solid #b5b5b5;color: #6B6B6B;font-size: 12px;font-weight: 600;border-radius:10px">Technology</button>
                            </td>
                            <td>Checked
                            </td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#F1F7FF;border: 1px solid #44A6E9;color: #44A6E9;font-size: 12px;font-weight: 600;border-radius:10px">Published</button>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> 07 Desember 2023</td>
                            <td>Gladys Kanyinda</td>
                            <td>The Trouble With...</td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#EBF0ED;border: 1px solid #b5b5b5;color: #6B6B6B;font-size: 12px;font-weight: 600;border-radius:10px">Technology</button>
                            </td>
                            <td>Checked
                            </td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#F1F7FF;border: 1px solid #44A6E9;color: #44A6E9;font-size: 12px;font-weight: 600;border-radius:10px">Published</button>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> 07 Desember 2023</td>
                            <td>Gladys Kanyinda</td>
                            <td>The Trouble With...</td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#EBF0ED;border: 1px solid #b5b5b5;color: #6B6B6B;font-size: 12px;font-weight: 600;border-radius:10px">Technology</button>
                            </td>
                            <td>Checked
                            </td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#F1F7FF;border: 1px solid #44A6E9;color: #44A6E9;font-size: 12px;font-weight: 600;border-radius:10px">Published</button>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> 07 Desember 2023</td>
                            <td>Gladys Kanyinda</td>
                            <td>The Trouble With...</td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#EBF0ED;border: 1px solid #b5b5b5;color: #6B6B6B;font-size: 12px;font-weight: 600;border-radius:10px">Technology</button>
                            </td>
                            <td>Checked
                            </td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#F1F7FF;border: 1px solid #44A6E9;color: #44A6E9;font-size: 12px;font-weight: 600;border-radius:10px">Published</button>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> 07 Desember 2023</td>
                            <td>Gladys Kanyinda</td>
                            <td>The Trouble With...</td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#EBF0ED;border: 1px solid #b5b5b5;color: #6B6B6B;font-size: 12px;font-weight: 600;border-radius:10px">Technology</button>
                            </td>
                            <td>Checked
                            </td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#F1F7FF;border: 1px solid #44A6E9;color: #44A6E9;font-size: 12px;font-weight: 600;border-radius:10px">Published</button>
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> 07 Desember 2023</td>
                            <td>Gladys Kanyinda</td>
                            <td>The Trouble With...</td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#EBF0ED;border: 1px solid #b5b5b5;color: #6B6B6B;font-size: 12px;font-weight: 600;border-radius:10px">Technology</button>
                            </td>
                            <td>Checked
                            </td>
                            <td><button type="button" class="btn btn-primary"
                                    style="height: 36px;background-color:#F1F7FF;border: 1px solid #44A6E9;color: #44A6E9;font-size: 12px;font-weight: 600;border-radius:10px">Published</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </center>
    </section>
    <section class="table">

    </section>
@endsection

@section('js_after')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#example').DataTable({
                select: {
                    style: 'multi', // 'single', 'multi', 'os', 'multi+shift'
                    selector: 'td:first-child input[type="checkbox"]',
                },
                initComplete: function(settings, json) {
                    // Modify styles after initialization
                    $('#example').css('background-color', '#EBF0ED');
                    $('#example tbody td').css({
                        'font-weight': '600',
                        'font-family': 'Manrope',
                        'font-size': '15px',
                        'background-color': '#EBF0ED'
                    });
                }
            });
        });
    </script>
@endsection
@section('js-before')
@endsection
