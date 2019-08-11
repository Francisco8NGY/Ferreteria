@extends('layoutAdmin')


@section('content')

@foreach($users as $user)
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

            </div>
        </div>

    </div>
</div>

@endforeach



{{ $users->appends(Request::only('nombre'))->render() }}


@endsection