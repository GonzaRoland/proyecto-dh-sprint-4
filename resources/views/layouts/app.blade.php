<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dogo Pet Shop</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Font generica -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
     
     <!-- Fonts Carrousel -->
    <link href="https://fonts.googleapis.com/css?family=Chelsea+Market" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master1(MOD).css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     
</head>
<body>
    
    <!-- HEADER -->
    <header>
            <!-- NAVBAR -->
            <div>
                <!-- SAQUÉ bg-dark fixed-top del class name, y cambié navbar-expand-lg por md (Código en línea 4109 a 4149 de bootsrap.css) -->
                <nav class="navbar navbar-expand-md navbar-dark" id="mainNav">
                    <div class="container">
                        <a class="navbar-brand js-scroll-trigger" href="/">Dogo Pet Shop</a>
    
                    <div class="conteiner-flex1">
                        <div class="redes-top">
                            <div class="social-icon">
                                <a href="#">
                                    <img src="{{ asset('svg/social-fb.svg') }}" alt="Facebook">
                                </a>
                            </div>
                            <div class="social-icon">
                                <a href="#">
                                    <img src="{{ asset('svg/twitter-01.svg') }}" alt="Twitter">
                                </a>
                            </div>
                            <div class="social-icon">
                                <a href="#">
                                    <img src="{{ asset('svg/social-ig.svg') }}" alt="Instagram">
                                </a>
                            </div>
                            <div class="social-icon">
                                <a href="#">
                                    <img src="{{ asset('svg/social-email.svg') }}" alt="Email">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="/productos">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#info">Contacto</a>
                            </li>
                            <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                    @endif
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->first_name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/perfil/edit">
                                             {{ __('Editar Perfil') }}
                                        </a>
    
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar sesión') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                        </ul>
                        <div class="social-icon">
                            <a href="/carrito">
                                <img src="{{ asset('svg/cart.svg') }}" alt="Email">
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
        </header>

    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/perfil/edit">
                                         {{ __('Editar Perfil') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
 --}}
        <main class="py-4">
            @yield('content')
        </main>
        <!----------- Footer ------------>

    <section>
            <footer class="footer-bs">
                <div class="row">
        
                    <div class="col-md-3">
                        <div class="logocorpoFooter">
                            <img src="{{ asset('img/imagen_corporate/logospring.png') }}">
                                <div class="logoTextoFooter">
                                    <p>Dogo</p>
                                </div>
                                <div class="logoparrafoFooter">
                                    <p><b>PET SHOP</b></p>
                                </div>
                        </div>              
                    </div>
                    
                    <div class="col-md-3 footer-nav">
                        <div class="col-md-5">
                            <ul class="pages">
                                <li><a href="/">Inicio</a></li>
                                <li><a href="/productos">Productos</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="/#info">Contacto</a></li>
                                <li><a href="/carrito">Carrito</a></li>
                                
                            </ul>
                        </div>
                    </div>
        
                    <div class="col-md-3 footer-social">
                        <h4>SEGUINOS</h4>
                        <ul>
                            <li><img src="{{ asset('svg/social-fb.svg') }}" alt="Facebook"><a href="#"> Facebook</a></li>
                            <li><img src="{{ asset('svg/twitter-01.svg') }}" alt="Twitter"><a href="#"> Twitter</a></li>
                            <li><img src="{{ asset('svg/social-ig.svg') }}" alt="Instagram"><a href="#"> Instagram</a></li>
                            <li><img src="{{ asset('svg/social-email.svg') }}" alt="Email"><a href="#"> Mail</a></li>
                        </ul>
                    </div>
        
                    <div class="col-md-3 footer-ns">
                        <h4>Newsletter</h4>
                        <h3>SUSCRIBITE</h3>
                        <p>Ingresá tu email y enterate de todas las novedades, ofertas y beneficios antes que nadie.</p>
                            <div class="input-group">
                              <input type="text" class="form-controll" placeholder="email@mail.com">
                              <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Enviar</button>
                              </span>
                            </div><!-- /input-group -->
                         </p>
                    </div>
                </div>
            {{-- </footer> --}}
            <section class="socalo">
                <p>Designed & Powered by <a href="#">Go.Na.He</a> - © 2018 Full Stack TN2 - Digital House - All rights reserved</p>
            </section>
        </footer>
        
            {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{-- </div> --}}
</body>
</html>
