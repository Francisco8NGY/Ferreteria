@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="/css/codo.css">
<div class="">
    <div class="container " id="d1">
        <div class="row justify-content-center" id="d2">
            <div class="col-md-8" id="d3">
                <div class="card alert alert-primary" id="d4">
                    <form>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="Nombre" value="{{ Auth::user()->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" id="Apellidos" value="{{ Auth::user()->apellido }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" class="form-control" id="Usuario" value="{{ Auth::user()->usuario }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Correo ELectronico</label>
                            <input type="text" class="form-control" id="Correo" value="{{ Auth::user()->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" id="Telefono" value="{{ Auth::user()->telefono }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Celular</label>
                            <input type="text" class="form-control" id="Celular" value="{{ Auth::user()->celular }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Domicilio</label>
                            <input type="text" class="form-control" id="Domicilio" value="{{ Auth::user()->domicilio }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Codigo Postal</label>
                            <input type="text" class="form-control" id="CodigoPostal" value="{{ Auth::user()->codigoPostal }}" disabled>
                        </div>
                        <a href="{{ url('Editar2') }}"><button href="" type="button" class="btn btn-primary">EditarUsuari</button></a>
                        
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>





@endsection