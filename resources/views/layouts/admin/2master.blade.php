<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/logo/mtq_pessel_fix.ico">
    <link rel="icon" href="/assets/images/logo/mtq_pessel_fix.ico">
    <meta property="og:type" content="website & aplikasi" />
    <meta property="og:title" content="mtq.kemenagpessel.com :: Situs Portal Resmi MTQN XL Tk Kabupaten Pesisir Selatan. Berisi informasi dan perjalanan dari MTQN di Kabupaten Pesisir Selatan." />
    <meta property="og:description" content="mtq.kemenagpessel.com Adalah Situs Portal Resmi MTQN XL Tk Kabupaten Pesisir Selatan. Berisi informasi dan perjalanan dari MTQN di Kabupaten Pesisir Selatan." />
    <meta property="og:keyword" content="mtq.kemenagpessel.com, kabupaten pesisir selatan, tapan, ranah ampek hulu, sumatera barat, sumbar, padang, mesjid raya sumbar, jam gadang, kelok 9, tuah sakato, tuah sakato cilako basilang, rbs" />
    <meta property="og:image" content="https://mtq.kemenagpessel.com/assets/images/logo/logo_mtq.png" />



    <meta name="description" content="Website Resmi MTQN Ke-40 Pesisir Selatan" />
    <meta name="keywords" content="Kemenag Pesisir Selatan,  Kemenag Pessel, MTQN, MTQ" />
    <meta name="author" content="Pandan View Mandeh" />
    <meta name="robots" content="all" />
    <meta name="revisit-after" content="1 Days" />
    <meta property="og:locale" content="en-US" />
    <meta property="og:site_name" content="Website Resmi MTQN Ke-40 Pesisir Selatan" />
    <meta property="og:image" content="https://pesisirselatan.kemenag.go.id/v1/uploads/logo/logo_5f315af825f0d.png" />
    <meta property="og:image:width" content="180" />
    <meta property="og:image:height" content="50" />
    <meta property="og:url" content="https://mtq.kemenagpessel.com" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Website Resmi MTQN Ke-40 Pesisir Selatan" />
    <meta name="twitter:title" content="Website Resmi MTQN Ke-40 Pesisir Selatan" />
    <meta name="twitter:description" content="mtq.kemenagpessel.com Adalah Situs Portal Resmi MTQN XL Tk Kabupaten Pesisir Selatan. Berisi informasi dan perjalanan dari MTQN di Kabupaten Pesisir Selatan." />
    <meta name="twitter:image" content="https://pesisirselatan.kemenag.go.id/v1/uploads/logo/logo_5f315af825f0d.png" />


    @include('layouts.admin.css')
    @yield('css')
</head>

<body class="homepage-v4">


    <!-- Navigation -->
    @include('layouts.admin.header')

    <!-- Navigation -->

    <!-- Main layout -->
    <main class="pt-4">

        @yield('content')

    </main>
    <!-- Main layout -->

    <!-- Footer -->
    @include('layouts.admin.footer')
    <!-- Footer -->

    <!-- SCRIPTS -->

    @include('layouts.admin.js')
    @yield('js')


</body>

</html>
