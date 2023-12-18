<?php



namespace App\Http\Controllers;



use GuzzleHttp\Psr7\FnStream;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class OmsetkuV2Controller extends Controller

{

  public function index(Request $request)
  {
    // return $request->input('lang'); 
    $lang = $request->input('lang');

    if ($request->input('lang') == 'en') {

      $banner = [
        // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
        "title" => "Thousands of Sales and Businesses Have Used the Omsetku Application",
        // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
        "subtitle" => "Increase your sales with the Omsetku application. <br> Download Omsetku now for free!",
        // "img" => "phone - slider-min.png",
        "img" => "orang - banner-min.png",
        "btn_banner" => "btn-banner.png",
        "btn_coba" => "btn-coba.png",
        "btn_res" => "btn-btn.png",
      ];

      $why_omsetku = [
        "title" => "Always Suspicious of Sales Performance Want to Monitor Sales Auto Pilot? Try Omsetku!",
        "img" => "omsetku-dashboard.webp",
        "content" => [
          [
            "title_content" => "Digital Quotation, Sales Order, & Invoice",
            "describe_content" => "Making professional business quotations, sales orders & invoices can be done easily just through the application so that sales can work optimally wherever and whenever.",
          ],
          [
            "title_content" => "Real-time Access to Performance Report",
            "describe_content" => "Good performance reports from Lead, team performance, to sales activity activities can be monitored in real-time. The available data also displays graphs to make it easier to analyze the performance of sales indicators.",
          ],
          [
            "title_content" => "Lead Scoring Temperature Market",
            "describe_content" => "Lead scoring temperature market information to determine audience segmentation to map your business targets more precisely. Follow up is more accurate and the chance of closing sales increases.",
          ]
        ],
      ];

      $who_omsetku = [
        "title" => "Speed ​​up sales and customer service with the best Omnichannel CRM",
        "describe" => "
        <p>Our system helps businesses to analyze sales workers with BigData, we can analyze behavior and encourage them to achieve their sales targets.</p>
        ",
        "img" => "omsetku-saller-min.webp",
        "responsive_hand" => "hand - blue.png"
      ];

      $when_omsetku = [
        "title" => "Managing marketing & sales activities enables them to sell more",
        "describe" => "
        <p>We provide advanced technology to integrate all sales data from devices from customer data to sales data then processed with AI and displayed on an integrated platform to help monitor sales activity.</p>
        ",
        "img" => "omsetku-dashboard-in-hand-min.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $how_omsetku = [
        "title" => "360 Degree customer & sales view",
        "describe" => "
        <p>Proven technology enables SMBs to achieve their sales targets by empowering AI and intelligent dashboard analytics.</p>
        ",
        "img" => "omsetku-crm-min.png",
        "img_res" => "img-db.png"
      ];

      $funnel_omsetku = [
        "title" => "All In One Business Solution",
        "describe" => "
        <p>Our application helps to collect and manage customer database for reference of promotion decisions and marketing activities</p>
        ",
        "img" => "omsetku-product-funnel.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $integrasi_omsetku = [
        "title" => "Integrate with your system",
        "describe" => "
        <p>We help you stay connected with existing ERP & other third party applications to integrate data between new and existing systems.</p>
        ",
        "img" => "omsetku-programming.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $phone_omsetku = [
        "title_1" => "Sales Targets",
        "title_2" => "Customer Details",
        "title_3" => "Sales Commission",
        "title_4" => "Expense",
        "describe_1" => "
        <p>Calculation of sales data & automatic sales monitoring accurately so as to identify employee fatigue earlier.</p>
        ",
        "describe_2" => "
        <p>Record all customer data to be closer & familiar to increase customer satisfaction.</p>
        ",
        "describe_3" => "
        <p>No need to be confused anymore, with the commission feature you can record commissions more easily.</p>
        ",
        "describe_4" => "
        <p>The expense/reimbursement feature makes it easy for you to record all existing expenses, so you can manage expenses easily.</p>
        ",
        "img_1" => "omsetku-feature-1.png",
        "img_2" => "omsetku-feature-2.png",
        "img_3" => "omsetku-feature-3.png",
        "img_4" => "omsetku-feature-4.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $manfaat_omsetku = [
        "title" => "Why Omsetku Can Help Sales to work more easily & efficiently?",
        "describe" => "
        <p>Start Increasing Your Sales With the Omsetku Application.</p>
        ",
        "icon_1" => "icon-1.png",
        "icon_2" => "icon-2.png",
        "icon_3" => "icon-3.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $ads_omsetku = [
        "title" => "Increase Sales and Customer Service with Omsetku.",
        "describe" => "
        <p>Start Increasing Your Sales With Omsetku Now!</p>
        ",
        "img" => "omsetku-saller.webp",
        "responsive_hand" => "hand - blue.png"
      ];
    } else {

      $banner = [
        // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
        "title" => "Ribuan Sales dan Bisnis Telah Menggunakan Aplikasi Omsetku",
        // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
        "subtitle" => "Tingkatkan penjualan Anda dengan aplikasi Omsetku. <br> Download Omsetku sekarang gratis!",
        // "img" => "phone - slider-min.png",
        "img" => "orang - banner-min.png",
        "btn_banner" => "btn-banner.png",
        "btn_coba" => "btn-coba.png",
        "btn_res" => "btn-btn.png",
      ];

      $why_omsetku = [
        "title" => "Selalu Curiga Sama Performa Sales Ingin Pantau Sales Auto Pilot? Coba Omsetku!",
        "img" => "omsetku-dashboard.webp",
        "content" => [
          [
            "title_content" => "Digital Quotation, Sales Order, & Invoice",
            "describe_content" => "Membuat quotation, sales order & invoice profesional bisnis dapat dilakukan dengan mudah hanya lewat aplikasi sehingga sales dapat bekerja secara optimal dimanapun dan kapapun. ",
          ],
          [
            "title_content" => "Real-time Access to Performance Report",
            "describe_content" => "Laporan kinerja baik dari Lead, kinerja tim, hingga aktivitas kegiatan penjualan dapat dimonitor secara real-time. Data yang tersedia juga menampilkan grafik untuk mempermudah analisis kinerja indikator penjualan.",
          ],
          [
            "title_content" => "Lead Scoring Temperature Market",
            "describe_content" => "Informasi lead scoring temperature market untuk menentukan segmentasi audiens untuk memetakan target bisnis mu jadi lebih tepat. Follow up lebih akurat dan kesempatan closing penjualan meningkat.",
          ]
        ],
      ];

      $who_omsetku = [
        "title" => "Percepat penjualan dan layanan pelanggan dengan Omnichannel CRM terbaik",
        "describe" => "
        <p>Sistem kami membantu bisnis untuk menganalisis pekerja penjualan dengan BigData, kami dapat menganalisis perilaku dan mendorong mereka untuk mencapai target penjualan mereka.</p>
        ",
        "img" => "omsetku-saller-min.webp",
        "responsive_hand" => "hand - blue.png"
      ];

      $when_omsetku = [
        "title" => "Mengelola aktivitas pemasaran & penjualan memungkinkan mereka untuk menjual lebih banyak",
        "describe" => "
        <p>Kami melayani teknologi canggih untuk mengintegrasikan semua data penjualan dari perangkat dari data pelanggan ke data penjualan kemudian diproses dengan AI dan ditampilkan pada platform terintegrasi untuk membantu memantau aktivitas penjualan penjualan.</p>
        ",
        "img" => "omsetku-dashboard-in-hand-min.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $how_omsetku = [
        "title" => "Tampilan pelanggan & penjualan 360 Derajat",
        "describe" => "
        <p>Teknologi yang terbukti memungkinkan UKM mencapai target penjualan mereka br dengan memberdayakan AI dan analitik dasbor intelijen.</p>
        ",
        "img" => "omsetku-crm-min.png",
        "img_res" => "img-db.png"
      ];

      $funnel_omsetku = [
        "title" => "Semua Dalam Satu Solusi Bisnis",
        "describe" => "
        <p>Aplikasi kami membantu mengumpulkan dan mengatur basis data pelanggan untuk referensi keputusan promosi dan aktivitas pemasaran</p>
        ",
        "img" => "omsetku-product-funnel.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $integrasi_omsetku = [
        "title" => "Integrasikan dengan system Anda",
        "describe" => "
        <p>Kami membantu Anda tetap terhubung dengan ERP yang ada & aplikasi pihak ketiga lainnya untuk mengintegrasikan data antara sistem baru dan yang sudah ada.</p>
        ",
        "img" => "omsetku-programming.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $phone_omsetku = [
        "title_1" => "Target Penjualan",
        "title_2" => "Detail Pelanggan",
        "title_3" => "Komisi Penjualan",
        "title_4" => "Expense",
        "describe_1" => "
        <p>Perhitungan data penjualan & pemantauan penjualan otomatis secara akurat sehingga dapat mengidentifikasi kelelahan karyawan lebih awal.</p>
        ",
        "describe_2" => "
        <p>Catat semua data pelanggan agar lebih dekat & akrab untuk meningkatkan kepuasan pelanggan.</p>
        ",
        "describe_3" => "
        <p>Tidak perlu bingung lagi, dengan fitur komisi Anda bisa mencatat komisi dengan lebih mudah.</p>
        ",
        "describe_4" => "
        <p>Fitur pengeluaran/reimbursement memudahkan Anda untuk mencatat semua pengeluaran yang ada, sehingga Anda dapat mengatur pengeluaran dengan mudah.</p>
        ",
        "img_1" => "omsetku-feature-1_1.png",
        "img_2" => "omsetku-feature-2_1.png",
        "img_3" => "omsetku-feature-3_1.png",
        "img_4" => "omsetku-feature-4_1.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $manfaat_omsetku = [
        "title" => "Mengapa Omsetku Bisa Membantu Penjualan untuk bekerja lebih mudah & efisien?",
        "describe" => "
        <p>Mulai Tingkatkan Penjualan Anda Dengan Aplikasi Omsetku.</p>
        ",
        "icon_1" => "icon-1.png",
        "icon_2" => "icon-2.png",
        "icon_3" => "icon-3.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $ads_omsetku = [
        "title" => "Tingkatkan Penjualan dan Layanan Pelanggan Bersama Omsetku.",
        "describe" => "
        <p>Mulai Tingkatkan Penjualan Anda Dengan Omsetku Sekarang!</p>
        ",
        "img" => "omsetku-saller.webp",
        "responsive_hand" => "hand - blue.png"
      ];
    }

    // dd($data_content);
    // dd($service_detail);

    return view('front-omsetku.home-v2-1', compact(
      "banner",
      "why_omsetku",
      "when_omsetku",
      "who_omsetku",
      "how_omsetku",
      "funnel_omsetku",
      "integrasi_omsetku",
      "phone_omsetku",
      "manfaat_omsetku",
      "ads_omsetku",
      "lang",
      // "service_detail",
      // "data_content",
    ));
  }


  public function indexV2_2(Request $request)
  {
    // return $request->input('lang'); 
    $lang = $request->input('lang');

    if ($request->input('lang') == 'en') {

      $banner = [
        // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
        "title" => "Thousands of Sales and Businesses Have Used the Omsetku Application",
        // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
        "subtitle" => "Increase your sales with the Omsetku application. <br> Download Omsetku now for free!",
        // "img" => "phone - slider-min.png",
        "img" => "orang - banner-min.png",
        "btn_banner" => "btn-banner.png",
        "btn_coba" => "btn-coba.png",
        "btn_res" => "btn-btn.png",
      ];

      $why_omsetku = [
        "title" => "Always Suspicious of Sales Performance Want to Monitor Sales Auto Pilot? Try Omsetku!",
        "img" => "omsetku-dashboard.webp",
        "content" => [
          [
            "title_content" => "Komisi Referral hingga Rp 5 juta",
            "describe_content" => "Making professional business quotations, sales orders & invoices can be done easily just through the application so that sales can work optimally wherever and whenever.",
          ],
          [
            "title_content" => "Real-time Access to Performance Report",
            "describe_content" => "Good performance reports from Lead, team performance, to sales activity activities can be monitored in real-time. The available data also displays graphs to make it easier to analyze the performance of sales indicators.",
          ],
          [
            "title_content" => "Lead Scoring Temperature Market",
            "describe_content" => "Lead scoring temperature market information to determine audience segmentation to map your business targets more precisely. Follow up is more accurate and the chance of closing sales increases.",
          ]
        ],
      ];

      $who_omsetku = [
        "title" => "Speed ​​up sales and customer service with the best Omnichannel CRM",
        "describe" => "
        <p>Our system helps businesses to analyze sales workers with BigData, we can analyze behavior and encourage them to achieve their sales targets.</p>
        ",
        "img" => "omsetku-saller-min.webp",
        "responsive_hand" => "hand - blue.png"
      ];

      $when_omsetku = [
        "title" => "Managing marketing & sales activities enables them to sell more",
        "describe" => "
        <p>We provide advanced technology to integrate all sales data from devices from customer data to sales data then processed with AI and displayed on an integrated platform to help monitor sales activity.</p>
        ",
        "img" => "omsetku-dashboard-in-hand-min.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $how_omsetku = [
        "title" => "360 Degree customer & sales view",
        "describe" => "
        <p>Proven technology enables SMBs to achieve their sales targets by empowering AI and intelligent dashboard analytics.</p>
        ",
        "img" => "omsetku-crm-min.png",
        "img_res" => "img-db.png"
      ];

      $funnel_omsetku = [
        "title" => "All In One Business Solution",
        "describe" => "
        <p>Our application helps to collect and manage customer database for reference of promotion decisions and marketing activities</p>
        ",
        "img" => "omsetku-product-funnel.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $integrasi_omsetku = [
        "title" => "Integrate with your system",
        "describe" => "
        <p>We help you stay connected with existing ERP & other third party applications to integrate data between new and existing systems.</p>
        ",
        "img" => "omsetku-programming.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $phone_omsetku = [
        "title_1" => "Sales Targets",
        "title_2" => "Customer Details",
        "title_3" => "Sales Commission",
        "title_4" => "Expense",
        "describe_1" => "
        <p>Calculation of sales data & automatic sales monitoring accurately so as to identify employee fatigue earlier.</p>
        ",
        "describe_2" => "
        <p>Record all customer data to be closer & familiar to increase customer satisfaction.</p>
        ",
        "describe_3" => "
        <p>No need to be confused anymore, with the commission feature you can record commissions more easily.</p>
        ",
        "describe_4" => "
        <p>The expense/reimbursement feature makes it easy for you to record all existing expenses, so you can manage expenses easily.</p>
        ",
        "img_1" => "omsetku-feature-1.png",
        "img_2" => "omsetku-feature-2.png",
        "img_3" => "omsetku-feature-3.png",
        "img_4" => "omsetku-feature-4.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $manfaat_omsetku = [
        "title" => "Why Omsetku Can Help Sales to work more easily & efficiently?",
        "describe" => "
        <p>Start Increasing Your Sales With the Omsetku Application.</p>
        ",
        "icon_1" => "icon-1.png",
        "icon_2" => "icon-2.png",
        "icon_3" => "icon-3.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $ads_omsetku = [
        "title" => "Increase Sales and Customer Service with Omsetku.",
        "describe" => "
        <p>Start Increasing Your Sales With Omsetku Now!</p>
        ",
        "img" => "omsetku-saller.webp",
        "responsive_hand" => "hand - blue.png"
      ];
    } else {

      $banner = [
        // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
        "title" => "Rekomendasikan Omsetku, dapatkan passive",
        "title2" => "income jutaan rupiah!",
        // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
        "subtitle" => "Ajak mitra bisnismu untuk menggunakan Omsetku dan dapatkan penghasilan <br> tambahan mulai dari Rp 540.000 hingga Rp 5.000.000 per mitra!",
        // "img" => "phone - slider-min.png",
        "img" => "orang - banner-min.png",
        "btn_banner" => "btn-banner.png",
        "btn_coba" => "btn-coba.png",
        "btn_coba_gratis" => "omsetku-gratis.png",
        "btn_coba_demo" => "omsetku-demo2.png",
        "btn_res" => "btn-btn.png",
      ];

      $why_omsetku = [
        "title" => "Mengapa Anda Harus Bergabung Menjadi",
        "title2" => "Anggota Omsetku Referal?",
        "img" => "omsetku-mengapa2.png",
        "content" => [
          [
            "title_content" => "Komisi Referral hingga Rp 5 juta",
            "describe_content" => "Dapatkan komisi referral mulai dari Rp 540.000 hingga Rp 5.000.000 hanya dengan mengajak mitra bisnis Anda untuk berlangganan Omsetku.",
          ],
          [
            "title_content" => "Referral Bonus Hadiah",
            "describe_content" => "Dapatkan tambahan reward dan penawaran menarik lainnya di Program Referral Omsetku.",
          ]
        ],
        "content_2" => [
          [
            "title_content" => "Apa saja kelebihan program afiliasi Omsetku bagi mitra bisnis Anda?",
            "describe_content" => "Selain Anda akan mendapatkan keuntungan sebagai Member Referral Omsetku, rekan bisnis Anda yang diajak berlangganan juga akan mendapatkan diskon Rp 250.000 untuk paket berlangganan pertama mereka.",
          ],
        ],
      ];

      $who_omsetku = [
        "title" => "Percepat penjualan dan layanan pelanggan dengan Omnichannel CRM terbaik",
        "describe" => "
        <p>Sistem kami membantu bisnis untuk menganalisis pekerja penjualan dengan BigData, kami dapat menganalisis perilaku dan mendorong mereka untuk mencapai target penjualan mereka.</p>
        ",
        "img" => "omsetku-saller-min.webp",
        "responsive_hand" => "hand - blue.png"
      ];

      $when_omsetku = [
        "title" => "Mengelola aktivitas pemasaran & penjualan memungkinkan mereka untuk menjual lebih banyak",
        "describe" => "
        <p>Kami melayani teknologi canggih untuk mengintegrasikan semua data penjualan dari perangkat dari data pelanggan ke data penjualan kemudian diproses dengan AI dan ditampilkan pada platform terintegrasi untuk membantu memantau aktivitas penjualan penjualan.</p>
        ",
        "img" => "omsetku-dashboard-in-hand-min.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $how_omsetku = [
        "title" => "Tampilan pelanggan & penjualan 360 Derajat",
        "describe" => "
        <p>Teknologi yang terbukti memungkinkan UKM mencapai target penjualan mereka br dengan memberdayakan AI dan analitik dasbor intelijen.</p>
        ",
        "img" => "omsetku-crm-min.png",
        "img_res" => "img-db.png"
      ];

      $funnel_omsetku = [
        "title" => "Semua Dalam Satu Solusi Bisnis",
        "describe" => "
        <p>Aplikasi kami membantu mengumpulkan dan mengatur basis data pelanggan untuk referensi keputusan promosi dan aktivitas pemasaran</p>
        ",
        "img" => "omsetku-product-funnel.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $integrasi_omsetku = [
        "title" => "Integrasikan dengan system Anda",
        "describe" => "
        <p>Kami membantu Anda tetap terhubung dengan ERP yang ada & aplikasi pihak ketiga lainnya untuk mengintegrasikan data antara sistem baru dan yang sudah ada.</p>
        ",
        "img" => "omsetku-programming.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $phone_omsetku = [
        "title_1" => "Target Penjualan",
        "title_2" => "Detail Pelanggan",
        "title_3" => "Komisi Penjualan",
        "title_4" => "Expense",
        "describe_1" => "
        <p>Perhitungan data penjualan & pemantauan penjualan otomatis secara akurat sehingga dapat mengidentifikasi kelelahan karyawan lebih awal.</p>
        ",
        "describe_2" => "
        <p>Catat semua data pelanggan agar lebih dekat & akrab untuk meningkatkan kepuasan pelanggan.</p>
        ",
        "describe_3" => "
        <p>Tidak perlu bingung lagi, dengan fitur komisi Anda bisa mencatat komisi dengan lebih mudah.</p>
        ",
        "describe_4" => "
        <p>Fitur pengeluaran/reimbursement memudahkan Anda untuk mencatat semua pengeluaran yang ada, sehingga Anda dapat mengatur pengeluaran dengan mudah.</p>
        ",
        "img_1" => "omsetku-feature-1_1.png",
        "img_2" => "omsetku-feature-2_1.png",
        "img_3" => "omsetku-feature-3_1.png",
        "img_4" => "omsetku-feature-4_1.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $manfaat_omsetku = [
        "title" => "Mengapa Omsetku Bisa Membantu Penjualan untuk bekerja lebih mudah & efisien?",
        "describe" => "
        <p>Mulai Tingkatkan Penjualan Anda Dengan Aplikasi Omsetku.</p>
        ",
        "icon_1" => "icon-1.png",
        "icon_2" => "icon-2.png",
        "icon_3" => "icon-3.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $ads_omsetku = [
        "title" => "Tingkatkan Penjualan dan Layanan Pelanggan Bersama Omsetku.",
        "describe" => "
        <p>Mulai Tingkatkan Penjualan Anda Dengan Omsetku Sekarang!</p>
        ",
        "img" => "omsetku-saller.webp",
        "responsive_hand" => "hand - blue.png"
      ];
    }

    // dd($data_content);
    // dd($service_detail);

    return view('front-omsetku.home-v2_2', compact(
      "banner",
      "why_omsetku",
      "when_omsetku",
      "who_omsetku",
      "how_omsetku",
      "funnel_omsetku",
      "integrasi_omsetku",
      "phone_omsetku",
      "manfaat_omsetku",
      "ads_omsetku",
      "lang",
      // "service_detail",
      // "data_content",
    ));
  }
  
  
  public function indexV2_3(Request $request)
  {
    // return $request->input('lang'); 
    $lang = $request->input('lang');

    if ($request->input('lang') == 'en') {

      $banner = [
        // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
        "title" => "Thousands of Sales and Businesses Have Used the Omsetku Application",
        // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
        "subtitle" => "Increase your sales with the Omsetku application. <br> Download Omsetku now for free!",
        // "img" => "phone - slider-min.png",
        "img" => "orang - banner-min.png",
        "btn_banner" => "btn-banner.png",
        "btn_coba" => "btn-coba.png",
        "btn_res" => "btn-btn.png",
      ];

      $why_omsetku = [
        "title" => "Always Suspicious of Sales Performance Want to Monitor Sales Auto Pilot? Try Omsetku!",
        "img" => "omsetku-dashboard.webp",
        "content" => [
          [
            "title_content" => "Digital Quotation, Sales Order, & Invoice",
            "describe_content" => "Making professional business quotations, sales orders & invoices can be done easily just through the application so that sales can work optimally wherever and whenever.",
          ],
          [
            "title_content" => "Real-time Access to Performance Report",
            "describe_content" => "Good performance reports from Lead, team performance, to sales activity activities can be monitored in real-time. The available data also displays graphs to make it easier to analyze the performance of sales indicators.",
          ],
          [
            "title_content" => "Lead Scoring Temperature Market",
            "describe_content" => "Lead scoring temperature market information to determine audience segmentation to map your business targets more precisely. Follow up is more accurate and the chance of closing sales increases.",
          ]
        ],
      ];

      $who_omsetku = [
        "title" => "Speed ​​up sales and customer service with the best Omnichannel CRM",
        "describe" => "
        <p>Our system helps businesses to analyze sales workers with BigData, we can analyze behavior and encourage them to achieve their sales targets.</p>
        ",
        "img" => "omsetku-saller-min.webp",
        "responsive_hand" => "hand - blue.png"
      ];

      $when_omsetku = [
        "title" => "Managing marketing & sales activities enables them to sell more",
        "describe" => "
        <p>We provide advanced technology to integrate all sales data from devices from customer data to sales data then processed with AI and displayed on an integrated platform to help monitor sales activity.</p>
        ",
        "img" => "omsetku-dashboard-in-hand-min.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $how_omsetku = [
        "title" => "360 Degree customer & sales view",
        "describe" => "
        <p>Proven technology enables SMBs to achieve their sales targets by empowering AI and intelligent dashboard analytics.</p>
        ",
        "img" => "omsetku-crm-min.png",
        "img_res" => "img-db.png"
      ];

      $funnel_omsetku = [
        "title" => "All In One Business Solution",
        "describe" => "
        <p>Our application helps to collect and manage customer database for reference of promotion decisions and marketing activities</p>
        ",
        "img" => "omsetku-product-funnel.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $integrasi_omsetku = [
        "title" => "Integrate with your system",
        "describe" => "
        <p>We help you stay connected with existing ERP & other third party applications to integrate data between new and existing systems.</p>
        ",
        "img" => "omsetku-programming.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $phone_omsetku = [
        "title_1" => "Sales Targets",
        "title_2" => "Customer Details",
        "title_3" => "Sales Commission",
        "title_4" => "Expense",
        "describe_1" => "
        <p>Calculation of sales data & automatic sales monitoring accurately so as to identify employee fatigue earlier.</p>
        ",
        "describe_2" => "
        <p>Record all customer data to be closer & familiar to increase customer satisfaction.</p>
        ",
        "describe_3" => "
        <p>No need to be confused anymore, with the commission feature you can record commissions more easily.</p>
        ",
        "describe_4" => "
        <p>The expense/reimbursement feature makes it easy for you to record all existing expenses, so you can manage expenses easily.</p>
        ",
        "img_1" => "omsetku-feature-1.png",
        "img_2" => "omsetku-feature-2.png",
        "img_3" => "omsetku-feature-3.png",
        "img_4" => "omsetku-feature-4.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $manfaat_omsetku = [
        "title" => "Why Omsetku Can Help Sales to work more easily & efficiently?",
        "describe" => "
        <p>Start Increasing Your Sales With the Omsetku Application.</p>
        ",
        "icon_1" => "icon-1.png",
        "icon_2" => "icon-2.png",
        "icon_3" => "icon-3.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $ads_omsetku = [
        "title" => "Increase Sales and Customer Service with Omsetku.",
        "describe" => "
        <p>Start Increasing Your Sales With Omsetku Now!</p>
        ",
        "img" => "omsetku-saller.webp",
        "responsive_hand" => "hand - blue.png"
      ];
    } else {

      $banner = [
        // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
        "title" => "Ribuan Sales dan Bisnis Telah Menggunakan Aplikasi Omsetku",
        // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
        "subtitle" => "Tingkatkan penjualan Anda dengan aplikasi Omsetku. <br> Download Omsetku sekarang gratis!",
        // "img" => "phone - slider-min.png",
        "img" => "orang - banner-min.png",
        "btn_banner" => "btn-banner.png",
        "btn_coba" => "btn-coba.png",
        "btn_res" => "btn-btn.png",
      ];

      $why_omsetku = [
        "title" => "Selalu Curiga Sama Performa Sales Ingin Pantau Sales Auto Pilot? Coba Omsetku!",
        "img" => "omsetku-dashboard.webp",
        "content" => [
          [
            "title_content" => "Digital Quotation, Sales Order, & Invoice",
            "describe_content" => "Membuat quotation, sales order & invoice profesional bisnis dapat dilakukan dengan mudah hanya lewat aplikasi sehingga sales dapat bekerja secara optimal dimanapun dan kapapun. ",
          ],
          [
            "title_content" => "Real-time Access to Performance Report",
            "describe_content" => "Laporan kinerja baik dari Lead, kinerja tim, hingga aktivitas kegiatan penjualan dapat dimonitor secara real-time. Data yang tersedia juga menampilkan grafik untuk mempermudah analisis kinerja indikator penjualan.",
          ],
          [
            "title_content" => "Lead Scoring Temperature Market",
            "describe_content" => "Informasi lead scoring temperature market untuk menentukan segmentasi audiens untuk memetakan target bisnis mu jadi lebih tepat. Follow up lebih akurat dan kesempatan closing penjualan meningkat.",
          ]
        ],
      ];

      $who_omsetku = [
        "title" => "Percepat penjualan dan layanan pelanggan dengan Omnichannel CRM terbaik",
        "describe" => "
        <p>Sistem kami membantu bisnis untuk menganalisis pekerja penjualan dengan BigData, kami dapat menganalisis perilaku dan mendorong mereka untuk mencapai target penjualan mereka.</p>
        ",
        "img" => "omsetku-saller-min.webp",
        "responsive_hand" => "hand - blue.png"
      ];

      $when_omsetku = [
        "title" => "Mengelola aktivitas pemasaran & penjualan memungkinkan mereka untuk menjual lebih banyak",
        "describe" => "
        <p>Kami melayani teknologi canggih untuk mengintegrasikan semua data penjualan dari perangkat dari data pelanggan ke data penjualan kemudian diproses dengan AI dan ditampilkan pada platform terintegrasi untuk membantu memantau aktivitas penjualan penjualan.</p>
        ",
        "img" => "omsetku-dashboard-in-hand-min.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $how_omsetku = [
        "title" => "Tampilan pelanggan & penjualan 360 Derajat",
        "describe" => "
        <p>Teknologi yang terbukti memungkinkan UKM mencapai target penjualan mereka br dengan memberdayakan AI dan analitik dasbor intelijen.</p>
        ",
        "img" => "omsetku-crm-min.png",
        "img_res" => "img-db.png"
      ];

      $funnel_omsetku = [
        "title" => "Semua Dalam Satu Solusi Bisnis",
        "describe" => "
        <p>Aplikasi kami membantu mengumpulkan dan mengatur basis data pelanggan untuk referensi keputusan promosi dan aktivitas pemasaran</p>
        ",
        "img" => "omsetku-product-funnel.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $integrasi_omsetku = [
        "title" => "Integrasikan dengan system Anda",
        "describe" => "
        <p>Kami membantu Anda tetap terhubung dengan ERP yang ada & aplikasi pihak ketiga lainnya untuk mengintegrasikan data antara sistem baru dan yang sudah ada.</p>
        ",
        "img" => "omsetku-programming.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $phone_omsetku = [
        "title_1" => "Target Penjualan",
        "title_2" => "Detail Pelanggan",
        "title_3" => "Komisi Penjualan",
        "title_4" => "Expense",
        "describe_1" => "
        <p>Perhitungan data penjualan & pemantauan penjualan otomatis secara akurat sehingga dapat mengidentifikasi kelelahan karyawan lebih awal.</p>
        ",
        "describe_2" => "
        <p>Catat semua data pelanggan agar lebih dekat & akrab untuk meningkatkan kepuasan pelanggan.</p>
        ",
        "describe_3" => "
        <p>Tidak perlu bingung lagi, dengan fitur komisi Anda bisa mencatat komisi dengan lebih mudah.</p>
        ",
        "describe_4" => "
        <p>Fitur pengeluaran/reimbursement memudahkan Anda untuk mencatat semua pengeluaran yang ada, sehingga Anda dapat mengatur pengeluaran dengan mudah.</p>
        ",
        "img_1" => "omsetku-feature-1_1.png",
        "img_2" => "omsetku-feature-2_1.png",
        "img_3" => "omsetku-feature-3_1.png",
        "img_4" => "omsetku-feature-4_1.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $manfaat_omsetku = [
        "title" => "Mengapa Omsetku Bisa Membantu Penjualan untuk bekerja lebih mudah & efisien?",
        "describe" => "
        <p>Mulai Tingkatkan Penjualan Anda Dengan Aplikasi Omsetku.</p>
        ",
        "icon_1" => "icon-1.png",
        "icon_2" => "icon-2.png",
        "icon_3" => "icon-3.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $ads_omsetku = [
        "title" => "Tingkatkan Penjualan dan Layanan Pelanggan Bersama Omsetku.",
        "describe" => "
        <p>Mulai Tingkatkan Penjualan Anda Dengan Omsetku Sekarang!</p>
        ",
        "img" => "omsetku-saller.webp",
        "responsive_hand" => "hand - blue.png"
      ];
    }

    // dd($data_content);
    // dd($service_detail);

    return view('front-omsetku.home-v2_3', compact(
      "banner",
      "why_omsetku",
      "when_omsetku",
      "who_omsetku",
      "how_omsetku",
      "funnel_omsetku",
      "integrasi_omsetku",
      "phone_omsetku",
      "manfaat_omsetku",
      "ads_omsetku",
      "lang",
      // "service_detail",
      // "data_content",
    ));
  }


  public function webViewLp(Request $request)
  {
    $lang = $request->input('lang');

    if ($request->input('lang') == 'en') {

      $banner = [
        // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
        "title" => "Thousands of Sales and Businesses Have Used the Omsetku Application",
        // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
        "subtitle" => "Increase your sales with the Omsetku application. <br> Download Omsetku now for free!",
        // "img" => "phone - slider-min.png",
        "img" => "orang - banner-min.png",
        "btn_banner" => "btn-banner.png",
        "btn_coba" => "btn-coba.png",
        "btn_res" => "btn-btn.png",
      ];

      $why_omsetku = [
        "title" => "Always Suspicious of Sales Performance Want to Monitor Sales Auto Pilot? Try Omsetku!",
        "img" => "omsetku-dashboard.webp",
        "content" => [
          [
            "title_content" => "Digital Quotation, Sales Order, & Invoice",
            "describe_content" => "Making professional business quotations, sales orders & invoices can be done easily just through the application so that sales can work optimally wherever and whenever.",
          ],
          [
            "title_content" => "Real-time Access to Performance Report",
            "describe_content" => "Good performance reports from Lead, team performance, to sales activity activities can be monitored in real-time. The available data also displays graphs to make it easier to analyze the performance of sales indicators.",
          ],
          [
            "title_content" => "Lead Scoring Temperature Market",
            "describe_content" => "Lead scoring temperature market information to determine audience segmentation to map your business targets more precisely. Follow up is more accurate and the chance of closing sales increases.",
          ]
        ],
      ];

      $who_omsetku = [
        "title" => "Speed ​​up sales and customer service with the best Omnichannel CRM",
        "describe" => "
        <p>Our system helps businesses to analyze sales workers with BigData, we can analyze behavior and encourage them to achieve their sales targets.</p>
        ",
        "img" => "omsetku-saller-min.webp",
        "responsive_hand" => "hand - blue.png"
      ];

      $when_omsetku = [
        "title" => "Managing marketing & sales activities enables them to sell more",
        "describe" => "
        <p>We provide advanced technology to integrate all sales data from devices from customer data to sales data then processed with AI and displayed on an integrated platform to help monitor sales activity.</p>
        ",
        "img" => "omsetku-dashboard-in-hand-min.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $how_omsetku = [
        "title" => "360 Degree customer & sales view",
        "describe" => "
        <p>Proven technology enables SMBs to achieve their sales targets by empowering AI and intelligent dashboard analytics.</p>
        ",
        "img" => "omsetku-crm-min.png",
        "img_res" => "img-db.png"
      ];

      $funnel_omsetku = [
        "title" => "All In One Business Solution",
        "describe" => "
        <p>Our application helps to collect and manage customer database for reference of promotion decisions and marketing activities</p>
        ",
        "img" => "omsetku-product-funnel.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $integrasi_omsetku = [
        "title" => "Integrate with your system",
        "describe" => "
        <p>We help you stay connected with existing ERP & other third party applications to integrate data between new and existing systems.</p>
        ",
        "img" => "omsetku-programming.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $phone_omsetku = [
        "title_1" => "Sales Targets",
        "title_2" => "Customer Details",
        "title_3" => "Sales Commission",
        "title_4" => "Expense",
        "describe_1" => "
        <p>Calculation of sales data & automatic sales monitoring accurately so as to identify employee fatigue earlier.</p>
        ",
        "describe_2" => "
        <p>Record all customer data to be closer & familiar to increase customer satisfaction.</p>
        ",
        "describe_3" => "
        <p>No need to be confused anymore, with the commission feature you can record commissions more easily.</p>
        ",
        "describe_4" => "
        <p>The expense/reimbursement feature makes it easy for you to record all existing expenses, so you can manage expenses easily.</p>
        ",
        "img_1" => "omsetku-feature-1.png",
        "img_2" => "omsetku-feature-2.png",
        "img_3" => "omsetku-feature-3.png",
        "img_4" => "omsetku-feature-4.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $manfaat_omsetku = [
        "title" => "Why Omsetku Can Help Sales to work more easily & efficiently?",
        "describe" => "
        <p>Start Increasing Your Sales With the Omsetku Application.</p>
        ",
        "icon_1" => "icon-1.png",
        "icon_2" => "icon-2.png",
        "icon_3" => "icon-3.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $ads_omsetku = [
        "title" => "Increase Sales and Customer Service with Omsetku.",
        "describe" => "
        <p>Start Increasing Your Sales With Omsetku Now!</p>
        ",
        "img" => "omsetku-saller.webp",
        "responsive_hand" => "hand - blue.png"
      ];
    } else {

      $banner = [
        // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
        "title" => "Ribuan Sales dan Bisnis Telah Menggunakan Aplikasi Omsetku",
        // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
        "subtitle" => "Tingkatkan penjualan Anda dengan aplikasi Omsetku. <br> Download Omsetku sekarang gratis!",
        // "img" => "phone - slider-min.png",
        "img" => "orang - banner-min.png",
        "btn_banner" => "btn-banner.png",
        "btn_coba" => "btn-coba.png",
        "btn_res" => "btn-btn.png",
      ];

      $why_omsetku = [
        "title" => "Selalu Curiga Sama Performa Sales Ingin Pantau Sales Auto Pilot? Coba Omsetku!",
        "img" => "omsetku-dashboard.webp",
        "content" => [
          [
            "title_content" => "Digital Quotation, Sales Order, & Invoice",
            "describe_content" => "Membuat quotation, sales order & invoice profesional bisnis dapat dilakukan dengan mudah hanya lewat aplikasi sehingga sales dapat bekerja secara optimal dimanapun dan kapapun. ",
          ],
          [
            "title_content" => "Real-time Access to Performance Report",
            "describe_content" => "Laporan kinerja baik dari Lead, kinerja tim, hingga aktivitas kegiatan penjualan dapat dimonitor secara real-time. Data yang tersedia juga menampilkan grafik untuk mempermudah analisis kinerja indikator penjualan.",
          ],
          [
            "title_content" => "Lead Scoring Temperature Market",
            "describe_content" => "Informasi lead scoring temperature market untuk menentukan segmentasi audiens untuk memetakan target bisnis mu jadi lebih tepat. Follow up lebih akurat dan kesempatan closing penjualan meningkat.",
          ]
        ],
      ];

      $who_omsetku = [
        "title" => "Percepat penjualan dan layanan pelanggan dengan Omnichannel CRM terbaik",
        "describe" => "
        <p>Sistem kami membantu bisnis untuk menganalisis pekerja penjualan dengan BigData, kami dapat menganalisis perilaku dan mendorong mereka untuk mencapai target penjualan mereka.</p>
        ",
        "img" => "omsetku-saller-min.webp",
        "responsive_hand" => "hand - blue.png"
      ];

      $when_omsetku = [
        "title" => "Mengelola aktivitas pemasaran & penjualan memungkinkan mereka untuk menjual lebih banyak",
        "describe" => "
        <p>Kami melayani teknologi canggih untuk mengintegrasikan semua data penjualan dari perangkat dari data pelanggan ke data penjualan kemudian diproses dengan AI dan ditampilkan pada platform terintegrasi untuk membantu memantau aktivitas penjualan penjualan.</p>
        ",
        "img" => "omsetku-dashboard-in-hand-min.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $how_omsetku = [
        "title" => "Tampilan pelanggan & penjualan 360 Derajat",
        "describe" => "
        <p>Teknologi yang terbukti memungkinkan UKM mencapai target penjualan mereka br dengan memberdayakan AI dan analitik dasbor intelijen.</p>
        ",
        "img" => "omsetku-crm-min.png",
        "img_res" => "img-db.png"
      ];

      $funnel_omsetku = [
        "title" => "Semua Dalam Satu Solusi Bisnis",
        "describe" => "
        <p>Aplikasi kami membantu mengumpulkan dan mengatur basis data pelanggan untuk referensi keputusan promosi dan aktivitas pemasaran</p>
        ",
        "img" => "omsetku-product-funnel.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $integrasi_omsetku = [
        "title" => "Integrasikan dengan system Anda",
        "describe" => "
        <p>Kami membantu Anda tetap terhubung dengan ERP yang ada & aplikasi pihak ketiga lainnya untuk mengintegrasikan data antara sistem baru dan yang sudah ada.</p>
        ",
        "img" => "omsetku-programming.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $phone_omsetku = [
        "title_1" => "Target Penjualan",
        "title_2" => "Detail Pelanggan",
        "title_3" => "Komisi Penjualan",
        "title_4" => "Expense",
        "describe_1" => "
        <p>Perhitungan data penjualan & pemantauan penjualan otomatis secara akurat sehingga dapat mengidentifikasi kelelahan karyawan lebih awal.</p>
        ",
        "describe_2" => "
        <p>Catat semua data pelanggan agar lebih dekat & akrab untuk meningkatkan kepuasan pelanggan.</p>
        ",
        "describe_3" => "
        <p>Tidak perlu bingung lagi, dengan fitur komisi Anda bisa mencatat komisi dengan lebih mudah.</p>
        ",
        "describe_4" => "
        <p>Fitur pengeluaran/reimbursement memudahkan Anda untuk mencatat semua pengeluaran yang ada, sehingga Anda dapat mengatur pengeluaran dengan mudah.</p>
        ",
        "img_1" => "omsetku-feature-1.png",
        "img_2" => "omsetku-feature-2.png",
        "img_3" => "omsetku-feature-3.png",
        "img_4" => "omsetku-feature-4.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $manfaat_omsetku = [
        "title" => "Mengapa Omsetku Bisa Membantu Penjualan untuk bekerja lebih mudah & efisien?",
        "describe" => "
        <p>Mulai Tingkatkan Penjualan Anda Dengan Aplikasi Omsetku.</p>
        ",
        "icon_1" => "icon-1.png",
        "icon_2" => "icon-2.png",
        "icon_3" => "icon-3.png",
        "responsive_hand" => "hand - blue.png"
      ];

      $ads_omsetku = [
        "title" => "Tingkatkan Penjualan dan Layanan Pelanggan Bersama Omsetku.",
        "describe" => "
        <p>Mulai Tingkatkan Penjualan Anda Dengan Omsetku Sekarang!</p>
        ",
        "img" => "omsetku-saller.webp",
        "responsive_hand" => "hand - blue.png"
      ];
    }

    // dd($data_content);
    // dd($service_detail);

    return view('front-omsetku.home-v2-wv', compact(
      "banner",
      "why_omsetku",
      "when_omsetku",
      "who_omsetku",
      "how_omsetku",
      "funnel_omsetku",
      "integrasi_omsetku",
      "phone_omsetku",
      "manfaat_omsetku",
      "ads_omsetku",
      "lang",
      // "service_detail",
      // "data_content",
    ));
  }



  public function deskomsetku()

  {

    return view('front-omsetku.siapa-omsetku');
  }



  public function login()

  {

    return view('auth.login');
  }

  public function contact()
  {

    $banner = [
      // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
      "title" => "Ribuan Sales dan Bisnis Telah Menggunakan Aplikasi Omsetku",
      // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
      "subtitle" => "Tingkatkan Penjualan Dengan Aplikasi Omsetku. Download Omsetku Sekarang Gratis!",
      // "img" => "phone - slider-min.png",
      "img" => "orang - banner-min.png",
      "img_mobile" => "orang - banner-min.png",
      "btn_banner" => "btn-banner.png",
      "btn_coba" => "btn-coba.png",
      "btn_res" => "btn-btn.png",
    ];

    return view('front-omsetku.contact-v2', compact('banner'));
  }
  
  
  public function contactV2_2()
  {

    $banner = [
      // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
      "title" => "Ribuan Sales dan Bisnis Telah Menggunakan Aplikasi Omsetku",
      // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
      "subtitle" => "Tingkatkan Penjualan Dengan Aplikasi Omsetku. Download Omsetku Sekarang Gratis!",
      // "img" => "phone - slider-min.png",
      "img" => "orang - banner-min.png",
      "img_mobile" => "orang - banner-min.png",
      "btn_banner" => "btn-banner.png",
      "btn_coba" => "btn-coba.png",
      "btn_res" => "btn-btn.png",
    ];

    return view('front-omsetku.contact-v2_2', compact('banner'));
  }
  
  
  public function contactV2_3()
  {

    $banner = [
      // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
      "title" => "Ribuan Sales dan Bisnis Telah Menggunakan Aplikasi Omsetku",
      // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
      "subtitle" => "Tingkatkan Penjualan Dengan Aplikasi Omsetku. Download Omsetku Sekarang Gratis!",
      // "img" => "phone - slider-min.png",
      "img" => "orang - banner-min.png",
      "img_mobile" => "orang - banner-min.png",
      "btn_banner" => "btn-banner.png",
      "btn_coba" => "btn-coba.png",
      "btn_res" => "btn-btn.png",
    ];

    return view('front-omsetku.contact-v2_3', compact('banner'));
  }


  public function harga()
  {

    $banner = [
      // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
      "title" => "Ribuan Sales dan Bisnis Telah Menggunakan Aplikasi Omsetku",
      // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
      "subtitle" => "Tingkatkan Penjualan Dengan Aplikasi Omsetku. Download Omsetku Sekarang Gratis!",
      // "img" => "phone - slider-min.png",
      "img" => "orang - banner-min.png",
      "img_mobile" => "orang - banner-min.png",
      "btn_banner" => "btn-banner.png",
      "btn_coba" => "btn-coba.png",
      "btn_res" => "btn-btn.png",
    ];

    $accord_program_referral = [
      [
        'title' => 'Apa yang saya dapatkan jika saya menggunakan enterprise?',
        'describe' => 'Untuk dapat membagikan kode referral, Anda harus menjadi member dari perusahaan yang sedang berlangganan Omsetku.',
      ],
      [
        'title' => 'Bagaimana komisi diberikan?',
        'describe' => 'Untuk dapat membagikan kode referral, Anda harus menjadi member dari perusahaan yang sedang berlangganan Omsetku.',
      ],
      [
        'title' => 'Berapa lama sampai komisi saya terima?',
        'describe' => 'Untuk dapat membagikan kode referral, Anda harus menjadi member dari perusahaan yang sedang berlangganan Omsetku.',
      ],
      [
        'title' => 'Bagaimana cara bergabung menjadi partnership',
        'describe' => 'Untuk dapat membagikan kode referral, Anda harus menjadi member dari perusahaan yang sedang berlangganan Omsetku.',
      ],
    ];

    $package_basic_lists = [
      [
        'status' => 'free',
        'name_package' => strtoupper('trial'),
        'description' =>
        'Untuk user yang ingin mencoba menggunakan <br>
        dashboard omsetku. dan merasakan sensasi <br>
        menjadi sales idaman',
        'price' => 'free',
        'periode' => '14 Days',
        'features' => [
          'Free trial selama 14 hari',
        ],
      ],
      [
        'status' => 'pay',
        'name_package' => 'Omsetku Enterprice Basic',
        'description' =>
        'Untuk user yang ingin mencoba menggunakan <br>
        dashboard omsetku. dan merasakan sensasi <br>
        menjadi sales idaman',
        'price' => number_format(580000, 0, '', '.'),
        'periode' => '1 month',
        'features' => [
          'Invoice tanpa batas',
          'Quotation tanpa batas',
          'Customer tanpa batas',
          'Sales Order tanpa batas',
          'Produk tanpa batas',
          'Export excel tanpa batas',
        ],
      ],
      [
        'status' => 'pay',
        'name_package' => 'Omsetku Enterprice Basic',
        'description' =>
        'Untuk user yang ingin mencoba menggunakan <br>
        dashboard omsetku. dan merasakan sensasi <br>
        menjadi sales idaman',
        'price' => number_format(1650000, 0, '', '.'),
        'periode' => '3 month',
        'features' => [
          'Invoice tanpa batas',
          'Quotation tanpa batas',
          'Customer tanpa batas',
          'Sales Order tanpa batas',
          'Produk tanpa batas',
          'Export excel tanpa batas',
        ],
      ],
      [
        'status' => 'pay',
        'name_package' => 'Omsetku Enterprice Basic <br> <span>Free 6 Month</span>',
        'description' =>
        'Untuk user yang ingin mencoba menggunakan <br>
        dashboard omsetku. dan merasakan sensasi <br>
        menjadi sales idaman',
        'price' => number_format(3000000, 0, '', '.'),
        'periode' => '6 month',
        'features' => [
          'Invoice tanpa batas',
          'Quotation tanpa batas',
          'Customer tanpa batas',
          'Sales Order tanpa batas',
          'Produk tanpa batas',
          'Export excel tanpa batas',
        ],
      ],
    ];

    $package_pro_lists = [
      [
        'status' => 'free',
        'name_package' => strtoupper('trial'),
        'description' =>
        'Untuk user yang ingin mencoba menggunakan <br>
        dashboard omsetku. dan merasakan sensasi <br>
        menjadi sales idaman',
        'price' => 'free',
        'periode' => '14 Days',
        'features' => [
          'Free trial selama 14 hari',
        ],
      ],
      [
        'status' => 'pay',
        'name_package' => 'Omsetku Enterprice Pro',
        'description' =>
        'Untuk user yang ingin mencoba menggunakan <br>
        dashboard omsetku. dan merasakan sensasi <br>
        menjadi sales idaman',
        'price' => number_format(2500000, 0, '', '.'),
        'periode' => '1 month',
        'features' => [
          'Invoice tanpa batas',
          'Quotation tanpa batas',
          'Customer tanpa batas',
          'Sales Order tanpa batas',
          'Produk tanpa batas',
          'Export excel tanpa batas',
        ],
      ],
      [
        'status' => 'pay',
        'name_package' => 'Omsetku Enterprice Pro',
        'description' =>
        'Untuk user yang ingin mencoba menggunakan <br>
        dashboard omsetku. dan merasakan sensasi <br>
        menjadi sales idaman',
        'price' => number_format(5850000, 0, '', '.'),
        'periode' => '3 month',
        'features' => [
          'Invoice tanpa batas',
          'Quotation tanpa batas',
          'Customer tanpa batas',
          'Sales Order tanpa batas',
          'Produk tanpa batas',
          'Export excel tanpa batas',
        ],
      ],
      [
        'status' => 'pay',
        'name_package' => 'Omsetku Enterprice Pro <br> <span>Free 6 Month</span>',
        'description' =>
        'Untuk user yang ingin mencoba menggunakan <br>
        dashboard omsetku. dan merasakan sensasi <br>
        menjadi sales idaman',
        'price' => number_format(11400000, 0, '', '.'),
        'periode' => '6 month',
        'features' => [
          'Invoice tanpa batas',
          'Quotation tanpa batas',
          'Customer tanpa batas',
          'Sales Order tanpa batas',
          'Produk tanpa batas',
          'Export excel tanpa batas',
        ],
      ],
    ];

    return view('front-omsetku.harga-v2', compact(
      'banner',
      'accord_program_referral',
    ));
  }

  public function hargaV2_1()
  {

    $banner = [
      // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
      "title" => "Ribuan Sales dan Bisnis Telah Menggunakan Aplikasi Omsetku",
      // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
      "subtitle" => "Tingkatkan Penjualan Dengan Aplikasi Omsetku. Download Omsetku Sekarang Gratis!",
      // "img" => "phone - slider-min.png",
      "img" => "orang - banner-min.png",
      "img_mobile" => "orang - banner-min.png",
      "btn_banner" => "btn-banner.png",
      "btn_coba" => "btn-coba.png",
      "btn_res" => "btn-btn.png",
    ];

    $accord_program_referral = [
      [
        'title' => 'Apa yang saya dapatkan jika saya menggunakan enterprise?',
        'describe' => 'Untuk dapat membagikan kode referral, Anda harus menjadi member dari perusahaan yang sedang berlangganan Omsetku.',
      ],
      [
        'title' => 'Bagaimana komisi diberikan?',
        'describe' => 'Untuk dapat membagikan kode referral, Anda harus menjadi member dari perusahaan yang sedang berlangganan Omsetku.',
      ],
      [
        'title' => 'Berapa lama sampai komisi saya terima?',
        'describe' => 'Untuk dapat membagikan kode referral, Anda harus menjadi member dari perusahaan yang sedang berlangganan Omsetku.',
      ],
      [
        'title' => 'Bagaimana cara bergabung menjadi partnership',
        'describe' => 'Untuk dapat membagikan kode referral, Anda harus menjadi member dari perusahaan yang sedang berlangganan Omsetku.',
      ],
    ];

    $package_basic_lists = [
      [
        'status' => 'free',
        'name_package' => strtoupper('trial'),
        'description' =>
        'Paket uji coba untuk merasakan <br>
        sensasi penjualan next level',
        'price' => strtoupper('free'),
        'periode' => '14 Days',
        'features' => [
          'Free trial selama 14 hari',
        ],
        'asset' => 'omsetku-package-trial.png',
      ],
      [
        'status' => 'pay',
        'name_package' => 'Paket 1 Bulan',
        'description' =>
        'Paket yang mendukung operasi<br>
        dasar penjualan anda',
        'price' => number_format(580000, 0, '', '.'),
        'periode' => 'Bulan',
        'features' => [
          'Per 3 User',
          'Invoice tanpa batas',
          'Quotation tanpa batas',
          'Customer tanpa batas',
          'Sales Order tanpa batas',
          'Produk tanpa batas',
          'Export excel tanpa batas',
        ],
        'asset' => 'omsetku-package-enterprice1.png',
      ],
      [
        'status' => 'pay',
        'name_package' => 'Paket 3 Bulan',
        'description' =>
        'Paket yang mendukung operasi<br>
        dasar penjualan anda',
        'price' => number_format(1650000, 0, '', '.'),
        'periode' => '3 Bulan',
        'features' => [
          'Per 3 User',
          'Invoice tanpa batas',
          'Quotation tanpa batas',
          'Customer tanpa batas',
          'Sales Order tanpa batas',
          'Produk tanpa batas',
          'Export excel tanpa batas',
        ],
        'asset' => 'omsetku-package-enterprice2.png',
      ],
      [
        'status' => 'pay',
        'name_package' => 'Paket 6 Bulan',
        'description' =>
        'Paket yang mendukung operasi<br>
        dasar penjualan anda',
        'price' => number_format(3000000, 0, '', '.'),
        'periode' => '6 Bulan',
        'features' => [
          'Per 3 User',
          'Invoice tanpa batas',
          'Quotation tanpa batas',
          'Customer tanpa batas',
          'Sales Order tanpa batas',
          'Produk tanpa batas',
          'Export excel tanpa batas',
        ],
        'asset' => 'omsetku-package-enterprice3.png',
      ],

    ];

    $package_pro_lists = [
      [
        'status' => 'free',
        'name_package' => strtoupper('trial'),
        'description' =>
        'Paket uji coba untuk merasakan <br>
        sensasi penjualan next level',
        'price' => strtoupper('free'),
        'periode' => '14 Days',
        'features' => [
          'Free trial selama 14 hari',
        ],
        'asset' => 'omsetku-package-trial.png',
      ],
      [
        'status' => 'pay',
        'name_package' => 'Paket 1 Bulan',
        'description' =>
        'Paket yang mendukung operasi<br>
        dasar penjualan anda',
        'price' => number_format(2500000, 0, '', '.'),
        'periode' => 'Bulan',
        'features' => [
          'Per 5 User',
          'Invoice tanpa batas',
          'Quotation tanpa batas',
          'Customer tanpa batas',
          'Sales Order tanpa batas',
          'Produk tanpa batas',
          'Export excel tanpa batas',
        ],
        'asset' => 'omsetku-package-enterprice1.png',
      ],
      [
        'status' => 'pay',
        'name_package' => 'Paket 3 Bulan',
        'description' =>
        'Paket yang mendukung operasi<br>
        dasar penjualan anda',
        'price' => number_format(5850000, 0, '', '.'),
        'periode' => '3 Bulan',
        'features' => [
          'Per 5 User',
          'Invoice tanpa batas',
          'Quotation tanpa batas',
          'Customer tanpa batas',
          'Sales Order tanpa batas',
          'Produk tanpa batas',
          'Export excel tanpa batas',
        ],
        'asset' => 'omsetku-package-enterprice2.png',
      ],
      [
        'status' => 'pay',
        'name_package' => 'Paket 6 Bulan',
        'description' =>
        'Paket yang mendukung operasi<br>
        dasar penjualan anda',
        'price' => number_format(11400000, 0, '', '.'),
        'periode' => '6 Bulan',
        'features' => [
          'Per 5 User',
          'Invoice tanpa batas',
          'Quotation tanpa batas',
          'Customer tanpa batas',
          'Sales Order tanpa batas',
          'Produk tanpa batas',
          'Export excel tanpa batas',
        ],
        'asset' => 'omsetku-package-enterprice3.png',
      ],
    ];

    $baseurl = 'https://omsetku.id/';

    return view('front-omsetku.harga-v2_1', compact(
      'banner',
      'accord_program_referral',
      'baseurl',
      'package_basic_lists',
      'package_pro_lists',
    ));
  }


  public function whyOmsetku()
  {
    $banner = [
      // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
      "title" => "Layanan Sales Automation Terbaik Di Indonesia",
      // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
      "subtitle" => "Kepuasan pengguna adalah prioritas utama kami. Demi memberikan kemudahan dan kenyamanan untuk pengguna.",
      // "img" => "phone - slider-min.png",
      "img" => "orang - banner-min.png",
      "btn_banner" => "btn-banner.png",
      "btn_coba" => "btn-coba.png",
      "btn_res" => "btn-btn.png",
    ];

    $why_omsetku = [
      "title" => "Selalu Curiga Sama Performa Sales Ingin Pantau Sales Auto Pilot? Coba Omsetku!",
      "img" => "about-1-img.png",
      "content" => [
        [
          "title_content" => "Digital Quotation, Sales Order, & Invoice",
          "describe_content" => "Membuat quotation, sales order & invoice profesional bisnis dapat dilakukan dengan mudah hanya lewat aplikasi sehingga sales dapat bekerja secara optimal dimanapun dan kapapun. ",
        ],
        [
          "title_content" => "Real-time Access to Performance Report",
          "describe_content" => "Laporan kinerja baik dari Lead, kinerja tim, hingga aktivitas kegiatan penjualan dapat dimonitor secara real-time. Data yang tersedia juga menampilkan grafik untuk mempermudah analisis kinerja indikator penjualan.",
        ],
        [
          "title_content" => "Lead Scoring Temperature Market",
          "describe_content" => "Informasi lead scoring temperature market untuk menentukan segmentasi audiens untuk memetakan target bisnis mu jadi lebih tepat. Follow up lebih akurat dan kesempatan closing penjualan meningkat.",
        ]
      ],
    ];

    $who_omsetku = [
      "title" => "Percepat penjualan dan layanan pelanggan dengan Omnichannel CRM terbaik",
      "describe" => "
      <p>Sistem kami membantu bisnis untuk menganalisis pekerja penjualan dengan BigData, kami dapat menganalisis perilaku dan mendorong mereka untuk mencapai target penjualan mereka.</p>
      ",
      "img" => "img-percepatan-min.webp",
      "responsive_hand" => "hand - blue.png"
    ];

    $when_omsetku = [
      "title" => "Mengelola aktivitas pemasaran & penjualan memungkinkan mereka untuk menjual lebih banyak",
      "describe" => "
      <p>Kami melayani teknologi canggih untuk mengintegrasikan semua data penjualan dari perangkat dari data pelanggan ke data penjualan kemudian diproses dengan AI dan ditampilkan pada platform terintegrasi untuk membantu memantau aktivitas penjualan penjualan.</p>
      ",
      "img" => "hand-website.png",
      "responsive_hand" => "hand - blue.png"
    ];

    $how_omsetku = [
      "title" => "Tampilan pelanggan & penjualan 360 Derajat",
      "describe" => "
      <p>Teknologi yang terbukti memungkinkan UKM mencapai target penjualan mereka br dengan memberdayakan AI dan analitik dasbor intelijen.</p>
      ",
      "img" => "object.png",
      "img_res" => "img-db.png"
    ];

    $funnel_omsetku = [
      "title" => "Semua Dalam Satu Solusi Bisnis",
      "describe" => "
      <p>Aplikasi kami membantu mengumpulkan dan mengatur basis data pelanggan untuk referensi keputusan promosi dan aktivitas pemasaran</p>
      ",
      "img" => "funnel-img.png",
      "responsive_hand" => "hand - blue.png"
    ];

    $integrasi_omsetku = [
      "title" => "Integrasikan dengan system Anda",
      "describe" => "
      <p>Kami membantu Anda tetap terhubung dengan ERP yang ada & aplikasi pihak ketiga lainnya untuk mengintegrasikan data antara sistem baru dan yang sudah ada.</p>
      ",
      "img" => "pc-img.png",
      "responsive_hand" => "hand - blue.png"
    ];

    $phone_omsetku = [
      "title_1" => "Target Penjualan",
      "title_2" => "Detail Pelanggan",
      "title_3" => "Komisi Penjualan",
      "title_4" => "Expense",
      "describe_1" => "
      <p>Perhitungan data penjualan & pemantauan penjualan otomatis secara akurat sehingga dapat mengidentifikasi kelelahan karyawan lebih awal.</p>
      ",
      "describe_2" => "
      <p>Catat semua data pelanggan agar lebih dekat & akrab untuk meningkatkan kepuasan pelanggan.</p>
      ",
      "describe_3" => "
      <p>Tidak perlu bingung lagi, dengan fitur komisi Anda bisa mencatat komisi dengan lebih mudah.</p>
      ",
      "describe_4" => "
      <p>Fitur pengeluaran/reimbursement memudahkan Anda untuk mencatat semua pengeluaran yang ada, sehingga Anda dapat mengatur pengeluaran dengan mudah.</p>
      ",
      "img_1" => "phone-1.png",
      "img_2" => "phone-2.png",
      "img_3" => "phone-3.png",
      "img_4" => "phone-4.png",
      "responsive_hand" => "hand - blue.png"
    ];

    $manfaat_omsetku = [
      "title" => "Mengapa Omsetku Bisa Membantu Penjualan untuk bekerja lebih mudah & efisien?",
      "describe" => "
      <p>Mulai Tingkatkan Penjualan Anda Dengan Aplikasi Omsetku.</p>
      ",
      "icon_1" => "icon-1.png",
      "icon_2" => "icon-2.png",
      "icon_3" => "icon-3.png",
      "responsive_hand" => "hand - blue.png"
    ];

    $ads_omsetku = [
      "title" => "Tingkatkan Penjualan dan Layanan Pelanggan Bersama Omsetku.",
      "describe" => "
      <p>Mulai Tingkatkan Penjualan Anda Dengan Omsetku Sekarang!</p>
      ",
      "img" => "girl-img.webp",
      "responsive_hand" => "hand - blue.png"
    ];

    // dd($data_content);
    // dd($service_detail);

    return view('front-omsetku.mengapa-omsetku-v2_1', compact(
      "banner",
      "why_omsetku",
      "when_omsetku",
      "who_omsetku",
      "how_omsetku",
      "funnel_omsetku",
      "integrasi_omsetku",
      "phone_omsetku",
      "manfaat_omsetku",
      "ads_omsetku",
      // "service_detail",
      // "data_content",
    ));
  }


  public function partnership(Request $request)
  {
    // return abort(403);

    $banner = [
      // "title" => "Aplikasi Penjualan Sales #1 Bikin Quotation, SO, dan Invoice semudah pesan ojek online",
      "title" => "Ribuan Sales dan Bisnis Telah Menggunakan Aplikasi Omsetku",
      // "subtitle" => "Sekarang, Anda dapat makin mudah melaku mengatur dan memonitor kinerja sales dalam 1 Aplikasi",
      "subtitle" => "Tingkatkan Penjualan Dengan Aplikasi Omsetku. Download Omsetku Sekarang Gratis!",
      // "img" => "phone - slider-min.png",
      "img" => "orang - banner-min.png",
      "img_mobile" => "orang - banner-min.png",
      "btn_banner" => "btn-banner.png",
      "btn_coba" => "btn-coba.png",
      "btn_res" => "btn-btn.png",
    ];

    $master_company = $this->masterCompany();

    $card_members = [
      'data_cards' => [
        [
          'asset' => 'omsetku-komisi.png',
          'title' => 'Komisi Referral <br> hingga Rp 5 juta',
          'describe' => 'Dapatkan komisi referral mulai dari <br> 
          Rp540.000 hingga Rp 5.000.000 <br> 
          hanya dengan mengajak rekan bisnis <br>
          Anda berlangganan Omsetku.',
        ],
        [
          'asset' => 'omsetku-hadiah.png',
          'title' => 'Tambahan Hadiah <br> Referral',
          'describe' => 'Dapatkan hadiah tambahan dan <br> 
          penawaran menarik lainnya di <br> 
          Program Referral Omsetku.',
        ],
        [
          'asset' => 'omsetku-connection.png',
          'title' => 'Koneksi dan Komunitas <br> Sales Baru',
          'describe' => 'Perluas koneksi Anda melalui <br>
          komunitas Referral Omsetku.',
        ],
      ],
    ];

    // dd($card_members);

    $step_agen_referral = [
      [
        'title' => 'Daftar',
        'describe' => 'Daftar sebagai Member Referral dan dapatkan akun <br>
        serta link referral unik Anda',
      ],
      [
        'title' => 'Ajak rekan bisnis',
        'describe' => 'Sebarkan link Referral Anda kepada rekan bisnis di <br>
        sosial media, website, dan channel lainnya.',
      ],
      [
        'title' => 'Cek status referral',
        'describe' => 'Ketahui status keberhasilan referensi Anda melalui akun <br>
        referral Anda.',
      ],
      [
        'title' => 'Klaim komisi Referral hingga 5 juta!',
        'describe' => 'Dapatkan komisi 12% dari nilai langganan rekan bisnis <br>
        Anda, mulai dari Rp 540.000',
      ],
    ];

    $accord_program_referral = [
      [
        'title' => 'Apa persyaratan mendapatkan hadiah referral?',
        'describe' => 'Untuk dapat membagikan kode referral, Anda harus menjadi member dari perusahaan yang sedang berlangganan Omsetku.',
      ],
      [
        'title' => 'Bagaimana komisi diberikan?',
        'describe' => 'Untuk dapat membagikan kode referral, Anda harus menjadi member dari perusahaan yang sedang berlangganan Omsetku.',
      ],
      [
        'title' => 'Berapa lama sampai komisi saya terima?',
        'describe' => 'Untuk dapat membagikan kode referral, Anda harus menjadi member dari perusahaan yang sedang berlangganan Omsetku.',
      ],
      [
        'title' => 'Bagaimana cara bergabung menjadi partnership',
        'describe' => 'Untuk dapat membagikan kode referral, Anda harus menjadi member dari perusahaan yang sedang berlangganan Omsetku.',
      ],
    ];

    // dd($master_company);

    return view('front-omsetku.partnership-v2', compact(
      'banner',
      'master_company',
      'card_members',
      'step_agen_referral',
      'accord_program_referral',
    ));
  }


  public function masterCompany()
  {
    $data = [
      'amount_employee' => [
        'Micro < 50',
        'Small 51-100',
        'Medium 101-300',
        'large > 300',
      ],
      'industries' => [
        'Agency, Media Entertainment',
        'Agriculture, Forestry, Fishing and Hunting',
        'Architecture Interior Design',
        'Arts, Entertainment, and Recreation',
        'Automotive',
        'Bakery',
        'Beauty, Gym Salon',
        'Beauty Salon',
        'Cafe / Coffeeshop',
        'Catering Services',
        'Chemical Materials',
        'Construction Engineering',
        'Consumer Retail Product / Offline Store',
        'Education Services',
        'Energy, Oil Gas, Utilities',
        'Export - Import',
        'Event / Wedding Organizer',
        'Factory / Manufacturing',
        'Financial Services - Banks',
        'Financial Services - Insurance Multifinance',
        'Financial Services - Technology',
        'Food Beverages',
        'Government Institution',
        'Health Care',
        'Hotels Leisure',
        'Household Services',
        'Manufacturing',
        'Mining',
        'Manufacturing',
        'Non Profit Organization',
        'Online Retailer / Seller / Marketplace',
        'Outsourcing',
        'Printing',
        'Professional Services - Law Firm, Audit Consultants',
        'Real Estate / Property',
        'Repair Cleaning Service',
        'Restaurant',
        'Technology - Hardware Equipments',
        'Technology - Services Consultants',
        'Technology - Startup Software',
        'Telecommunication / Internet / Television Provider',
        'Telemarketing',
        'Tour Travel',
        'Trading - Distributor',
        'Trading - Retail',
        'Trading - Supplier',
        'Transportation, Logistics Warehousing',
        'Others',
      ],
    ];

    return $data;
  }


  // Fungsi Mengirim Email

  public function sendEmail(Request $request)
  {
    $emails = $request->email;
    $name = $request->name;
    $nama_perusahaan = $request->nama_perusahaan;
    $nophone = $request->no_hp;
    $subject = $request->subject;

    // dd($nophone);
    // dd($message);
    $data = array(

      'name' => $name,
      'emails' => $emails,
      'nama_perusahaan' => $nama_perusahaan,
      'nophone' => $nophone,

    );

    Mail::send('front-omsetku.email_template', $data, function ($mail) use ($emails, $name, $subject) {

      // dd($emails);

      $mail->from($emails, $name);
      $mail->subject($subject . " Omsetku");
      $mail->to('ignas@goodeva.co.id');
      // $mail->to('varits.gorga106@gmail.com');
    });

    if (Mail::failures()) {
      return "gagal mengirim email";
    }
    return redirect()->back();
  }
}
