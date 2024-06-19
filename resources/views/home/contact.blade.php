<?php

?>

<html>
    <head>
        <title>
            Tata Cara
        </title>
        @include('style.contact')
    </head>
        <body>
            <div class="container">
                <div class="container-navbar">
                    <ul class="ul-navbar">
                        <li class="li-navbar">
                            <a href="/" class="a-navbar"> HOME </a>
                        </li>
                        <li class="li-navbar">
                            <a href="/tutorial" class="a-navbar"> TUTORIAL </a>
                        </li>
                        <li class="li-navbar">
                            <a href="/about" class="a-navbar"> ABOUT </a>
                        </li>
                        <li class="li-navbar">
                            <a href="/contact" class="p-navbar"> CONTACT</a>
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
                             <h1 class="banner_taital">HUBUNGI KAMI</h1>
                             <p class="banner_text">083171936839</p>
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
