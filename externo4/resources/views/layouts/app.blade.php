<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilosYou.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <style>
        .boton {
            background-color: transparent;
            border-color: transparent;
        }
    </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <header>


        <nav class="navbar navbar sticky-top navbar-expand-lg navbar navbar-light " style="background-color: #F07C09;">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand" href="/welcome">
                    <img src="/img/logo.png" class="d-inline-block align-top" alt="">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            @if (Route::has('login'))
                            <div class="nav-item">
                                @auth
                                <a href="{{ url('/home') }}"><img src="https://img.icons8.com/ios-filled/50/000000/user.png"></a>
                                @else
                                <a href="{{ route('login') }}">Ingresar</a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}">Registrarme</a>
                                @endif
                                @endauth
                            </div>
                            @endif
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="MostrarCarrito">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <!--<a class="nav-link " type="submit" href="{{ url('MostrarCarrito') }}"><img src="https://img.icons8.com/material-rounded/80/000000/shopping-cart.png" height="50"><span class="sr-only">(current)</span></a>
                        -->
                                <input type="Hidden" id="idUsuario" name="idUsuario" value="{{ Auth::user()->id }}">
                                <button type="submit" class="boton"><img src="https://img.icons8.com/material-rounded/80/000000/shopping-cart.png" height="50"></button>

                            </form>
                        </li>
                        <li class="nav-item">

                            <form method="POST" action="MostrarVentas">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <!--<a class="nav-link " type="submit" href="{{ url('MostrarCarrito') }}"><img src="https://img.icons8.com/material-rounded/80/000000/shopping-cart.png" height="50"><span class="sr-only">(current)</span></a>
-->
                                <input type="Hidden" id="idUsuario" name="idUsuario" value="{{ Auth::user()->id }}">
                                <button type="submit" class="boton"><img src="/img/bag2.png" height="42"></button>

                            </form>
                        </li>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Config <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            @endguest

                        </ul>

                </div>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Ingresa un Producto" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                </form>
        </nav>
        </div>





        <br>
        <br>


    </header>



    <main role="main" class="container">
        @yield('content')
    </main>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilosYou.css">
    <link rel="stylesheet" href="/css/fonts.css">
</body>

</html>