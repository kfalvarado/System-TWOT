@extends('adminlte::page')

@section('title', 'Editar')


@section('content_header')
    <h1>TWOT</h1>
@stop

@section('content')

<h1>Editar distribucion</h1>
@foreach((array)$distribucionproductoArreglo as $distribucionproducto) 
<form action="{{url('distribucionproducto/actualizardis')}}" method="post">
  
{!! csrf_field() !!}
 @method('PUT') 
    <label class="form-label">
        COD_PERSONA
        <input type='text' name='COD_PERSONA' class="form-control" tabindex="1" value="{{$distribucionproducto['COD_PERSONA']}}"></input> 
    </label>
    <label class="form-label">
        COD_PRODUCTO
        <input type='text' name='COD_PRODUCTO' class="form-control" tabindex="2" value="{{$distribucionproducto['COD_PRODUCTO']}}"></input> 
    </label>
    <label class="form-label">
    COD_VENTA
        <input type='text' name='COD_VENTA' class="form-control" value="{{$distribucionproducto['COD_VENTA']}}"></input> 
    </label>
    <label class="form-label">
    nombreDepart
        <input type='text' name='nombreDepart' class="form-control" value="{{$distribucionproducto['nombreDepart']}}"></input> 
    </label>
    <label class="form-label">
    lugar_entrega
        <input type='text' name='lugar_entrega' class="form-control" value="{{$distribucionproducto['lugar_entrega']}}"></input> 
    </label>
    <label class="form-label">
    nombre
        <input type='text' name='nombre' class="form-control" value="{{$distribucionproducto['nombre']}}"></input> 
    </label>
  




    <input name="distribucionproducto" type="hidden" value="{{$distribucionproducto['cod_departamento']}}">
    <a href="/distribucionproducto" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-success">Actualizar </button>
</form>
@endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
  <script>
      Swal.fire(
  'COMENZAMOS!',
  'bienvenidos',
  'success'
)
  </script>
@stop