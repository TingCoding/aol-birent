<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <title>BiRent</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav__header">
                <div class="nav__logo">
                    <a href="#">BIRENT</a>
                </div>
                <div class="nav__menu__btn" id="menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
            <ul class="nav__links" id="nav-links">
                <li><a href="#">Beranda</a></li>
                <li><a href="/display">Sewa</a></li>
                <!-- <li class="nav__links__btn">
                    <button class="btn">Sign Up</button>
                </li>
                <li class="nav__links__btn">
                    <button class="btn">Sign In</button>
                </li> -->
                <div>
                    <span><a href="/sign-up">Daftar</a></span>
                </div>
            </ul>
            {{-- <div class="nav__btns">
                <button class="btn btn__primary">Sign Up</button>
                <button class="btn btn__secondary">Sign In</button>
            </div> --}}
        </nav>
        <div class="section__container header__container" id="home">
            <div class="header__image">
                <img src="{{ asset('images/rubicon.png') }}" alt="rubicon">
            </div>
            <div class="header__content">
                <h1>Butuh mobil sewaan yang nyaman dan terjangkau?</h1>
                <p>
                    BiRent, Solusi Sewa Mobil Mudah, Nyaman, dan Terjangkau untuk Setiap Perjalanan! 🚗🌍✨
                </p>
                <div class="header__links">
                </div>
            </div>
        </div>
    </header>

    <section class="section__container steps__container" id="rent">
        <p class="section__subheader">BAGAIMANA CARA KERJANYA</p>
        <h2 class="section__header">Rentgo mengikuti 3 langkah kerja</h2>
        <div class="steps__grid">
            <div class="steps__card">
                <span><i class="ri-map-pin-fill"></i></span>
                <h4>Pilih Lokasi</h4>
                <p>
                    Pilih lokasi rental yang Anda inginkan dari jaringan luas tempat penyewaan mobil kami.
                </p>
            </div>

            <div class="steps__card">
                <span><i class="ri-calendar-check-fill"></i></span>
                <h4>Tanggal Penjemputan</h4>
                <p>
                    Tentukan tanggal dan waktu penjemputan mobil sesuai keinginan Anda dengan opsi penjadwalan yang fleksibel.
                </p>
            </div>

            <div class="steps__card">
                <span><i class="ri-bookmark-3-fill"></i></span>
                <h4>Pesan Mobil Anda</h4>
                <p>
                    Jelajahi berbagai pilihan kendaraan kami dan pilih yang paling sesuai dengan kebutuhan Anda.                </p>
            </div>
        </div>
    </section>

    <section class="section__container service__container" id="service">
        <div class="service__image">
            <img src="{{ asset('images/fthd.png') }}" alt="seal">
        </div>
        <div class="service__content">
            <p class="section__subheader">LAYANAN TERBAIK</p>
            <h2 class="section__header">
Rasakan pengalaman terbaik dengan penawaran rental kami            </h2>
            <ul class="service__list">
                <li>
                    <span><i class="ri-price-tag-3-fill"></i></span>
                    <div>
                        <h4>Penawaran untuk setiap anggaran</h4>
                        <p>
                            Dari mobil ekonomi hingga kendaraan mewah, kami memiliki sesuatu untuk semua orang, memastikan Anda mendapatkan nilai terbaik untuk uang Anda                        </p>
                    </div>
                </li>
                <li>
                    <span><i class="ri-wallet-fill"></i></span>
                    <div>
                        <h4>Jaminan harga terbaik</h4>
                        <p>
                            Kami memastikan Anda mendapatkan tarif yang kompetitif di pasar, sehingga Anda dapat memesan dengan percaya diri mengetahui bahwa Anda mendapatkan penawaran terbaik.
                        </p>
                    </div>
                </li>
                <li>
                    <span><i class="ri-customer-service-fill"></i></span>
                    <div>
                        <h4>Layanan 24/7</h4>
                        <p>
                            Tim kami yang berdedikasi tersedia 24/7 untuk membantu Anda dengan pertanyaan atau masalah apa pun, memastikan pengalaman rental yang lancar                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="section__container experience__container" id="ride">
        <p class="section__subheader">PENGALAMAN PELANGGAN</p>
        <h2 class="section__header">
            Kami memastikan pengalaman pelanggan terbaik
        </h2>
        <div class="experience__content">
            <div class="experience__card">
                <span><i class="ri-price-tag-3-fill"></i></span>
                <h4>Harga Kompetitif
                </h4>
            </div>
            <div class="experience__card">
                <span><i class="ri-money-rupee-circle-fill"></i></span>
                <h4>Sewa Lebih Mudah Sesuai Anggaran Anda</h4>
            </div>
            <div class="experience__card">
                <span><i class="ri-bank-card-fill"></i></span>
                <h4>Rencana Pembayaran Paling Fleksibel</h4>
            </div>
            <div class="experience__card">
                <span><i class="ri-award-fill"></i></span>
                <h4>Garansi Mobil Terbaik yang Diperpanjang</h4>
            </div>
            <div class="experience__card">
                <span><i class="ri-customer-service-2-fill"></i></span>
                <h4>Bantuan 24/7</h4>
            </div>
            <div class="experience__card">
                <span><i class="ri-car-fill"></i></span>
                <h4>Pilihan Bengkel Sesuai Keinginan Anda</h4>
            </div>
            <img src="{{ asset('images/experience.png') }}" alt="experience">
        </div>
    </section>

    <!-- <section class="section__container download__container" id="contact">
        <div class="download__grid">
            <div class="download__content">
                <h2 class="section__header">
                    Download the free RentalX app
                </h2>
                <p>
                    Download the RentalX app to manage your bookings, find exclusive deals, and access 24/7 support, all from your mobile device.
                </p>
                <div class="download__links">
                    <a href="#">
                        <img src="images/store.jpg" alt="app store">
                    </a>
                    <a href="#">
                        <img src="images/play.png" alt="play">
                    </a>
                </div>
            </div>
            <div class="download__image">
                <img src="images/download.png" alt="download">
            </div>
        </div>
    </section> -->

    <footer>
        <div class="section__container footer__container">
            <!-- <div class="footer__col">
                <h4> Our Products</h4>
                <ul class="footer__links">
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Hotels</a></li>
                    <li><a href="#">Cars</a></li>
                    <li><a href="#">Packages</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Priceline</a></li>
                </ul>
            </div> -->
            <div class="footer__col">
                <h4>Tentang RentalX</h4>
                <ul class="footer__links">
                    <li><a href="#">Mengapa RentalX</a></li>
                    <li><a href="#">Kisah Kami</a></li>
                    <li><a href="#">Investor</a></li>
                    <li><a href="#">Pusat Pers</a></li>
                    <li><a href="#">Beriklan</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Sumber Daya</h4>
                <ul class="footer__links">
                    <li><a href="#">Unduh</a></li>
                    <li><a href="#">Pusat Bantuan</a></li>
                    <li><a href="#">Panduan</a></li>
                    <li><a href="#">Jaringan Mitra</a></li>
                    <li><a href="#">Mekanik</a></li>
                    <li><a href="#">Pengembang</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Tambahan</h4>
                <ul class="footer__links">
                    <li><a href="#">Penawaran Sewa</a></li>
                    <li><a href="#">Bengkel</a></li>
                    <li><a href="#">Lihat Pemesanan</a></li>
                    <li><a href="#">Perusahaan Penyewaan</a></li>
                    <li><a href="#">Penawaran Baru</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>