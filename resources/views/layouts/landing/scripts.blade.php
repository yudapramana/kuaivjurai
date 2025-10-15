<!-- Template Main JS File -->
<script src="{{ asset('sailor/js/main.js') }}"></script>

<script>
    var botmanWidget = {
        // === Branding & teks ===
        title: 'KUA IV Jurai',
        aboutText: 'KUA IV Jurai — Palanta Sakinah',
        introMessage: "Assalamu’alaikum 👋\nSelamat datang di layanan chat *KUA IV Jurai*.\nKetik *Hi* untuk melihat daftar layanan atau ajukan pertanyaan Anda.",
        placeholderText: 'Tulis pertanyaan Anda…',

        // === Warna & tampilan ===
        mainColor: '#175941', // warna utama
        bubbleBackground: '#175941', // warna tombol bubble
        displayMessageTime: true
    };
</script>

<!-- CSS override: taruh setelah chat.min.css dan sebelum widget.js -->
<style>
    /* Header widget */
    .chatbot__header,
    .chatbot__header button,
    .chatbot__title {
        background: #175941 !important;
        color: #fff !important;
    }

    /* Tombol bubble (mengambang) */
    .chatbot__button {
        background: #175941 !important;
        color: #fff !important;
    }

    /* Tombol kirim & fokus input */
    .chatbot__send--button {
        background: #175941 !important;
    }

    .chatbot__input input:focus {
        outline: 2px solid #86efac !important;
        outline-offset: 1px;
    }

    /* Quick replies (jika digunakan) */
    .quick-replies__button {
        border-color: #175941 !important;
        color: #175941 !important;
    }

    .quick-replies__button:hover {
        background: #175941 !important;
        color: #fff !important;
    }

    /* Timestamp pesan (opsional) */
    .conversation__messages__timestamp {
        opacity: .7 !important;
    }
</style>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

<!-- Vendor JS Files -->
<script src="{{ asset('sailor/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('sailor/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('sailor/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('sailor/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('sailor/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('sailor/vendor/php-email-form/validate.js') }}"></script>
