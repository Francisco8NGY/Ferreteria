@extends('layout')

@section('content')
<h4>Busquedas relacionadas con: {{$nombre}}</h4>
<br>
@foreach($users as $user)
<form method="POST" action="Datos">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <input type="Hidden" id="id" name="id" value="{{$user->id}}">
    <div class="media alert alert-secondary">
        <img src="{{$user->imagen}}" class="align-self-start mr-3" height="300" width="300">
        <div class="media-body">

            <h5 class="mt-0">{{$user->nombre}}</h5>
            <h4>Marca:</h4>
            <h6 class="text-dark">{{$user->marca}}</h6>
            <h4>Modelo</h4>
            <h6 class="text-dark">{{$user->modelo}}</h6>
            <h4>Precio</h4>
            <h6 class="text-dark">{{$user->precioPublico}}</h6>
            <div class="container">
                <div class="row">
                    <div class="col-sm-">
                        @if(Route::has('login'))
                        @auth
                        <button type="submit" class="btn btn-success">Ver Producto</button>
                        @else
                        
                        <div class="alert alert-warning" role="alert">
                            <h4 class="alert-heading">¿Quieres comprar alguno de nuestros productos?</h4>
                            <p>Para obtener nuestros beneficios Ingresa con tu cuenta o Registrate</p>
                          </div>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
@endforeach



{{ $users->appends(Request::only('nombre'))->render() }}


@endsection