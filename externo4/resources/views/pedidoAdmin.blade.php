@extends('layoutAdmin')


@section('content')
<h1>Ventas concretadas</h1>

@foreach($users as $user)
<div class="media alert alert-secondary">

    <div class="media-body">
        <h4>Número de venta</h4>
        <h5 class="mt-0">{{$user->id}}</h5>

        <h4>Estado de la venta</h4>
        <h5 class="mt-0">{{$user->estado}}</h5>

        <h4>Fecha</h4>
        <h5 class="mt-0">{{$user->fecha}}</h5>

        <h4>Tipo de pago</h4>
        <h5 class="mt-0">{{$user->tipoPago}}</h5>

        <h4>iva</h4>
        <h5 class="mt-0">{{$user->iva}}</h5>

        <h4>Sub total</h4>
        <h5 class="mt-0">{{$user->SubTotal}}</h5>

        <h4>Total</h4>
        <h5 class="mt-0">{{$user->total}}</h5>

        <h4>Id cliente</h4>
        <h5 class="mt-0">{{$user->user_id}}</h5>

        <h4>Nombre cliente</h4>
        <h5 class="mt-0">{{$user->name}}</h5>



        <div class="container">
            <div class="row">

            </div>
        </div>

    </div>
</div>

@endforeach



{{ $users->appends(Request::only('nombre'))->render() }}

@endsection
