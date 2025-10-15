<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TRCG6KP');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2HMVYVF6MW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2HMVYVF6MW');
    </script>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>


    <!-- Favicons -->
    <link href="{{ asset('images/kua/icon.png') }}" rel="icon">
    <link href="{{ asset('sailor/img/apple-touch-icon.png') }}" rel="'apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- ======= Styles ======= -->
    @include('layouts.landing.styles')

    @yield('_styles')


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6641141866403336" crossorigin="anonymous"></script>

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=64a41dc3d2ddeb0019614a76&product=sticky-share-buttons' async='async'></script>
    <meta name="ahrefs-site-verification" content="71353c246ce479e437d4894298c3e5ad448fd758d7aabc495d9583287489f7ed">

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRCG6KP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="sharethis-sticky-share-buttons"></div>

    <!-- ======= Header ======= -->
    @include('layouts.landing.header')

    <!-- ======= Main Content ======= -->
    @yield('content')


    <!-- ======= Footer ======= -->
    @include('layouts.landing.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Scripts ======= -->
    @include('layouts.landing.scripts')

    @yield('_scripts')



</body>

</html>
