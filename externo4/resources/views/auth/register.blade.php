@extends('layoutLoginRegistro')

@section('content')
<!-- Formulario para Registrarte-->
<link rel="stylesheet" href="/css/logRegis.css">
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >
            <div class="card alert alert-primary" >
                <div class="card-header">{{ __('Completa tus Datos') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                          {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" placeholder="Ingresa tu nombre" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                            <label for="apellido" class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                <input id="apellido" placeholder="Ingresa tus Apellidos" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autofocus>

                                @if ($errors->has('apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usuario') ? ' has-error' : '' }}">
                            <label for="usuario" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input id="usuario" placeholder="Ingresa un Usuario" type="text" class="form-control" name="usuario" value="{{ old('usuario') }}" required autofocus>

                                @if ($errors->has('usuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Ingresa tu Correo Electronico" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">Telefono</label>

                            <div class="col-md-6">
                                <input id="telefono" placeholder="Ingresa tu Telefono" type="telefono" class="form-control" name="telefono" value="{{ old('telefono') }}" required>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
                            <label for="celular" class="col-md-4 control-label">Celular</label>

                            <div class="col-md-6">
                                <input id="celular" placeholder="Ingresa tu Numero Celular" type="telefono" class="form-control" name="celular" value="{{ old('celular') }}" required>

                                @if ($errors->has('celular'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('domicilio') ? ' has-error' : '' }}">
                              <label for="domicilio" class="col-md-4 control-label">Domicilio</label>

                              <div class="col-md-6">
                                  <input id="domicilio" placeholder="Ingresa tu Domicilio" type="text" class="form-control" name="domicilio" value="{{ old('domicilio') }}" required>

                                  @if ($errors->has('domicilio'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('domicilio') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                        <div class="form-group{{ $errors->has('codigoPostal') ? ' has-error' : '' }}">
                            <label for="codigoPostal" class="col-md-4 control-label">Codigo postal</label>

                            <div class="col-md-6">
                                <input id="codigoPostal" placeholder="Ingresa tu Codigo Postal" type="text" class="form-control" name="codigoPostal" value="{{ old('codigoPostal') }}" required>

                                @if ($errors->has('codigoPostal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codigoPostal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Ingresa una Contraseña" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirma tu Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Ingresa tu Contraseña" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
