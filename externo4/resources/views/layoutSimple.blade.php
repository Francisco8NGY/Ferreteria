<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilosYou.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <style>
        .boton{
            background-color: transparent;
            border-color: transparent;
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>

    <!-- Inicia Body -->

    <header>


        <nav class="navbar navbar sticky-top navbar-expand-lg navbar navbar-light " style="background-color: #F07C09;">
            <!-- LOGO -->
            <a class="navbar-brand" href="/welcome">
                <img src="/img/logo.png" class="d-inline-block align-top" alt="">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        @if (Route::has('login'))
                        <div class="nav-item">
                            @auth
                            <a href="{{ url('/home') }}"><img src="https://img.icons8.com/ios-filled/50/000000/user.png"></a>
                            @else
                            <a href="{{ route('login') }}">Ingresar</a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}">Crear Cuenta</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </li>
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                    </li>
                    @endif
                    @endauth
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
                        <!-- Opcion de salir-->
                        @if (Route::has('login'))

                        @auth




                        <a class="nav-link" tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            {{ __('Salir') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>


                        @endif
                        @endauth
                    </li>
                </ul>
                <h1>
                    {{ Form::open(['route' => 'Busqueda','method' => 'GET', 'class' => 'form-inline pull-right']) }}
                    <div class="form-group">
                        {{ Form::text('nombre',null,['class' => 'form-control','placeholder' => 'Busca tu Producto'] )  }}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search">Buscar</span>
                        </button>
                    </div>
                    {{ Form::close() }}
                </h1>
            </div>
        </nav>

    </header>

    <div class="social">
        <ul>
            <li><a href="https://es-la.facebook.com/ConsorcioFerreteroDelPacifico/" target="_blank"><img src="https://img.icons8.com/office/40/000000/facebook.png" class="i1"></a></li>
            <li><a href="https://twitter.com/construrama_mx" target="_blank"><img src="https://img.icons8.com/color/48/000000/twitter.png"></a></li>
            <li><a href=""><img src="https://img.icons8.com/doodle/48/000000/email.png"></a></li>
        </ul>
    </div>


    <main role="main" class="container">
        @yield('content')
    </main>
    <footer>
    </footer>
    <!-- Termina Body -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>