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
                      <a href="{{ url('/home') }}">Home</a>
                      @else
                      <a href="{{ route('login') }}">Login</a>
                      @if (Route::has('register'))
                      <a href="{{ route('register') }}">Register</a>
                      @endif
                      @endauth
                  </div>
                  @endif
              </li>
            
              

          </ul>
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Ingresa un Producto" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
          </form>
      </div>
  </nav>

  <div class="social">
      <ul>
          <li><a href="" ><img src="https://img.icons8.com/office/40/000000/facebook.png" class="i1"></a></li>
          <li><a href="" ><img src="https://img.icons8.com/color/48/000000/twitter.png"></a></li>
          <li><a href="" ><img src="https://img.icons8.com/doodle/48/000000/email.png"></a></li>
      </ul>
  </div>

</header>




<main>

</main role="main" class="container">





      @yield('content')





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
