@extends('layouts.landing.master')
@section('title', $title)

@section('_styles')

{{-- Primary Meta Tags --}}
<meta name="title" content="{{$title}}">
<meta name="description" content="{{$title}}" />
<meta name="keywords" content="About Pandan View Mandeh, Mandeh, Pesisir Selatan, Puncak Mandeh" />
<meta name="author" content="Pandan View Mandeh" />
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<meta name="revisit-after" content="1 Days" />

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="{{$title}}">
<meta property="og:title" content="{{$title}}">
<meta property="og:locale" content="id_ID">
<meta property="og:description" content="Pandan View Mandeh Resort Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung k...">
<meta property="og:image" content="{{ asset('sailor/img/logo.png') }}" />

<meta property="og:type" content=website />
<meta property="og:url" content="{{ URL::current() }}" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="{{$title}}" />
<meta name="twitter:title" content="{{$title}}" />
<meta name="twitter:description" content="Pandan View Mandeh Resort Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung k...">
<meta name="twitter:image" content="{{ asset('sailor/img/logo.png') }}" />
<meta property="twitter:url" content="{{ URL::current() }}">


<link rel="canonical" href="{{ URL::current() }}" />
<link rel="alternate" hreflang="en-US" href="{{ URL::current() }}" />
<link rel="shortcut icon" type="image/png" href="{{ URL::current() }}" />

<style>
    .all-services {
        background-image: url('https://res.cloudinary.com/dezj1x6xp/image/upload/c_fill,ar_2.5,q_50/v1687278150/PandanViewMandeh/_LAYOUT_u0nlql.jpg');
        background-size: cover;
        opacity: 0.8;
    }

</style>

@endsection

@section('content')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('messages.menu.aboutus') }}</h2>
                <ol>
                    <li><a href="/">{{ __('messages.menu.home') }}</a></li>
                    <li>{{ __('messages.menu.aboutus') }}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    {{-- <img class="img img-fluid mx-auto" src="https://res.cloudinary.com/dezj1x6xp/image/upload/c_fill,ar_16:5,q_50/v1687278150/PandanViewMandeh/_LAYOUT_u0nlql.jpg" alt=""> --}}
    <div class="all-services text-secondary px-4 py-5 text-center">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-white">&nbsp;</h1>
            <div class="col-lg-6 mx-auto py-3">
                <p class="fs-5 mb-4">&nbsp;</p>
            </div>
        </div>
    </div>

    <!-- ======= About Section ======= -->


    <section id="about" class="about p-0 m-0">
        <!-- Jumbotron -->

        <!-- Jumbotron -->
        <div class="container">
            {{-- <img class="img img-fluid mx-auto" src="https://res.cloudinary.com/dezj1x6xp/image/upload/c_fill,ar_2.5,q_50/v1687278150/PandanViewMandeh/_LAYOUT_u0nlql.jpg" alt=""> --}}


            <div class="row content pt-3">
                <div class="col-lg-12">
                    <h2 class="text-align-center" style="text-align: center">Pandan View Mandeh Resort & Cottage</h2>

                </div>
                <div class="col-lg-12 pt-4 pt-lg-0" style="font-size: smaller">
                    <h4>Deskripsi Singkat</h4>

                    <p>
                        Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara.
                    </p>
                    <p>
                        Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung kelaut dan pulau dikawasan Teluk Mandeh. Dan wisatawan juga bisa menikmati Cottage yang tersedia di Pandan View Mandeh ini dengan ada 2 type kamar , type kamar Lumbung dan Type kamar Villa dengan harga yang masih terjangkau.
                    </p>
                    <p>
                        Selain Tersedia nya Spot Foto dan Cottage, para pengunjung juga dimanjakan dengan live musik akustik dengan pemain dan musik sesuai para tamunya . Meskipun pandan view ini masih dalam penyelesaian dan dalam pengerjaan 30% lagi, pengunjung sudah bisa menikmati fasilitas yang ada di Pandan View Mandeh ini, dengan prasarana yang ada, mushalla , toilet , kafe dan spot foto lainnya
                    </p>

                    <h4>Fitur Pandan View Sangat Mempesona</h4>
                    <p>
                        Jika berbicara mengenai tempat wisata di sumatera barat, tentu tak bisa dilepaskan dengan kawasan wisata mandeh. Destinasi ini menyuguhkan perpaduan antara indahnya teluk dan perbukitan alami. Keindahanya disebut sebut mirip dengan Raja Ampat di papua.
                    </p>
                    <p>
                        Kawasan wisata mandeh sendiri memiliki luas mencapai 18 ribu ha, terdiri dari tiga nagari dan tujuh desa. Topografinya meliputi pantai, gugusan pulau kecil, hingga hutan mangrove. Kini mandeh mulai berkembang dan dikenal banyak orang baik dalam skala nasional maupun international.
                    </p>
                    <p>
                        Ada banyak destinasi yang bisa kita kunjungi di kawasan wisata mandeh. Puncak Indah Mandeh tentunya menjadi tujuan utama para traveller yang berkunjung. Selain itu kini banyak cafe, resto maupun resort yang bisa kamu kunjungi. Salah satunya adalah Pandan view Mandeh yang berada di ampang pulau Kabupaten Pesisir Selatan.
                    </p>

                    <h4>Daya Tarik Pandan View Mandeh </h4>
                    <p>
                        Pandan view mandeh merupakan resort dan resto sekaligus tempat wisata yang bisa kamu kunjungi ketika berwisata di kawasan wisata mandeh. Para pengunjung bisa bersantai dan menikmati beragam menu makanan/ minuman. Area restonya juga berada di bibir pantai, jadi kita akan disuguhkan lautan dan gugusan pulau yang ada didepan mata.
                    </p>
                    <p>
                        Selain itu, ada banyak aktivitas seru yang bisa dilakukan di kawasan wisata mandeh. Disana kamu bisa melakukan wisata laut baik sekedar menikmati suasana pantai, berenang, bahkan snorkeling. Yups, keindahan bawah laut mandeh gak kalah dengan tempat tempat lain di Indonesia. Kamu bisa menikmati berbagaijenis terumbu karang dan biota laut. Pandan view memiliki beberapa paket wisata yang bisa kamu pesan.
                    </p>
                    <p>
                        Daya tarik selanjutnya tentunya adalah penginapan berupa villa dan cottage. Bagi kalian yang datang dari luar kota, bisa memesan penginapan tersebut. Jenis cottage cukup menarik dengan bentuknya yang seperti lumbung dengan kapasitas sampai 4 orang.
                    </p>
                    {{-- <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                    </ul>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p> --}}
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Team</h2>
                <p>Team Pelayanan Kami</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Farhan Ideal (Pindo)</h4>
                            <span>Manajer Pelayanan</span>
                            <p>Memberikan pelayanan dan fasilitas penginapan terbaik, termasuk untuk Resort</p>
                            {{-- <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Pandu Winata</h4>
                            <span>Manajer Marketing</span>
                            <p>Memberikan yang terbaik mengenai pemanfaatan resort beserta fasilitasnya kepada publik </p>
                            {{-- <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <p>Quisquam facilis cum velit laborum corrupti</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <p>Dolorum tempora officiis odit laborum officiis</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>

        </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->

@endsection
