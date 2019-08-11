@extends('layoutSimple')
@section('content')

<div class="p-3 mb-2 bg-success text-white">
    <h1>Compra Realizada con Exito!!!</h1>
</div>
<div class="container alert alert-primary">
    <div class="row">
        <div class="col">
            <h2>Datos de la compra</h2>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="media ">
                <img src="{{$infoProducto[0]->imagen}}" class="align-self-center mr-3" alt="...">
                <div class="media-body">
                    <!--inicia container-->
                    <dl class="row">
                        <dt class="col-sm-4">
                            <h5>Producto</h5>
                        </dt>
                        <dd class="col-sm-8">
                            <p>{{$infoProducto[0]->nombre}}</p>
                        </dd>
                        <dt class="col-sm-4">
                            <h5>Tipo de Pago</h5>
                        </dt>
                        <dd class="col-sm-8">
                            <p>{{$venta[0]->tipoPago}}</p>
                        </dd>
                        <dt class="col-sm-4">
                            <h5>Fecha</h5>
                        </dt>
                        <dd class="col-sm-8">
                            <p>{{$venta[0]->fecha}}</p>
                        </dd>
                        <dt class="col-sm-4">
                            <h5>Precio</h5>
                        </dt>
                        <dd class="col-sm-8">
                            <p>{{$infoProducto[0]->precioPublico}}</p>
                        </dd>
                        <dt class="col-sm-4">
                            <h5>Unidades</h5>
                        </dt>
                        <dd class="col-sm-8">
                            <p>{{$unidad}}</p>
                        </dd>
                        <dt class="col-sm-4">
                            <h5>SubTotal</h5>
                        </dt>
                        <dd class="col-sm-8">
                            <p>{{$venta[0]->SubTotal}}</p>
                        </dd>
                        <dt class="col-sm-4">
                            <h5>Iva</h5>
                        </dt>
                        <dd class="col-sm-8">
                            <p>{{$venta[0]->iva}}</p>
                        </dd>
                        <dt class="col-sm-4">
                            <h5>Total</h5>
                        </dt>
                        <dd class="col-sm-8">
                            <p class="text-danger">{{$venta[0]->total}}</p>
                        </dd>
                    </dl>
                    <!--TeminaContainer
    {{$infoProducto[0]->id }}
{{$venta[0]->id }}-->
                </div>
            </div>

        </div>
    </div>
</div>

@endsection