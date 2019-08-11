@extends('layoutSimple')
@section('content')
@if(count($tus)==0)
<div class="alert alert-warning" role="alert">
    <h1 class="alert-heading">Aun no tienes Ventas Registradas :(</h1>
    <h2>¿No sabes qué comprar? ¡Miles de productos te esperan!</h2>
    <img src="/img/venta.gif" class="" alt="">
</div>

@else
@foreach($tus as $t)
<div class="alert alert-info" role="alert">
 <h2>ID venta: {{$t->id}}</h2>
 <h4>Fecha: {{$t->fecha}}</h4>
 <h4>SubTotal: $ {{$t->SubTotal}}</h4>
 <h4>Iva: $ {{$t->iva}}</h4>
 <h4>Total: $ {{$t->total}}</h4>
</div>
@endforeach
@endif
@endsection