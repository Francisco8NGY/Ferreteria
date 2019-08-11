@extends('layouts.app')


@section('content')
<h1>Editar</h1>
<link rel="stylesheet" href="/css/codo.css">
<div class="">
    <div class="container " id="d1">
        <div class="row justify-content-center" id="d2">
            <div class="col-md-8" id="d3">
                <div class="card alert alert-primary" id="d4">
                    <form method="POST" action="EditarUsuario">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>id</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{ Auth::user()->id }}">
                        </div>
                        <div class="form-group">
                            <label>N</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ Auth::user()->apellido }}">
                        </div>
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" value="{{ Auth::user()->usuario }}">
                        </div>
                        <div class="form-group">
                            <label>Correo ELectronico</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ Auth::user()->telefono }}">
                        </div>
                        <div class="form-group">
                            <label>Celular</label>
                            <input type="text" class="form-control" id="celular" name="celular" value="{{ Auth::user()->celular }}">
                        </div>
                        <div class="form-group">
                            <label>Domicilio</label>
                            <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{ Auth::user()->domicilio }}">
                        </div>
                        <div class="form-group">
                            <label>Codigo Postal</label>
                            <input type="text" class="form-control" id="codigoPostal" name="codigoPostal" value="{{ Auth::user()->codigoPostal }}">
                        </div>
                        <button href="" type="submit" class="btn btn-primary">Guardar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>




@endsection