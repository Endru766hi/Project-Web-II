<?php

?>

<html>
    <head>
        <title>
            Tata Cara
        </title>
        @include('style.tutorial')
    </head>
        <body>
            <div class="container">
                <div class="container-navbar">
                    <ul class="ul-navbar">
                        <li class="li-navbar">
                            <a href="/" class="a-navbar"> HOME </a>
                        </li>
                        <li class="li-navbar">
                            <a href="/tutorial" class="p-navbar"> TUTORIAL </a>
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
                             <h1 class="banner_taital">CARA RESERVASI</h1>
                             <p class="banner_text">1. Pengguna harus membuat akun atau mendaftar sebagai anggota pada website</p>
                             <p class="banner_text">2. Pengguna dapat memilih jenis lapangan yang ingin dipesan, memilih tanggal dan watu tertentu</p>
                             <p class="banner_text">3. Pengguna harus memilih detail sewa lapangan</p>
                             <p class="banner_text">4. Jika sudah sesuai, pengguna mengklik tombol pesan</p>
                             <p class="banner_text">5. Lalu pengguna akan diarahkan ke menu pembayaran</p>
                             <p class="banner_text">6. Setelah upload, tunggu admin menyetujui pembayaran</p>
                             <p class="banner_text">7. Setelah status disetujui, silahkan datang ke lapangan sesuai jadwal yang di pesan</p>
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
