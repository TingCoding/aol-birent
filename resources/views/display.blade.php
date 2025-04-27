<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIRENT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #5a0f0f;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .swiper {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px 0;
        }
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .product {
            background: #fff;
            border-radius: 8px;
            padding: 15px;
            width: 300px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product img {
            max-width: 100%;
            border-radius: 8px;
        }
        .rent-btn {
            display: inline-block;
            padding: 10px 15px;
            margin-top: 10px;
            color: #fff;
            background: #5a0f0f;
            text-decoration: none;
            border-radius: 5px;
        }
        .rent-btn:hover {
            background: #780f0f;
        }
    </style>
</head>
<body>
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
            <li><a href="/">Beranda</a></li>
            <li><a href="#">Sewa</a></li>
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
    <header>

    <header>
        <h1>Rental Mobil Terbaik</h1>
    </header>
    <a href="/add-car" style="color: white; text-decoration: none;">Tambah Mobil</a>
    <div class="swiper-container swiper">
        <div class="swiper-wrapper">
            @forelse ($cars as $c)
            <div class="swiper-slide">
                <div class="product" style="color: black;" >
                    <img src="{{ asset('storage/'.$c->Photo) }}" alt="{{ $c->Photo }}">
                    {{-- {{ dd($c) }} --}}
                    <br>
                    <h3>{{ $c->Name }}</h3>
                    <p style="margin: 5px">Rp {{ $c->Price }}/hari</p>
                    <a href="/add-order" class="rent-btn">Sewa Sekarang</a>
                </div>
            </div>
            
            @empty
                <p>{{ "Cars empty." }}</p>
            @endforelse
            
        </div>
        <br><br>
        <!-- Tombol Navigasi -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>
</html>
