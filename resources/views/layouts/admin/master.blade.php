<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-2HMVYVF6MW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2HMVYVF6MW');

    </script> --}}

    <!-- Google Tag Manager -->
    {{-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime()
                , event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0]
                , j = d.createElement(s)
                , dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TRCG6KP');

    </script> --}}
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6641141866403336" crossorigin="anonymous"></script> --}}

    @include('layouts.admin.styles')

    @yield('_styles')

</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Google Tag Manager (noscript) -->
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRCG6KP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> --}}
    <!-- End Google Tag Manager (noscript) -->

    @include('layouts.admin.header')

    @include('layouts.admin.sidebar')

    @yield('content')

    @include('layouts.admin.footer')

    @include('layouts.admin.scripts')

    @yield('_scripts')

</body>

</html>
