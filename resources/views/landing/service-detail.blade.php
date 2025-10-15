@extends('layouts.landing.master')
@section('title', 'Service - ' . $service->name)


@section('_styles')
<!-- Primary Meta Tags -->
<title>{{ $service->name }}</title>
<meta name="title" content="PANDAN VIEW MANDEH - {{ $service->name }}">
<meta name="description" content="{{ $service->description }}">
<meta name="keywords" content="{{ $service->name }}">
<meta name="author" content="Pandan View Mandeh" />
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<meta name="revisit-after" content="1 Days" />

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="PANDAN VIEW MANDEH">
<meta property="og:title" content="PANDAN VIEW MANDEH - {{ $service->name }} ">
<meta property="og:locale" content="id_ID">

<meta property="og:type" content=article />
<meta property="og:url" content="{{ URL::current() }}">
<meta property="og:description" content="{{ $service->description }}">
<meta property="og:image" content="{{ $service->cover_image_url }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ URL::current() }}">
<meta property="twitter:title" content="PANDAN VIEW MANDEH - {{ $service->name }}">
<meta property="twitter:description" content="{{ $service->description }}">
<meta property="twitter:image" content="{{ $service->cover_image_url }}">
<meta name="twitter:site" content="{{ URL::current() }}" />

<link rel="canonical" href="{{ URL::current() }}" />
<link rel="alternate" hreflang="en-US" href="{{ URL::current() }}" />
<link rel="shortcut icon" type="image/png" href="{{ URL::current() }}" />


<style>
    .all-services::before {
        content: "";
        background-color: rgba(30, 35, 40, 0.6) !important;
    }

    .all-services::before {
        content: "";
        background-color: rgba(30, 35, 40, 0.6) !important;
    }

    .all-services {
        background-size: cover;
        background-image: url({{ $service->rectangle_content_image }});
        /* opacity: 0.5; */
        /* background-color: rgba(30, 35, 40, 0.6) !important; */
    }

</style>

@endsection


@section('content')

<div class="all-services text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <div class="col-lg-6 mx-auto py-5">
            <p class="text-white" style="font-size: x-smaller!important;">&nbsp;</p>
        </div>
        <h1 class="display-5 fw-bold text-white py-5">{{ $service->{$titleLocale} }}</h1>
    </div>
</div>


<main id="main">

    @forelse($products as $key => $product)
    <section id="about" class="about  @if($key+1 == 1) pb-4 pt-5 @else pb-4 pt-0 @endif">
        <div class="container">
            <div class="row content align-item-center align-middle" style="align-items: center">
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <img src="{{$product->rectangle_cover_image}}" class="img img-fluid mx-auto" alt="Odoo • Text and Image" data-original-title="" title="" aria-describedby="tooltip617481" style="">
                </div>
                <div class="col-lg-6 pb-0 pt-0">
                    <h4>{{$product->{$titleLocale} }}</h4>
                    <p style="font-size: small; text-align:justify;">{!! nl2br($product->description) !!}</p>
                    @if($product->service->name == 'Akomodasi')
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=62811660358&text=Halo%20saya%20mengetahui%20anda%20dari%20web%20https%3A%2F%2Fpandanviewandeh.com.%0A%0ASaya%20mau%20memesan%20Kamar%20{{$product->name}}" class="flat btn btn-success flat pt-2" data-original-title="" title="" aria-describedby="tooltip695437" style="font-size:smaller!important;">&nbsp;{{ __('messages.carousel.book') }}</a>
                    @endif
                    {{-- <a style="font-size:smaller;" href="/{{isset($product->next_url) ? $product->next_url : ''}}" class="btn btn-success" data-original-title="" title="" aria-describedby="tooltip362623">Selengkapnya</a> --}}
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
    @empty

    @if($service->slug == 'testimonies' )
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-e6bb8f0f-fa2d-4b77-98a1-1f5be159592e"></div>
    @else
    <section id="about" class="about pb-4 pt-5">
        <div class="container">
            <div class="row content align-item-center align-middle" style="align-items: center">
                <div class="col-lg-12 pt-4 pt-lg-0">
                    <h4 style="text-align: center">.: No Data Available :.</h4>

                </div>
            </div>
        </div>
    </section><!-- End About Section -->
    @endif
    @endforelse

</main><!-- End #main -->
@endsection
