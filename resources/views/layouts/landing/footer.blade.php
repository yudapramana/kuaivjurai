<footer id="footer" role="contentinfo">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-5 col-md-6">
                    <div class="footer-info">
                        {{-- <h4>{{ __('messages.footer.brand') ?? 'KUA IV Jurai — Palanta Sakinah' }}</h4> --}}
                        <h3>
                            <img src="{{ asset('images/kua/palantasakinahtulisancrop.png') }}" alt="Logo KUA IV Jurai — Palanta Sakinah" class="img-fluid" width="200" loading="lazy">
                        </h3>
                        <p class="mb-0">
                            Jl. Ujung Gurun Salido, Kec. IV Jurai, Kab. Pesisir Selatan<br>
                            Sumatera Barat 25654
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{ __('messages.footer.navigation') ?? 'Navigasi' }}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="/#hero">{{ __('messages.menu.home') ?? 'Beranda' }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/#profil">{{ __('messages.menu.aboutus') ?? 'Profil' }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/#layanan">{{ __('messages.menu.services') ?? 'Layanan' }}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/#struktur">Struktur</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/#edukasi">Edukasi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/#hubungi">{{ __('messages.menu.contact') ?? 'Kontak' }}</a></li>
                        {{-- Halaman kebijakan opsional --}}
                        {{-- <li><i class="bx bx-chevron-right"></i> <a href="/privacy-policy">Privacy Policy</a></li> --}}
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>{{ __('messages.footer.contact') ?? 'Kontak' }}</h4>
                    <p class="mb-1">
                        <strong>Telp/WA:</strong>
                        <a href="https://wa.me/62812XXXXXXX" target="_blank" rel="noopener">+62 823-6424-6343</a><br>
                        <strong>Email:</strong>
                        <a href="mailto:kuaivjurai@gmail.com">kuaivjurai@gmail.com</a>
                    </p>

                    <div class="social-links mt-3">
                        {{-- Ganti tautan dengan akun resmi --}}
                        <a href="https://instagram.com/palantasakinah" class="instagram" aria-label="Instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="https://youtube.com/@palantasakinah" class="youtube" aria-label="YouTube"><i class="bx bxl-youtube"></i></a>
                        <a href="https://www.tiktok.com/@palantasakinah" class="tiktok" aria-label="TikTok"><i class="bx bxl-tiktok"></i></a>
                        {{-- Tambahan opsional --}}
                        {{-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> --}}
                        {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            {{ date('Y') }} &copy; <strong><span>KUA IV Jurai — Palanta Sakinah</span></strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->
