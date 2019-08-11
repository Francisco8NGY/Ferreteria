@extends('layout')

@section('content')

<div class="container" id="tabla">
    <div class="row">
        <div class="col-6">
            <!-- Inicia Columna 1 -->
            <h2>Disfruta de nuestros Beneficios</h2>
            <ul class="list-unstyled">
                <li class="media">
                    <img class="mr-3" src="/img/ico1.png" alt="Generic placeholder image" height="200" width="200">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Entregas Rapida</h5>
                        Contamos con el mejor servicio a domicilio con el objetivo de hacerle llegar su pedido lo mas pronto posible.
                        <br>
                        Ponemos a su disposicion nuestras 4 tiendas en un horario de 8:00 am a 6:00 pm
                    </div>
                </li>
                <li class="media my-4">
                    <img class="mr-3" src="/img/ico2.png" alt="Generic placeholder image" height="200" width="200">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">La mejor Atencion al Cliente</h5>
                        Una de nuestras prioridades es siempre birndarle el mejor servicio a cada uno de nuestros clientes.
                        Cada una de nuestras tiendan cuentan con atencion al cliente para brindarle la informacion de lo que necesita.

                    </div>
                </li>
                <li class="media">
                    <img class="mr-3" src="/img/ico3.png" alt="Generic placeholder image" height="200" width="200">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Los Mejores Precios</h5>
                        Porque nos preocupamos por tu economia te ofrecemos los mejores precios.
                        Nuestra empresa siempre trata de buscar los mejores precios con sus provedores.
                        <br>
                        Y si encuentras un precio mejor
                        <br>
                        !Nosotros te lo igualamos¡
                    </div>
                </li>
                <li class="media">
                    <img class="mr-3" src="/img/ico4.png" alt="Generic placeholder image" height="200" width="200">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Los Mejores Productos</h5>
                        En todas nuestras tiendas podras encontrar una gran variedad de productos de las mejores marcas con tal de ofrecer lo mejor en calidad
                    </div>
                </li>
            </ul>
            <!-- Termina Columna 1 -->
        </div>

        <div class="col-6">
            <!-- Inicia Columna 2 -->
            <h1>Nos encontramos en:</h1>
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/1.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="font-weight-bold text-white bg-dark">Av 20 de Noviembre 323. Centro</h5>
                                <p href="#" class="font-weight-bold text-white bg-dark">Tel: 312-313-9110</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/img/3.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="font-weight-bold text-white bg-dark"> Av 3r Anillo Periferico 365.</h5>
                                <p class="font-weight-bold text-white bg-dark">312-312-6366</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/img/4.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="font-weight-bold text-white bg-dark"> Av. Niños Heroes 1420,La Estancia.</h5>
                                <p class="font-weight-bold text-white bg-dark">312-314-7776</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/img/2.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="font-weight-bold text-white bg-dark"> Av. Enrique Corona Morfin 121.</h5>
                                <p class="font-weight-bold text-white bg-dark">312-313-9110</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Empieza segundo visualizador -->
            <h2>Contamos con las Mejores Marcas</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/img/m1.jpg" alt="First slide" height="300">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/m2.png" alt="Second slide" height="300">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/m3.jpg" alt="Third slide" height="300">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/m4.png" alt="Third slide" height="300">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/m5.jpg" alt="Third slide" height="300">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
           
        </div>
        <br>
        <!-- Termina Columna 2 -->

    </div>
</div>






@endsection