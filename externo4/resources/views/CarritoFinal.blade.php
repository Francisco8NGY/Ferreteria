@extends('layoutSimple')
@section('content')



<h1 class="p-3 mb-2 bg-success text-white">Tu venta fue Completada con exito</h1>
<div class="media alert alert-primary">
    <img src="/img/envio.gif" class="align-self-center mr-3" alt="...">
    <div class="media-body">
        <h1>Datos de la Venta</h1>
        <h2>Cliente: {{ Auth::user()->name }} {{ Auth::user()->apellido }}</h2>
        <h2>Domicilio: {{ Auth::user()->domicilio }}</h2>
        <h2>Codigo Postal: {{ Auth::user()->codigoPostal }}</h2>
        <h2>Fecha: {{$info[0]->fecha}}</h2>
        <h2>SubTotal: {{$info[0]->SubTotal}}</h2>
        <h2>Iva: {{$info[0]->iva}}</h2>
        <h2 class="text-danger">Total: {{$info[0]->total}}</h2>


    </div>
</div>
@endsection