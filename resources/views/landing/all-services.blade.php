@extends('layouts.landing.master')
@section('title', 'KUA IV Jurai — Semua Pelayanan & Persyaratan')

@section('_styles')

    {{-- Primary Meta Tags --}}
    <meta name="title" content="KUA IV Jurai — Semua Pelayanan & Persyaratan">
    <meta name="description" content="Daftar lengkap pelayanan KUA IV Jurai beserta persyaratan: Pendaftaran Nikah/Rujuk, Duplikat Buku Nikah, Legalisasi, Bimbingan Perwakafan, Bimbingan Haji, dan lainnya." />
    <meta name="keywords" content="KUA IV Jurai, Pelayanan KUA, Persyaratan Nikah, Pesisir Selatan, Kantor Urusan Agama" />
    <meta name="author" content="KUA IV Jurai" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="revisit-after" content="1 Days" />

    <!-- Open Graph / Facebook -->
    <meta property="og:site_name" content="KUA IV Jurai">
    <meta property="og:title" content="KUA IV Jurai — Semua Pelayanan & Persyaratan">
    <meta property="og:locale" content="id_ID">
    <meta property="og:description" content="Daftar lengkap pelayanan KUA IV Jurai beserta persyaratan resmi dan tautan informasi terkait.">
    <meta property="og:image" content="{{ asset('sailor/img/logo.png') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ URL::current() }}" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@KUAIVJurai" />
    <meta name="twitter:title" content="KUA IV Jurai — Semua Pelayanan & Persyaratan" />
    <meta name="twitter:description" content="Daftar lengkap pelayanan KUA IV Jurai beserta persyaratan resmi.">
    <meta name="twitter:image" content="{{ asset('sailor/img/logo.png') }}" />
    <meta property="twitter:url" content="{{ URL::current() }}">

    <link rel="canonical" href="{{ URL::current() }}" />
    <link rel="alternate" hreflang="id-ID" href="{{ URL::current() }}" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}" />

    <style>
        .all-services {
            background-image: url('http://res.cloudinary.com/dezj1x6xp/image/upload/v1760511183/PandanViewMandeh/gqcckvf89k13rihjnlil.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.9;
        }

        .accordion-button .badge {
            margin-left: .5rem;
        }

        .req-list li {
            margin-bottom: .25rem;
        }
    </style>

@endsection

@section('content')

    <div class="all-services text-secondary px-4 py-5 text-center">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-white">Pelayanan KUA IV Jurai</h1>
            <div class="col-lg-8 mx-auto py-3">
                <p class="fs-5 mb-0 text-white-50">Daftar layanan resmi & persyaratan terbaru</p>
            </div>
        </div>
    </div>

    @php
        // JSON pelayanan KUA (dari hasil ekstraksi sebelumnya)
        $kuaServices = json_decode(
            json_encode([
                [
                    'id' => 'pendaftaran-nikah-rujuk',
                    'title' => 'Pendaftaran Nikah / Rujuk',
                    'requirements' => ['Blangko model N1 - N4 dari Kelurahan', 'Fotokopi KTP, KK, Akta Kelahiran', 'Rekomendasi Nikah dari KUA asal', 'Fotokopi KTP Wali dan 2 orang saksi', 'Fotokopi Akta Kelahiran / Ijazah terakhir', 'Surat pernyataan belum menikah bermaterai cukup', 'Akta cerai / Surat kematian bagi janda atau duda', 'Pas foto warna 2x3 sebanyak 4 lembar dan 4x6 sebanyak 2 lembar dengan background biru', 'Surat dispensasi camat bagi yang mendaftar kurang dari 10 hari kerja', 'Surat dispensasi dari Pengadilan Agama bagi calon suami/istri yang berusia < 19 tahun', 'Surat izin komandan bagi anggota TNI/Polri', 'Permohonan nikah di luar jam kantor'],
                ],
                [
                    'id' => 'duplikat-buku-nikah',
                    'title' => 'Permohonan Duplikat Buku Nikah',
                    'requirements' => ['Pengantar dari Desa/Kelurahan', 'Surat kehilangan dari kepolisian atau buku yang rusak', 'Jika buku rusak, sertakan buku nikahnya (dengan permohonan di atas materai 10.000)', 'Fotokopi KTP/KK', 'Pas foto ukuran 2x3 masing-masing 3 lembar (background biru)'],
                ],
                [
                    'id' => 'legalisasi-buku-nikah',
                    'title' => 'Legalisasi Buku Nikah',
                    'requirements' => ['Buku nikah asli', 'Fotokopi buku nikah yang akan dilegalisasi', 'Fotokopi KTP (jika buku nikah dari KUA lain)'],
                ],
                [
                    'id' => 'bimbingan-perwakafan',
                    'title' => 'Layanan Bimbingan Perwakafan',
                    'requirements' => ['Sertifikat Tanah Hak Milik (bukti kepemilikan)', 'Fotokopi identitas Wakif', 'Fotokopi identitas Nadzir (Perorangan/Badan Hukum)', 'Fotokopi identitas saksi-saksi'],
                ],
                [
                    'id' => 'konsultasi-kepenghuluan',
                    'title' => 'Konsultasi Kepenghuluan',
                    'requirements' => ['Fotokopi KTP'],
                ],
                [
                    'id' => 'konsultasi-agama-islam',
                    'title' => 'Konsultasi Agama Islam',
                    'requirements' => ['Fotokopi KTP'],
                ],
                [
                    'id' => 'rekomendasi-nikah',
                    'title' => 'Rekomendasi Nikah / Pengantar Kehendak Nikah',
                    'requirements' => ['Pengantar Desa (Model N)', 'Fotokopi KTP, KK, dan Akta Lahir', 'Akte cerai (bagi duda/janda)'],
                ],
                [
                    'id' => 'hisab-rukyat-ukur-kiblat',
                    'title' => 'Layanan Bimbingan Hisab Rukyat / Ukur Arah Kiblat',
                    'requirements' => ['Mengisi permohonan ukur arah kiblat'],
                ],
                [
                    'id' => 'bimbingan-haji',
                    'title' => 'Pelayanan Bimbingan Haji',
                    'requirements' => ['Fotokopi KTP dan Nomor Porsi'],
                ],
                [
                    'id' => 'legalisasi-belum-menikah',
                    'title' => 'Legalisasi Keterangan Belum Menikah',
                    'requirements' => ['Formulir/Blangko yang sudah diisi dan ditandatangani kelurahan', 'Fotokopi KTP dan KK'],
                ],
                [
                    'id' => 'ikrar-taukil-wali-bil-kitabah',
                    'title' => 'Ikrar Taukil Wali Bil Kitabah (Mewakilkan wali secara tertulis)',
                    'requirements' => ['Fotokopi KTP pemohon (wali)', 'Fotokopi KTP 2 orang saksi, Muslim, Dewasa', 'Data calon pengantin (suami, istri, mas kawin, tempat nikah)'],
                ],
                [
                    'id' => 'bantuan-masjid-musholla',
                    'title' => 'Permohonan Bantuan Masjid / Musholla',
                    'requirements' => ['Proposal permohonan bantuan lengkap'],
                ],
                [
                    'id' => 'legalisasi-masuk-islam',
                    'title' => 'Legalisasi Keterangan Masuk Islam (Muallaf)',
                    'requirements' => ['Formulir berita acara dan surat pernyataan yang sudah diisi', 'Fotokopi KTP yang bersangkutan dan saksi'],
                ],
                [
                    'id' => 'wakaf-tunai',
                    'title' => 'Wakaf Tunai',
                    'requirements' => ['Data NIK, e-mail, dan nomor WhatsApp'],
                ],
                [
                    'id' => 'konsultasi-keluarga',
                    'title' => 'Konsultasi Keluarga',
                    'requirements' => ['Fotokopi KTP', 'Fotokopi buku nikah'],
                ],
                [
                    'id' => 'billing-pnbpnr',
                    'title' => 'Pembuatan Billing PNBPNR',
                    'requirements' => ['Permohonan nikah di luar jam kantor'],
                ],
                [
                    'id' => 'bimbingan-perkawinan',
                    'title' => 'Layanan Bimbingan Perkawinan',
                    'requirements' => ['Bukti pendaftaran nikah'],
                ],
                [
                    'id' => 'pencatatan-itsbat-nikah',
                    'title' => 'Pencatatan Itsbat Nikah',
                    'requirements' => ['Putusan itsbat dari Pengadilan Agama', 'Fotokopi KTP dan KK suami dan istri'],
                ],
                [
                    'id' => 'surat-keterangan',
                    'title' => 'Pengajuan Surat Keterangan',
                    'requirements' => ['Fotokopi KTP pemohon'],
                ],
            ]),
        );
    @endphp

    <main id="main">
        <section id="services" class="services py-5">
            <div class="container">

                {{-- Info ringkas --}}
                <div class="row mb-3">
                    <div class="col-lg-8">
                        <h2 class="h4 mb-1">Semua Pelayanan KUA IV Jurai</h2>
                        <p class="text-muted mb-0">Klik setiap judul untuk melihat persyaratan.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                        <button class="btn btn-outline-secondary btn-sm" type="button" id="btnExpandAll">Buka Semua</button>
                        <button class="btn btn-outline-secondary btn-sm" type="button" id="btnCollapseAll">Tutup Semua</button>
                    </div>
                </div>

                {{-- Accordion --}}
                <div class="accordion" id="kuaAccordion">
                    @foreach ($kuaServices as $i => $svc)
                        @php
                            $collapseId = 'acc-' . $svc->id;
                            $headingId = 'heading-' . $svc->id;
                            $reqCount = is_array($svc->requirements) ? count($svc->requirements) : 0;
                        @endphp

                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="{{ $headingId }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}" aria-expanded="false" aria-controls="{{ $collapseId }}">
                                    {{ $svc->title }}
                                    <span class="badge bg-secondary" title="Jumlah persyaratan">{{ $reqCount }}</span>
                                </button>
                            </h2>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse" aria-labelledby="{{ $headingId }}" data-bs-parent="#kuaAccordion">
                                <div class="accordion-body">
                                    @if ($reqCount)
                                        <ol class="req-list mb-0">
                                            @foreach ($svc->requirements as $req)
                                                <li>{{ $req }}</li>
                                            @endforeach
                                        </ol>
                                    @else
                                        <em class="text-muted">Belum ada persyaratan.</em>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    </main><!-- End #main -->

    {{-- Optional: Expand/Collapse all (Bootstrap 5) --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordion = document.getElementById('kuaAccordion');
            const items = accordion ? accordion.querySelectorAll('.accordion-collapse') : [];
            const btnExpand = document.getElementById('btnExpandAll');
            const btnCollapse = document.getElementById('btnCollapseAll');

            function showAll() {
                items.forEach(el => {
                    if (!el.classList.contains('show')) {
                        const btn = el.previousElementSibling?.querySelector('.accordion-button');
                        btn?.classList.remove('collapsed');
                        el.classList.add('show');
                    }
                });
            }

            function hideAll() {
                items.forEach(el => {
                    if (el.classList.contains('show')) {
                        const btn = el.previousElementSibling?.querySelector('.accordion-button');
                        btn?.classList.add('collapsed');
                        el.classList.remove('show');
                    }
                });
            }

            btnExpand?.addEventListener('click', showAll);
            btnCollapse?.addEventListener('click', hideAll);
        });
    </script>

@endsection
