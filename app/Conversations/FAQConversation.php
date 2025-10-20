<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class FAQConversation extends Conversation
{
    public function run()
    {
        $this->menu('page1');
    }

    protected function menu(string $page = 'page1')
    {
        if ($page === 'page1') {
            $q = Question::create("ℹ️ <b>FAQ</b> — pilih pertanyaan (1/2):")
                ->addButtons([
                    Button::create('Syarat daftar nikah?')->value('faq_nikah_syarat'),
                    Button::create('H-10 kerja itu apa?')->value('faq_hminus10'),
                    Button::create('Biaya nikah di luar KUA?')->value('faq_biaya_luar'),
                    Button::create('Berapa lama proses nikah?')->value('faq_durasi_nikah'),
                    Button::create('Surat Rekomendasi Nikah')->value('faq_rekom'),
                    Button::create('Perbaikan/ubah data nikah')->value('faq_perbaikan'),
                    Button::create('Duplikat buku nikah')->value('faq_duplikat'),
                    Button::create('› Lanjut ke 2/2')->value('next_page')
                ]);
        } else { // page2
            $q = Question::create("ℹ️ <b>FAQ</b> — pilih pertanyaan (2/2):")
                ->addButtons([
                    Button::create('Daftar online SIMKAH')->value('faq_simkah'),
                    Button::create('Bimbingan Perkawinan (Bimwin)')->value('faq_bimwin'),
                    Button::create('Jam layanan & lokasi')->value('faq_jam'),
                    Button::create('Taukil wali bil kitābah')->value('faq_taukil'),
                    Button::create('SK Belum Menikah')->value('faq_skbm'),
                    Button::create('Wakaf & AIW')->value('faq_wakaf'),
                    Button::create('Legalisasi buku nikah')->value('faq_legalisasi'),
                    Button::create('‹ Kembali 1/2')->value('prev_page')
                ]);
        }

        $this->ask($q, function (Answer $ans) {
            $v = $ans->getValue() ?: strtolower(trim($ans->getText() ?? ''));

            // Paging
            if ($v === 'next_page') return $this->menu('page2');
            if ($v === 'prev_page') return $this->menu('page1');

            // Handlers
            switch ($v) {
                // ——— NIKAH/RUJUK ———
                case 'faq_nikah_syarat':
                    $this->say(
                        "<b>Syarat ringkas nikah:</b><br>".
                        "&bull; Formulir N1–N4 dari Kelurahan/Desa<br>".
                        "&bull; KTP & KK (fotokopi)<br>".
                        "&bull; Pas foto 3×4 (disarankan 5 lembar)<br>".
                        "&bull; Dokumen tambahan bila duda/janda/dispensasi<br>".
                        "Daftar minimal <b>H-10 hari kerja</b> sebelum akad."
                    );
                    break;

                case 'faq_hminus10':
                    $this->say(
                        "<b>H-10 kerja</b> = batas minimal pengajuan pendaftaran nikah 10 hari kerja sebelum hari akad. ".
                        "Jika kurang dari itu, ajukan dispensasi ke Pengadilan/instansi terkait."
                    );
                    break;

                case 'faq_biaya_luar':
                    $this->say(
                        "Biaya pencatatan nikah <b>di luar KUA/jam kerja</b> adalah <b>PNBP Rp600.000</b> sesuai ketentuan nasional. ".
                        "Pembayaran melalui kanal resmi (bank/pos/PNBP online), <b>bukan</b> ke petugas KUA. ".
                        "Nikah <b>di KUA pada jam kerja</b> umumnya <b>tanpa biaya PNBP</b> (ketentuan khusus bisa berlaku bagi golongan tertentu)."
                    );
                    break;

                case 'faq_durasi_nikah':
                    $this->say(
                        "<b>Perkiraan durasi</b> (jika berkas lengkap):<br>".
                        "&bull; Pendaftaran nikah/rujuk: &plusmn;30 menit<br>".
                        "&bull; Pemeriksaan nikah/rujuk: &plusmn;30 menit<br>".
                        "&bull; Pencatatan nikah/rujuk: &plusmn;45 menit"
                    );
                    break;

                case 'faq_rekom':
                    $this->say(
                        "<b>Surat Rekomendasi Nikah</b> (untuk akad di KUA lain) diproses &plusmn;15 menit setelah verifikasi berkas dasar ".
                        "(N1–N4, KTP/KK, dst.)."
                    );
                    break;

                case 'faq_perbaikan':
                    $this->say(
                        "<b>Perbaikan/ubah data nikah</b> (mis. salah ejaan) diproses &plusmn;20 menit setelah ada bukti pendukung ".
                        "(KTP/KK/akte, dsb.)."
                    );
                    break;

                case 'faq_duplikat':
                    $this->say(
                        "<b>Duplikat Buku Nikah</b> (hilang/rusak):<br>".
                        "&bull; Surat Kehilangan Kepolisian (jika hilang)<br>".
                        "&bull; Buku lama (jika rusak) untuk ditunjukkan<br>".
                        "&bull; KTP & pas foto sesuai ketentuan<br>".
                        "Estimasi proses: &plusmn;30 menit (setelah berkas lengkap)."
                    );
                    break;

                // ——— LAYANAN LAIN ———
                case 'faq_simkah':
                    $this->say(
                        "Daftar nikah dapat melalui <b>SIMKAH (Sistem Informasi Manajemen Nikah)</b>.<br>".
                        "Siapkan N1–N4 dari Kelurahan/Desa, data calon, dan jadwal.<br>".
                        "Setelah daftar, bawa berkas ke KUA untuk verifikasi & penjadwalan."
                    );
                    break;

                case 'faq_bimwin':
                    $this->say(
                        "<b>Bimbingan Perkawinan (Bimwin)</b> untuk calon pengantin: biasanya <b>2 hari</b> (&plusmn;16 JP) ".
                        "dengan materi kesiapan mental, komunikasi, keuangan keluarga, kesehatan reproduksi, hingga simulasi ijab kabul.<br>".
                        "Waktu lokal: bergilir/berjadwal (kuota terbatas)."
                    );
                    break;

                case 'faq_jam':
                    $this->say(
                        "<b>Jam Layanan KUA IV Jurai:</b><br>".
                        "• Senin–Kamis: 08.00–15.00<br>".
                        "• Jumat: 08.00–11.30<br>".
                        "• Sabtu–Minggu: Tutup (layanan nikah sesuai jadwal)<br>".
                        "<b>Alamat:</b> Jl. Ujung Gurun Salido, Kec. IV Jurai, Pesisir Selatan."
                    );
                    break;

                case 'faq_taukil':
                    $this->say(
                        "<b>Surat Taukil Wali bil Kitābah</b> (perwakilan wali secara tertulis) diproses &plusmn;20 menit ".
                        "setelah pemeriksaan syarat wali & dokumen pendukung. ".
                        "Gunanya untuk penunjukan wali pengganti/pewakilan sesuai ketentuan fikih & regulasi."
                    );
                    break;

                case 'faq_skbm':
                    $this->say(
                        "<b>Surat Keterangan Belum Menikah (SKBM)</b> diproses &plusmn;15 menit, dengan membawa KTP/KK ".
                        "dan pengantar/keterangan dari Kelurahan/Desa bila diperlukan."
                    );
                    break;

                case 'faq_wakaf':
                    $this->say(
                        "<b>Wakaf & AIW (Akta Ikrar Wakaf):</b><br>".
                        "&bull; Pendaftaran wakaf: &plusmn;30 menit<br>".
                        "&bull; Akta Ikrar Wakaf: &plusmn;60 menit (setelah persyaratan tanah & pihak terkait lengkap)<br>".
                        "&bull; Surat keterangan/rekomendasi masjid: &plusmn;15 menit"
                    );
                    break;

                case 'faq_legalisasi':
                    $this->say(
                        "<b>Legalisasi Buku Nikah</b>: estimasi &plusmn;10 menit setelah dokumen diverifikasi.<br>".
                        "Bawa buku nikah asli & salinan yang akan dilegalisasi."
                    );
                    break;

                default:
                    return $this->end();
            }


            // after answer, show menu again (stay on same page group)
            $this->menu(str_contains($v, 'faq_') ? 'page1' : 'page2');
        });
    }

    protected function end()
    {
        $q = Question::create("Perlu bantuan lain?")
            ->addButtons([
                Button::create('Menu Utama')->value('menu'),
                Button::create('Selesai')->value('done'),
            ]);

        $this->ask($q, function (Answer $a) {
            $v = $a->getValue() ?: strtolower($a->getText());
            if ($v === 'menu') return $this->bot->startConversation(new WelcomeConversation());
            $this->say("Baik, terima kasih 🙏");
            $this->bot->startConversation(new FeedbackConversation('faq'));
        });
    }
}
