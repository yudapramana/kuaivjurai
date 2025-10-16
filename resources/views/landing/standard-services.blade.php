{{-- resources/views/kua/standar-layanan.blade.php --}}
@extends('layouts.landing.master')
@section('title', 'Standar Layanan KUA IV Jurai — Tabel Satu Halaman')

@section('_styles')
    <style>
        /* Layout A4 & cetak satu halaman */
        @page {
            size: A4;
            margin: 16mm;
        }

        @media print {
            .no-print {
                display: none !important;
            }

            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            table {
                page-break-inside: avoid;
            }
        }

        .page-wrap {
            background: #fff;
            border-radius: .5rem;
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .06);
            padding: 1.25rem;
        }

        h1,
        h2,
        h3,
        h4 {
            margin: 0;
        }

        .header {
            text-align: center;
            margin-bottom: .75rem;
        }

        .meta {
            text-align: center;
            font-size: .9rem;
            color: #6c757d;
            margin-bottom: .75rem;
        }

        .category {
            background: #f1f3f5;
            color: #212529;
            padding: .5rem .75rem;
            border-radius: .375rem;
            font-weight: 600;
            font-size: .95rem;
            margin: .75rem 0 .25rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: .95rem;
        }

        th,
        td {
            border: 1px solid #dee2e6;
            padding: .5rem .6rem;
            vertical-align: top;
        }

        th {
            background: #e9ecef;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .02em;
            font-size: .8rem;
        }

        .w-no {
            width: 44px;
            text-align: center;
        }

        .w-time {
            width: 120px;
            white-space: nowrap;
            text-align: center;
        }

        /* Kompresi untuk muat satu halaman */
        .compact th,
        .compact td {
            padding: .4rem .5rem;
        }

        .footnote {
            font-size: .85rem;
            color: #6c757d;
            margin-top: .5rem;
        }
    </style>

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
    @php
        // === Default data (bisa di-override dari controller) ===
        // Struktur: [ 'kategori' => '...', 'items' => [ ['layanan'=>'..','waktu'=>'..'], ... ] ]
        $standar = $standar ?? [
            [
                'kategori' => 'PELAYANAN NIKAH DAN RUJUK',
                'items' => [['layanan' => 'Pendaftaran nikah dan rujuk', 'waktu' => '30 Menit'], ['layanan' => 'Pemeriksaan nikah dan rujuk', 'waktu' => '30 Menit'], ['layanan' => 'Pencatatan nikah dan rujuk', 'waktu' => '45 Menit'], ['layanan' => 'Penerbitan surat rekomendasi nikah', 'waktu' => '15 Menit'], ['layanan' => 'Perbaikan dan perubahan data nikah', 'waktu' => '20 Menit'], ['layanan' => 'Penerbitan surat keterangan belum menikah', 'waktu' => '15 Menit'], ['layanan' => 'Penerbitan duplikat buku nikah', 'waktu' => '30 Menit'], ['layanan' => 'Penerbitan surat taukil wali bil kitabah', 'waktu' => '20 Menit']],
            ],
            [
                'kategori' => 'PELAYANAN BIMBINGAN',
                'items' => [['layanan' => 'Bimbingan perkawinan calon pengantin mandiri', 'waktu' => '300 Menit'], ['layanan' => 'Bimbingan remaja usia sekolah (BRUS)', 'waktu' => '240 Menit'], ['layanan' => 'Bimbingan keluarga sakinah', 'waktu' => '180 Menit']],
            ],
            [
                'kategori' => 'PELAYANAN WAKAF DAN KEMASJIDAN',
                'items' => [['layanan' => 'Pendaftaran wakaf', 'waktu' => '30 Menit'], ['layanan' => 'Penerbitan akta ikrar wakaf', 'waktu' => '60 Menit'], ['layanan' => 'Penerbitan surat keterangan masjid', 'waktu' => '15 Menit'], ['layanan' => 'Penerbitan surat rekomendasi masjid', 'waktu' => '15 Menit']],
            ],
            [
                'kategori' => 'PELAYANAN UMUM',
                'items' => [['layanan' => 'Legalisasi buku nikah', 'waktu' => '10 Menit'], ['layanan' => 'Konsultasi rumah tangga', 'waktu' => '30 Menit'], ['layanan' => 'Konsultasi keagamaan', 'waktu' => '30 Menit'], ['layanan' => 'Penerbitan surat keterangan', 'waktu' => '15 Menit']],
            ],
        ];
    @endphp

    <div class="all-services text-secondary px-4 py-5 text-center">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-white">Pelayanan KUA IV Jurai</h1>
            <div class="col-lg-8 mx-auto py-3">
                <p class="fs-5 mb-0 text-white-50">Standar layanan resmi & persyaratan terbaru</p>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="no-print mb-3 mt-3 d-flex gap-2">
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-sm">← Kembali</a>
            <button onclick="window.print()" class="btn btn-primary btn-sm">🖨 Cetak</button>
        </div>

        <div class="page-wrap">
            <div class="header">
                <h1 class="h4 mb-1">STANDAR LAYANAN KUA</h1>
                <div class="h6">KANTOR URUSAN AGAMA IV JURAI</div>
            </div>
            <div class="meta">Tabel ringkas waktu penyelesaian per jenis layanan</div>

            {{-- Loop kategori --}}
            @foreach ($standar as $blokIndex => $blok)
                <div class="category">{{ $blok['kategori'] ?? 'Kategori' }}</div>

                <table class="compact mb-3">
                    <thead>
                        <tr>
                            <th class="w-no">No</th>
                            <th>Jenis Layanan</th>
                            <th class="w-time">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blok['items'] ?? [] as $i => $row)
                            <tr>
                                <td class="w-no">{{ $i + 1 }}</td>
                                <td>{{ $row['layanan'] ?? '-' }}</td>
                                <td class="w-time">{{ $row['waktu'] ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endforeach

            <div class="footnote">
                <em>*Layanan pengaduan: 085364424419 • YouTube: @KUA IV Jurai • Instagram: @kuaivjurai • Facebook: @KUA IV Jurai</em>
            </div>
        </div>
    </div>
@endsection
