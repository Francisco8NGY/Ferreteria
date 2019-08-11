@extends('layout')
@section('content')

@foreach($producto as $item)
<div class="media alert alert-secondary">
    <img src="{{$item->imagen}}" class="align-self-start mr-3" height="300" width="300">
    <div class="media-body">
        <h5 class="mt-0">{{$item->nombre}}</h5>
        <h4>Marca:</h4>
        <h6 class="text-dark">{{$item->marca}}</h6>
        <h4>Modelo</h4>
        <h6 class="text-dark">{{$item->modelo}}</h6>
        <h4>Precio</h4>
        <h6 class="text-dark">$ {{$item->precioPublico}}</h6>

        <div class="container">
            <div class="row">
                <div class="col-sm-">
                <button type="submit" class="btn btn-success">Comprar Ahora</button>
                </div>
                <div class="col-sm-4">
                <button type="button" class="btn btn-primary">Agregar al Carrito</button>
                </div>
            </div>
        </div>

    </div>
</div>
<br>
@endforeach



@endsection