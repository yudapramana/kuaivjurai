<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        {{-- Logo --}}
        <a href="/" class="logo me-auto" aria-label="Beranda KUA IV Jurai — Palanta Sakinah">
            <img src="{{ asset('images/kua/palantasakinahtulisancrop.png') }}" alt="Logo KUA IV Jurai — Palanta Sakinah" class="img-fluid" loading="lazy">
        </a>

        {{-- Navbar --}}
        <nav id="navbar" class="navbar" aria-label="Navigasi utama">
            <ul>
                {{-- Jika halaman lain memuat header ini, gunakan /#anchor agar tetap menuju halaman utama --}}
                <li><a href="/#hero" class="{{ request()->is('/') ? 'active' : '' }}">{{ __('messages.menu.home') ?? 'Beranda' }}</a></li>
                <li><a href="/#profil">{{ __('messages.menu.aboutus') ?? 'Profil' }}</a></li>
                {{-- <li><a href="/#layanan">{{ __('messages.menu.services') ?? 'Layanan' }}</a></li> --}}

                <li class="dropdown"><a href="/all-services"><span>{{ __('messages.menu.services') }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/all-services">Syarat Pelayanan</a></li>
                        <li><a href="/standard-services">Standar Pelayanan</a></li>
                    </ul>
                </li>



                <li><a href="/#struktur">Struktur</a></li>
                <li><a href="/#edukasi">Edukasi</a></li>
                <li><a href="/#faq">FAQ</a></li>
                <li><a href="/#hubungi">{{ __('messages.menu.contact') ?? 'Hubungi' }}</a></li>
                {{-- Opsi: tampilkan login hanya jika diperlukan --}}
                {{-- <li><a href="/login" class="{{ request()->segment(1) == 'login' ? 'active' : '' }}">{{ __('messages.menu.login') ?? 'Masuk' }}</a></li> --}}

                {{-- Bahasa --}}
                <li class="dropdown">
                    <a href="#" aria-haspopup="true" aria-expanded="false">
                        <span>{{ session('locale') === 'en' ? 'English' : 'Bahasa' }}</span>
                        <i class="bi bi-chevron-down" aria-hidden="true"></i>
                    </a>
                    <ul role="menu" aria-label="Pilih bahasa">
                        <li><a href="/lang/change/?lang=id" role="menuitem">Bahasa Indonesia</a></li>
                        <li><a href="/lang/change/?lang=en" role="menuitem">English</a></li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle" aria-label="Buka tutup menu"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
