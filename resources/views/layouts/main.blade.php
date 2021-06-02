<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reštaurácia JFS</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-darkbrown">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}">Reštaurácia JFS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == "homepage" ? "active" : "" }}" aria-current="page" href="{{ route('homepage') }}">Domov</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == "about" ? "active" : "" }}" aria-current="page" href="{{ route('about') }}">O nás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == "card" ? "active" : "" }}" aria-current="page" href="{{ route('card') }}">Jedálny lístok</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == "blog" ? "active" : "" }}" aria-current="page" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == "contact" ? "active" : "" }}" aria-current="page" href="{{ route('contact') }}">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="py-5 bg-darkbrown">
    <div class="container">
        <div class="row text-center text-lg-start">
            <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                <h2 class="font-dancing-script">Reštaurácia JFS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi, dolores dolorum eligendi exercitationem fuga hic in incidunt inventore ipsam labore modi nemo odit perferendis placeat sint unde velit voluptatibus?</p>
            </div>
            <div class="col-12 col-lg-3 mb-3 mb-lg-0 offset-lg-3">
                <div class="footer-widget">
                    <div class="footer-widget-item">
                        <h4 class="font-dancing-script">Kontakt</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="footer-widget-item">
                        <h4 class="font-dancing-script">Otváracie hodiny</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-3 mb-lg-0">
                <div class="footer-widget">
                    <div class="footer-widget-item">
                        <h4 class="font-dancing-script">Adresa</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="footer-widget-item">
                        <h4 class="font-dancing-script">Prevádzkovateľ</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
@stack('scripts')
</body>
</html>
