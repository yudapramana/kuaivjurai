<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login - Pandanviewmandeh</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('niceadmin/img/favicon.png') }} " rel="icon">
    <link href="{{ asset('niceadmin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('niceadmin/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('niceadmin/vendor/bootstrap-icons/bootstrap-icons.css') }} " rel="stylesheet">
    <link href="{{ asset('niceadmin/vendor/boxicons/css/boxicons.min.css') }} " rel="stylesheet">
    <link href="{{ asset('niceadmin/vendor/quill/quill.snow.css') }} " rel="stylesheet">
    <link href="{{ asset('niceadmin/vendor/quill/quill.bubble.css') }} " rel="stylesheet">
    <link href="{{ asset('niceadmin/vendor/remixicon/remixicon.css') }} " rel="stylesheet">
    <link href="{{ asset('niceadmin/vendor/simple-datatables/style.css') }} " rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('niceadmin/css/style.css') }} " rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        .logo img {
            max-height: 70px !important;
            margin-right: 10px;
        }

        /* body {
            background: none;
            background: url('/anyar-assets/img/landing-kmg.jpeg') top center !important;
            background-size: cover !important;
            filter: blur(8px);
            -webkit-filter: blur(8px);
        } */

        body,
        html {
            background: none !important;
            height: 100%;
        }


        .bg-image {
            /* The image used */
            background: url('/sailor/img/slide/pv-1.jpg') top center !important;
            background-image: url('/sailor/img/slide/pv-1.jpg') top center !important;
            background-size: cover !important;
            /* Add the blur effect */
            filter: blur(3px);
            -webkit-filter: blur(3px);

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        main {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
        }

    </style>
</head>

<body>
    <div class="bg-image"></div>
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('sailor/img/logo.png') }}" alt="">
                                    {{-- <span class="d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block text-white">Pandan View Mandeh Cottage Villa Resort</span> --}}
                                    {{-- <span class="d-none d-xs-block d-sm-block d-md-block d-lg-none d-xl-none text-white">Pandan View Mandeh</span> --}}

                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Masuk ke akun Anda</h5>
                                        <p class="text-center small">Masukkan username dan Password untuk login</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                {{-- <span class="input-group-text" id="inputGroupPrepend">@</span> --}}
                                                <input type="text" name="username" class="form-control" id="yourUsername" required>
                                                {{-- <div class="invalid-feedback">Please enter your username.</div> --}}
                                                @error('username')
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            {{-- <div class="invalid-feedback">Please enter your password!</div> --}}
                                            @error('password')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="rememberMe">Ingat Saya</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Lupa password Akun? Hubungi Administrator</p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('niceadmin/vendor/apexcharts/apexcharts.min.js') }}  "></script>
    <script src="{{ asset('niceadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}  "></script>
    <script src="{{ asset('niceadmin/vendor/chart.js/chart.min.js') }}  "></script>
    <script src="{{ asset('niceadmin/vendor/echarts/echarts.min.js') }}  "></script>
    <script src="{{ asset('niceadmin/vendor/quill/quill.min.js') }}  "></script>
    <script src="{{ asset('niceadmin/vendor/simple-datatables/simple-datatables.js') }}  "></script>
    <script src="{{ asset('niceadmin/vendor/tinymce/tinymce.min.js') }}  "></script>
    <script src="{{ asset('niceadmin/vendor/php-email-form/validate.js') }}  "></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('niceadmin/js/main.js') }}  "></script>

</body>

</html>
