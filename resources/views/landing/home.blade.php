@extends('layouts.landing.master')
@section('title', 'KUA IV Jurai — Palanta Sakinah')

@section('_styles')
    {{-- Primary Meta Tags --}}
    <meta name="title" content="KUA IV Jurai — Palanta Sakinah">
    <meta name="description" content="Palanta Sakinah: Pusat layanan informasi dan edukasi KUA IV Jurai. Informasi layanan nikah, konsultasi keluarga, wakaf & zakat, bimbingan manasik, legalisasi, dan kontak.">
    <meta name="keywords" content="KUA IV Jurai, Palanta Sakinah, KUA Pesisir Selatan, layanan nikah, konsultasi keluarga, wakaf, zakat, manasik, legalisasi">
    <meta name="author" content="KUA IV Jurai">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="revisit-after" content="3 Days" />

    <!-- Open Graph / Facebook -->
    <meta property="og:site_name" content="KUA IV Jurai — Palanta Sakinah">
    <meta property="og:title" content="KUA IV Jurai — Palanta Sakinah">
    <meta property="og:locale" content="id_ID">
    <meta property="og:description" content="Palanta Sakinah: Pusat layanan informasi dan edukasi KUA IV Jurai. Semua info layanan dalam satu halaman.">
    <meta property="og:image" content="{{ asset('images/kua/og-cover.jpg') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ URL::current() }}" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@palantasakinah" />
    <meta name="twitter:title" content="KUA IV Jurai — Palanta Sakinah" />
    <meta name="twitter:description" content="Palanta Sakinah: Pusat layanan informasi dan edukasi KUA IV Jurai.">
    <meta name="twitter:image" content="{{ asset('images/kua/og-cover.jpg') }}" />
    <meta property="twitter:url" content="{{ URL::current() }}">

    <link rel="canonical" href="{{ URL::current() }}" />
    <link rel="alternate" hreflang="id-ID" href="{{ URL::current() }}" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/kua/favicon.png') }}" />

    <style>
        /* Hero */
        #hero h1 {
            color: #fff;
            font-size: clamp(32px, 5vw, 52px);
            font-weight: 800;
            line-height: 1.1;
            text-shadow: 0 4px 24px rgba(0, 0, 0, .35);
        }

        #hero p.lead {
            color: #f5f7fa;
            font-size: clamp(16px, 2.2vw, 20px);
        }

        .position-relative {
            position: relative !important;
        }

        .bg-white {
            background-color: #fafafa !important;
        }

        .section-title {
            font-weight: 800;
            letter-spacing: .2px;
            margin-bottom: .75rem;
        }

        .section-subtitle {
            color: #6c757d;
            margin-bottom: 1.75rem;
            font-size: .98rem;
        }

        .icon-circle {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e9f8f0;
            /* hijau lembut */
        }

        .org-card img {
            object-fit: cover;
            width: 100%;
            height: 220px;
            border-top-left-radius: .5rem;
            border-top-right-radius: .5rem;
        }

        .badge-role {
            font-size: .75rem;
            background: #eaf2ff;
            color: #2952ff;
        }

        .table-hours td {
            padding: .4rem .6rem;
        }

        .btn-whatsapp {
            background: #25D366;
            color: #fff;
        }

        .btn-whatsapp:hover {
            filter: brightness(.95);
            color: #fff;
        }
    </style>
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('{{ asset('images/kua/slide-1.jpg') }}')">
                    <div class="carousel-container">
                        <div class="container">
                            <h1 class="animate__animated animate__fadeInDown">
                                Palanta Sakinah<br><span>KUA IV Jurai</span>
                            </h1>
                            <p class="lead animate__animated animate__fadeInUp">
                                Pusat layanan informasi dan edukasi keluarga sakinah: mudah, cepat, transparan.
                            </p>
                            <a href="#profil" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pelajari Profil</a>

                            <div class="carousel-caption text-end animate__animated animate__fadeInRight">
                                <div class="s_share text-end">
                                    <a href="https://instagram.com/palantasakinah" class="s_share_linkedin" target="_blank" aria-label="Instagram">
                                        <span class="fa fa-1x fa-brands fa-instagram rounded shadow-sm" style="color:#E1306C;"></span>
                                    </a>&nbsp;
                                    <a href="https://youtube.com/@palantasakinah" class="s_share_google" target="_blank" aria-label="YouTube">
                                        <span class="fa fa-1x fa-brands fa-youtube rounded shadow-sm"></span>
                                    </a>&nbsp;
                                    <a href="https://www.tiktok.com/@palantasakinah" class="s_share_tiktok" target="_blank" aria-label="TikTok">
                                        <span class="fa fa-1x fa-brands fa-tiktok rounded shadow-sm" style="color:#000;"></span>
                                    </a>
                                </div>
                                {{-- <div class="pb16 pt16 s_btn text-right pt-2" data-name="Buttons">
                                    <a href="https://wa.me/62812XXXXXXX?text=Assalamualaikum%2C%20saya%20ingin%20bertanya%20tentang%20layanan%20KUA%20IV%20Jurai." class="btn btn-whatsapp flat" style="font-size:small!important;">&nbsp;Chat WhatsApp</a>
                                    <a href="#hubungi" class="btn btn-success flat pandanview" style="font-size:small!important;">Kontak & Lokasi</a>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('{{ asset('images/kua/slide-2.jpg') }}')">
                    <div class="carousel-container">
                        <div class="container">
                            <h1>Transparan & Akuntabel</h1>
                            <p class="lead">Standar layanan jelas, syarat mudah dipahami, dan biaya sesuai ketentuan.</p>
                            <a href="#layanan" class="btn-get-started scrollto">Lihat Layanan</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('{{ asset('images/kua/slide-3.jpg') }}')">
                    <div class="carousel-container">
                        <div class="container">
                            <h1>Bersama Mewujudkan Keluarga Sakinah</h1>
                            <p class="lead">Program edukasi, bimbingan pranikah, dan konsultasi keluarga harmonis.</p>
                            <a href="#edukasi" class="btn-get-started scrollto">Pojok Edukasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Profil Singkat KUA ======= -->
        <section id="profil" class="about pb-4 pt-5">
            <div class="container">
                <h2 class="section-title">Profil Singkat KUA</h2>
                <p class="section-subtitle">KUA IV Jurai — Palanta Sakinah</p>
                <div class="row content align-items-center">
                    <div class="col-lg-6">
                        <p style="text-align:justify;">
                            KUA IV Jurai berkomitmen menghadirkan pelayanan publik yang profesional, humanis, dan inklusif.
                            Melalui <strong>Palanta Sakinah</strong> (Pusat Layanan Informasi & Edukasi), kami menyajikan
                            informasi layanan secara ringkas, membuka akses konsultasi, serta mengedepankan edukasi keluarga
                            menuju <em>keluarga sakinah, mawaddah, warahmah</em>.
                        </p>
                        <ul class="mt-3">
                            <li><i class="ri-check-double-line"></i> Layanan tepat waktu & berbasis kebutuhan masyarakat.</li>
                            <li><i class="ri-check-double-line"></i> Informasi syarat & alur layanan yang mudah dipahami.</li>
                            <li><i class="ri-check-double-line"></i> Program edukasi berkelanjutan untuk ketahanan keluarga.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 position-relative">
                        <img width="100%" src="{{ asset('images/kua/profil.jpg') }}" alt="Profil KUA IV Jurai" class="img img-fluid mx-auto rounded shadow-sm">
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Layanan Kami ======= -->
        <section id="layanan" class="services pb-5 pt-3">
            <div class="container">
                <h2 class="section-title">Layanan Kami</h2>
                <p class="section-subtitle">Informasi singkat layanan inti KUA IV Jurai</p>

                <div class="row g-3">
                    @php
                        $services = [['icon' => 'bi-heart', 'title' => 'Pencatatan Nikah', 'desc' => 'Pendaftaran, pemeriksaan berkas, dan pelaksanaan akad nikah sesuai ketentuan.'], ['icon' => 'bi-people', 'title' => 'Bimbingan Perkawinan', 'desc' => 'Edukasi pranikah untuk membangun keluarga tangguh & harmonis.'], ['icon' => 'bi-moon', 'title' => 'Bimbingan Manasik Haji', 'desc' => 'Pembinaan ibadah haji/umrah bekerja sama dengan pihak terkait.'], ['icon' => 'bi-bank', 'title' => 'Zakat & Wakaf', 'desc' => 'Informasi nadzir, sertifikasi wakaf, dan edukasi tata kelola zakat.'], ['icon' => 'bi-journal-check', 'title' => 'Legalisasi Dokumen', 'desc' => 'Legalisasi dokumen keagamaan sesuai prosedur yang berlaku.'], ['icon' => 'bi-chat-dots', 'title' => 'Konsultasi Keluarga', 'desc' => 'Konseling keluarga, mediasi, dan rujukan layanan psikososial.']];
                    @endphp

                    @foreach ($services as $s)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body d-flex">
                                    <div class="icon-circle me-3">
                                        <i class="bi {{ $s['icon'] }}"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">{{ $s['title'] }}</h5>
                                        <p class="mb-2 text-muted" style="font-size:.95rem;">{{ $s['desc'] }}</p>
                                        {{-- <a href="#hubungi" class="btn btn-sm btn-outline-success">Tanya Syarat</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-4">
                    <a target="_blank" href="/all-services" class="btn btn-success">Lihat Selengkapnya</a>
                </div>
            </div>
        </section>

        <!-- ======= Struktur Organisasi / Pegawai ======= -->
        <section id="struktur" class="pb-5 pt-3">
            <div class="container">
                <h2 class="section-title">Struktur Organisasi / Pegawai</h2>
                <p class="section-subtitle">Struktur ringkas & tim pelayanan</p>

                @php
                    $pegawai = [
                        [
                            'nama' => 'ZAIMAL ELPETANI, S.Ag',
                            'jabatan' => 'Penghulu Ahli Madya (Kepala KUA)',
                            'peran' => 'Kepala KUA',
                            'photo' => 'https://placehold.co/600x800?text=Kepala+KUA',
                        ],
                        [
                            'nama' => 'RIFKI, S.HI',
                            'jabatan' => 'Penghulu Ahli Pertama',
                            'peran' => 'Penghulu',
                            'photo' => 'https://placehold.co/600x800?text=Penghulu',
                        ],
                        [
                            'nama' => 'TENGKU ISKANDAR, S.Pd.I',
                            'jabatan' => 'Penyuluh Agama Ahli Muda',
                            'peran' => 'Penyuluh Agama',
                            'photo' => 'https://placehold.co/600x800?text=Penyuluh+Agama',
                        ],
                        [
                            'nama' => 'JUNAIDI, S.HI',
                            'jabatan' => 'Penyuluh Agama Ahli Pertama',
                            'peran' => 'Penyuluh Agama',
                            'photo' => 'https://placehold.co/600x800?text=Penyuluh+Agama',
                        ],
                        [
                            'nama' => 'GONTRALIS, S.SosI',
                            'jabatan' => 'Penyuluh Agama Ahli Pertama',
                            'peran' => 'Penyuluh Agama',
                            'photo' => 'https://placehold.co/600x800?text=Penyuluh+Agama',
                        ],
                        [
                            'nama' => 'FATMI, S. Ag',
                            'jabatan' => 'Penyuluh Agama Ahli Muda',
                            'peran' => 'Penyuluh Agama',
                            'photo' => 'https://placehold.co/600x800?text=Penyuluh+Agama',
                        ],
                        [
                            'nama' => 'SYAFRI DODI, S.Pd.I',
                            'jabatan' => 'Penyuluh Agama Ahli Pertama',
                            'peran' => 'Penyuluh Agama',
                            'photo' => 'https://placehold.co/600x800?text=Penyuluh+Agama',
                        ],
                        [
                            'nama' => 'YENDRI WATI',
                            'jabatan' => 'Pengadministrasi Perkantoran',
                            'peran' => 'Staf Pelayanan',
                            'photo' => 'https://placehold.co/600x800?text=Staf+Pelayanan',
                        ],
                        [
                            'nama' => 'YOSSI ANITA',
                            'jabatan' => 'Pengadministrasi Perkantoran',
                            'peran' => 'Staf Pelayanan',
                            'photo' => 'https://placehold.co/600x800?text=Staf+Pelayanan',
                        ],
                        [
                            'nama' => 'DERI NOFITTA SARI, S.Pd.I',
                            'jabatan' => 'Penata Layanan Operasional',
                            'peran' => 'Staf Pelayanan',
                            'photo' => 'https://placehold.co/600x800?text=Staf+Pelayanan',
                        ],
                        [
                            'nama' => 'RAFIKA YUSRI, S.E',
                            'jabatan' => 'Penata Layanan Operasional',
                            'peran' => 'Staf Pelayanan',
                            'photo' => 'https://placehold.co/600x800?text=Staf+Pelayanan',
                        ],
                        [
                            'nama' => 'NANDA ESA PUTRA, S.Pd.I',
                            'jabatan' => 'Penata Layanan Operasional',
                            'peran' => 'Staf Pelayanan',
                            'photo' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1760602824/PandanViewMandeh/iovbx18scfyysvp2sfqz.jpg',
                        ],
                    ];
                @endphp

                <div class="row g-3">
                    @foreach ($pegawai as $p)
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card org-card shadow-sm border-0 h-100">
                                <div class="rounded-top overflow-hidden" style="width:267px;height:220px;">
                                    <img src="{{ $p['photo'] }}" alt="{{ $p['peran'] }}" class="w-100 h-100 d-block" style="object-fit:cover;object-position:50% 10%;" loading="lazy">
                                </div>
                                <div class="card-body">
                                    <span class="badge badge-role mb-2 px-2 py-1 rounded">{{ $p['peran'] }}</span>
                                    <h6 class="mb-1">{{ $p['nama'] }}</h6>
                                    <small class="d-block text-muted mb-1">{{ $p['jabatan'] }}</small>
                                    <p class="mb-0 text-muted" style="font-size:.93rem;">
                                        @switch($p['peran'])
                                            @case('Kepala KUA')
                                                Penanggung jawab layanan & pembinaan
                                            @break

                                            @case('Penghulu')
                                                Pelaksana pemeriksaan & akad nikah
                                            @break

                                            @case('Penyuluh Agama')
                                                Edukasi, konseling, & pemberdayaan masyarakat
                                            @break

                                            @default
                                                Front-office, legalisasi, & administrasi
                                        @endswitch
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- <div class="text-center mt-3">
                    <a href="#" class="btn btn-outline-success disabled" tabindex="-1" aria-disabled="true">
                        Unduh Struktur (PDF) — Segera
                    </a>
                </div> --}}
            </div>
        </section>


        <!-- ======= Pojok Edukasi (Ide Kreatif) ======= -->
        <section id="edukasi" class="pb-5 pt-3">
            <div class="container">
                <h2 class="section-title">Pojok Edukasi</h2>
                <p class="section-subtitle">Ringkasan materi praktis untuk keluarga sakinah</p>

                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <h5>Buku Nikah Cerdas</h5>
                                <p class="text-muted">Checklist persiapan akad, komunikasi sehat, dan keuangan keluarga.</p>
                                <a href="#" class="btn btn-sm btn-outline-success disabled">Unduh e-Book (segera)</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <h5>Alur Layanan Nikah</h5>
                                <p class="text-muted">Syarat, alur pendaftaran, dan estimasi waktu layanan.</p>
                                <a href="#faq" class="btn btn-sm btn-outline-success">Baca FAQ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <h5>Wakaf Produktif</h5>
                                <p class="text-muted">Gambaran pengelolaan wakaf dan peran masyarakat.</p>
                                <a href="#hubungi" class="btn btn-sm btn-outline-success">Konsultasi</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="faq" class="mt-4">
                    <h5 class="mb-2">FAQ Singkat</h5>
                    <div class="accordion" id="faqAcc">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a1">
                                    Bagaimana mendaftar nikah?
                                </button>
                            </h2>
                            <div id="a1" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                                <div class="accordion-body">
                                    Lengkapi berkas (N1–N4, KTP, KK, dsb.), lakukan pendaftaran di KUA wilayah setempat,
                                    verifikasi berkas, jadwalkan pemeriksaan, dan tentukan waktu akad.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="q2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">
                                    Apakah ada biaya pencatatan nikah?
                                </button>
                            </h2>
                            <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                                <div class="accordion-body">
                                    Sesuai ketentuan berlaku. Nikah di KUA pada hari/jam kerja biasanya tanpa biaya;
                                    di luar kantor/jam kerja dikenakan PNBP sesuai peraturan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="q3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3">
                                    Bagaimana konsultasi keluarga?
                                </button>
                            </h2>
                            <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                                <div class="accordion-body">
                                    Datang ke KUA pada jam layanan atau ajukan jadwal konsultasi via WhatsApp untuk sesi tatap muka/online.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ======= Hubungi Kami ======= -->
        <section id="hubungi" class="pb-5 pt-3">
            <div class="container">
                <h2 class="section-title">Hubungi Kami</h2>
                <p class="section-subtitle">Alamat, jam layanan, & kanal komunikasi</p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="mb-2">KUA IV Jurai — Palanta Sakinah</h5>
                                <p class="mb-2">
                                    Alamat: Jl. Ujung Gurun Salido, Kec. IV Jurai, Kab. Pesisir Selatan, Prov. Sumatera Barat, Painan<br>
                                    Email: <a href="mailto:kuaivjurai@gmail.com">kuaivjurai@gmail.com</a><br>
                                    Telp/WA: <a href="https://wa.me/6282364246343" target="_blank">+62 823-6424-6343</a>
                                </p>

                                <h6 class="mt-3">Jam Layanan</h6>
                                <table class="table table-sm table-borderless table-hours w-auto">
                                    <tbody>
                                        <tr>
                                            <td>Senin–Kamis</td>
                                            <td>08.00–15.00</td>
                                        </tr>
                                        <tr>
                                            <td>Jumat</td>
                                            <td>08.00–11.30</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu–Minggu</td>
                                            <td>Tutup (layanan nikah sesuai jadwal)</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="mt-3 d-flex gap-2">
                                    <a class="btn btn-whatsapp" href="https://wa.me/6282364246343?text=Assalamualaikum%2C%20saya%20ingin%20informasi%20layanan%20KUA." target="_blank">
                                        <i class="bi bi-whatsapp"></i> WhatsApp
                                    </a>
                                    <a class="btn btn-outline-success" href="#layanan">Daftar Layanan</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.3802730424193!2d100.5683135177862!3d-1.3193716943656075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd353666ae218e9%3A0xb0b78c3c41122cbc!2sKUA%20IV%20Jurai!5e0!3m2!1sen!2sid!4v1760504948407!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Lokasi KUA IV Jurai"></iframe>
                        </div>
                        <small class="text-muted d-block mt-2">Peta bersifat ilustratif. Sesuaikan koordinat saat deploy.</small>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@section('_scripts')
    {{-- Tidak lagi menggunakan Waypoint/JS eksternal dari template asli --}}
    <script>
        // Smooth scroll sederhana untuk anchor .scrollto
        document.querySelectorAll('a.scrollto').forEach(a => {
            a.addEventListener('click', (e) => {
                const href = a.getAttribute('href') || '';
                if (href.startsWith('#')) {
                    e.preventDefault();
                    const el = document.querySelector(href);
                    if (el) el.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
@endsection
