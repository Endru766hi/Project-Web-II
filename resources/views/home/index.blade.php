<html>
    <head>
        <title>
            Reservasi Lapangan
        </title>
        @include('style.index')
    </head>
        <body>
            <div class="container">
                <div class="container-navbar">
                    <ul class="ul-navbar">
                        <li class="li-navbar">
                            <a href="/" class="p-navbar"> HOME </a>
                        </li>
                        <li class="li-navbar">
                            <a href="/tutorial" class="a-navbar"> TUTORIAL </a>
                        </li>
                        <li class="li-navbar">
                            <a href="/about" class="a-navbar"> ABOUT </a>
                        </li>
                        <li class="li-navbar">
                            <a href="/contact" class="a-navbar"> CONTACT</a>
                        </li>
                        <div class="login">
                        @if (Route::has('login'))
                            <div class="li-navbar">
                                @auth
                                <a href="{{ url('/login') }}" class="a-navbar">Ke Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="a-navbar">LOGIN</a>
                                @endauth
                            </div>
                        @endif
                    </ul>
                </div>
            <div class="container-content">
                <img src="bg.jpg" alt="background" class="img-content"/>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="banner_taital">AYO OLAHRAGA!</h1>
                                <p class="banner_text">Salurkan Hobi & Bakatmu Disini, Lapangan Futsal Terbaik di Kota Jambi </p>
                                {{-- @auth
                                    @if(auth()->user()->role == 'user_penyewa')
                                    <div class="read_bt">
                                        <a href="{{ route('penyewaan/tambah-data') }}" class="ms-4">BOOKING SEKARANG!</a>
                                    </div>
                                    @endif
                                @endauth --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-footer">
                <h1 class="h1-footer"> Kelompok 5 | Sistem Informasi | Universitas Jambi</h1>
            </div>
            </div>
        </body>
</html>
