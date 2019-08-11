@extends('layoutAdmin')


@section('content')
<h1>Top 10 de los clientes mas destacados</h1>

@foreach($users as $user)
<div class="media alert alert-secondary">


    <div class="media-body">
        <h4>Número de usuario</h4>
        <h5 class="mt-0">{{$user->id}}</h5>

        <h4>Nombre</h4>
        <h5 class="mt-0">{{$user->name}}</h5>

        <h4>Apellido</h4>
        <h5 class="mt-0">{{$user->apellido}}</h5>

        <h4>Nombre de usuario</h4>
        <h5 class="mt-0">{{$user->usuario}}</h5>

        <h4>Email</h4>
        <h5 class="mt-0">{{$user->email}}</h5>

        <h4>Telefono</h4>
        <h5 class="mt-0">{{$user->telefono}}</h5>

        <h4>Celular</h4>
        <h5 class="mt-0">{{$user->celular}}</h5>

        <h4>Domicilio</h4>
        <h5 class="mt-0">{{$user->domicilio}}</h5>

        <h4>Codigo postal</h4>
        <h5 class="mt-0">{{$user->codigoPostal}}</h5>

        <h4>Total compras</h4>
        <h5 class="mt-0">{{$user->total}}</h5>










        <div class="container">
            <div class="row">

            </div>
        </div>

    </div>
</div>

@endforeach





@endsection
