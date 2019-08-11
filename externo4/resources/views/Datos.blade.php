@extends('layout')

@section('content')
@foreach($DatosProducto as $DatosProductos)
<script type="text/javascript">
  function enviar(destino) {
    document.formulario.action = destino;
    document.formulario.submit();
  }
</script>
<div class="media alert alert-secondary">

  <img src="{{$DatosProductos->imagen}}" class="align-self-start mr-3" height="500" width="500">
  <div class="media-body">
    <form name="formulario" method="POST">
      {{ method_field('PUT') }}
      {{ csrf_field() }}
      <input type="Hidden" id="id" name="id" value="{{$DatosProductos->id}}">
      <input type="Hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
      <input type="Hidden" id="precio" name="precio" value="{{$DatosProductos->precioPublico}}">
      <input type="Hidden" id="existencia" name="existencia" value="{{$DatosProductos->existencia}}">
      <h1 class="mt-0 text-success">{{$DatosProductos->nombre}}</h1>
      <h2>Marca</h2>
      <h4 class="text-muted">{{$DatosProductos->marca}}</h4>
      <h2>Modelo</h2>
      <h4 class="text-muted">{{$DatosProductos->modelo}}</h4>
      <h2>Precio</h2>
      <h4 class="text-muted">{{$DatosProductos->precioPublico}}</h4>
      <h2>Disponibles</h2>
      <h4 class="text-muted">{{$DatosProductos->existencia}}</h4>
      <br>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Cantidad:</label>
        </div>
        <select id="unidad" name="unidad" class="custom-select" id="inputGroupSelect01" width="10">
          <option value="1" selected>1 Unidad</option>
          <option value="2">2 Unidades</option>
          <option value="3">3 Unidades</option>
          <option value="4">4 Unidades</option>
          <option value="5">5 Unidades</option>
          <option value="6">6 Unidades</option>
        </select>
      </div>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-sm-">
            <button type="button" class="btn btn-success" onclick="enviar('VentaRealizada')" >Comprar Ahora</button>

            <button type="button" class="btn btn-success" onclick="enviar('Carrito')">Agregar al Carrito</button>
    </form>
  </div>

</div>
</div>

</div>

</div>
@endforeach
@endsection