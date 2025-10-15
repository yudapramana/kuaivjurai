<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <!-- <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo me-auto"><img src="{{ asset('sailor/img/logo.png') }}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/" @if (request()->segment(1) == '') class="active" @endif >{{ __('messages.menu.home') }}</a></li>

                <li class="dropdown"><a href="/all-services"><span>{{ __('messages.menu.services') }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>

                        @foreach ($selectedServices as $key => $service)
                        <li><a href="{!! $service->next_url !!}">{{ $service->{$titleLocale} }}</a>
                        </li>
                        @endforeach
                        {{-- <li><a href="/1">{!! $selectedServices !!}</a></li>
                <li><a href="/2">2</a></li>
                <li><a href="/3">3</a></li> --}}

                    </ul>
                </li>
                <li><a href="/aboutus" @if (request()->segment(1) == 'aboutus') class="active" @endif>{{ __('messages.menu.aboutus') }}</a></li>
                <li><a href="/gallery" @if (request()->segment(1) == 'gallery') class="active" @endif>{{ __('messages.menu.gallery') }}</a></li>
                <li><a href="/blog" @if (request()->segment(1) == 'blog') class="active" @endif>{{ __('messages.menu.blog') }}</a></li>
                <li><a href="/contact" @if (request()->segment(1) == 'contact') class="active" @endif>{{ __('messages.menu.contact') }}</a></li>
                <li><a href="/login" @if (request()->segment(1) == 'login') class="active" @endif>{{ __('messages.menu.login') }}</a></li>


                <li class="dropdown"><a href="#"><span>{{ (session()->get('locale') == 'en') ? 'English' : 'Bahasa' }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/lang/change/?lang=en">English</a></li>
                        <li><a href="/lang/change/?lang=id">Bahasa</a></li>
                    </ul>
                </li>


                <!-- <li><a href="/" class="getstarted">Get Started</a></li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
