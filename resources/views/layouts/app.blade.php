<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/avatar.jpg') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- importacion de los estilos -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/grid.css') }}" rel="stylesheet">

    <!-- icons -->
    <script src="https://kit.fontawesome.com/1ad6313c41.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- template principal que se usa en ambas vista el contenido dinamico se muestra en @yield('content') -->
    <div id="app">
        <!-- nav principal  -->
        <nav class="navbar navbar-expand-md shadow-sm hover-effect sticky-top " style="background: #F4DD61;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- espacio para el logo -->
                    <img class="" src="{{ asset('img/logo.png') }}" alt="Logo {{ config('app.name', 'agencia') }}" width="150">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-2">
                            <a class="nav-link btn-a @if (Request::url() == route('home')) btna-active @else btna-efect @endif" href="{{ url('/') }}">{{ __('Inicio') }}</a>
                        </li>
                        <li class="nav-item mr-2">
                            <a class="nav-link btn-a btna-efect @if (Request::url() == route('home')) @else btna-efect @endif" href="{{ url('/') }}">{{ __('Nosotros') }}</a>
                        </li>
                        <li class="nav-item dropdown mr-2 btna-efect">
                            <a class="nav-link btn-a dropdown-toggle @if (Request::url() == route('home')) @else @endif" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">{{ __('Servicios') }}</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/contact') }}">Arrendamiento</a>
                                <a class="dropdown-item" href="{{ url('/contact') }}">Estrena tu auto</a>
                            </div>
                        </li>
                        <li class="nav-item mr-2">
                            <a class="nav-link btn-a btna-efect @if (Request::url() == route('home')) @else btna-efect @endif" href="{{ url('/') }}">{{ __('Calculadora de pagos') }}</a>
                        </li>
                        <li class="nav-item">
                            <!-- clase vista activa -->
                            <a class="nav-link btn-a btna-efect @if (Request::url() == route('home')) @else btna-efect @endif" href="#link-form-contact">{{ __('Contacto') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>    
        <main class="">
            @yield('content')
        </main>
    </div>
    <div class="row w-100 m-0 p-0 bg-blue">
        <footer class=" container fx-footer">
            <section class="box-logo-social d-flex justify-content-sm-between justify-content-md-between  justify-content-lg-between  p-0 ">
                <figure class="">
                    <img loading="lazy" src="{{ asset('img/logo.png') }}" alt="Logo {{ config('app.name', 'angencia') }}" width="150">
                </figure>
                <div class="socials  ">
                    <a href="" class="format-social-link">
                        <img loading="lazy" src="{{ asset('img/facebook.png') }}" alt="">
                    </a>
                    <a href="" class="format-social-link">
                        <img loading="lazy" src="{{ asset('img/instagram.png') }}" alt="">
                    </a>
                </div>
            </section>
            <section class="row w-100 mt-3 info-box" style="margin: auto">
                <article class="col-sm-6 col-md-6 col-lg-4 p-0 text-sm-left text-md-left"><a class="format-link" href="mailto:">Loremipsum.@lorem.com</a></article>
                <article class="col-sm-6 col-md-6 col-lg-4 p-0 text-sm-right text-lg-center format-link"><span>+00 0000 00 00 00</span></article>
                <article class="col-md-12 col-lg-4 p-0 text-sm-center text-md-center text-md-center text-lg-right"><p><a class="format-link" href="https://ecoratravel.com">Lorem.</a> | Lorem ipsum dolor sit amet consectetur adipisicing elit Vel, 97000.</p></article>
            </section>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
            crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('.toast').toast('show');
            setTimeout(() => {
                $('.toast').toast('hide');
            }, 3000);
        });
    </script>
</body>
</html>
