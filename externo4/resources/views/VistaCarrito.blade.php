@extends('layoutSimple')
@section('content')
    <style>
        .boton{
            background-color: transparent;
            border-color: transparent;
        }
    </style>
@if(count($pedido) == 0)

<div class="container">
  <div class="row">
    <div class="col-1">
 
    </div>
    <div class="col-10 " >
      <h1 class=" p-3 mb-2 bg-danger text-white text-center"   >Tu carrito está vacío</h1>
      <h1 class=" alert alert-info text-center">¿No sabes qué comprar? ¡Miles de productos te esperan!</h1>
      <img src="/img/vacio.png" alt="">
    </div>
    <div class="col-1">
    
    </div>
  </div>
</div>

@else
<br>
<br>
@foreach($pedido as $ped)
<div class="media alert alert-primary">
    <img src="{{$ped->imagen}}" class="align-self-center mr-3 " alt="..." height="250">
    <div class="media-body">
        <!-- inicial columnas-->
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <br>
                    <h3>{{$ped->nombre}}</h3>
                    <h3>Precio: ${{$ped->precioPublico}}</h3>
                    <h3>Cantidad: {{$ped->cantidad}}</h3>
                </div>
                <div class="col-4">
                    <h3 class="alert alert-danger">Total: ${{$ped->total}}</h3>
                </div>
                <div class="col-2">
                    
                <form method="POST" action="BorrarCarrito">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <!--<a class="nav-link " type="submit" href="{{ url('MostrarCarrito') }}"><img src="https://img.icons8.com/material-rounded/80/000000/shopping-cart.png" height="50"><span class="sr-only">(current)</span></a>
                        -->
                            <input type="Hidden" id="idUsuario" name="idUsuario" value="{{ Auth::user()->id }}">
                            <input type="Hidden" id="idPedido" name="idPedido" value="{{$ped->idp}}">
                            <button type="submit" class="boton" ><img src="/img/b.png" ></button>

                        </form>
                </div>
            </div>
        </div>
        <!-- Termina columnas-->
    </div>
</div>
@endforeach
<div class="media alert alert-primary">
    <div class="media-body">
        <!-- inicial columnas-->
        <div class="container">
            <div class="row">
                <div class="col-7">
                </div>
                <div class="col-5">
                    <h3 class="alert alert-danger">SubTotal: $ {{$sumTotal[0]->total}}</h3>
                    <h3 class="alert alert-danger">IVA: $ {{$iva}}</h3>
                    <h3 class="alert alert-danger">Total: $ {{$todo}}</h3>
                </div>
               
            </div>
        </div>
        <!-- Termina columnas-->
    </div>
</div>
<form method="POST" action="ComprarCarrito">
{{ method_field('PUT') }}
{{ csrf_field() }}
<input type="Hidden" id="idVenta" name="idVenta" value="{{$pedido[0]->venta_id}}">
<button type="submit" class="btn btn-success btn-lg btn-block">Comprar Carrito</button>
</form>
<br>
<br>
@endif

@endsection