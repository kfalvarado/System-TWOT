@extends('adminlte::page')

@section('title', 'Editar')


@section('content_header')
    <h1>TWOT</h1>
@stop

@section('content')

<h1>Editar descripcion producto</h1>
@foreach($descripcionproductoArreglo as $descripcionproducto) 
<form action="{{url('descripcionproducto/actualizardes')}}" method="post">
  
{!! csrf_field() !!}
 @method('PUT') 
 <label class="form-label">
        COD_PRODUCTO
        <input type='number' name='COD_PRODUCTO' class="form-control" tabindex="1" value="{{$descripcionproducto['COD_PRODUCTO']}}"></input> 
    </label>
    <label class="form-label">
        nombreproduct
        <input type='text' name='nombreproduct' class="form-control" tabindex="2" value="{{$descripcionproducto['nombreproduct']}}"></input> 
    </label>
    <label class="form-label">
        precioproduct
        <input type='number' name='precioproduct' class="form-control"value="{{$descripcionproducto['precioproduct']}}" ></input> 
    </label>
    <label class="form-label">
    &quot; cantidadproduct:&quot; 
        <input type='number' name='cantidadproduct' class="form-control" value="{{$descripcionproducto['cantidadproduct']}}"></input> 
    </label>
    <label class="form-label">
        color
        <input type='text' name='color' class="form-control"value="{{$descripcionproducto['color']}}" ></input> 
    </label>
    <label class="form-label">
        tamano
        <input type='text' name='tamano' class="form-control" value="{{$descripcionproducto['tamano']}}"></input> 
    </label>
  




    <input name="descripcionproducto" type="hidden" value="{{$descripcionproducto['cod_descproducto']}}">
    <a href="/descripcionproducto" class="btn btn-secondary">Cancelar</a>
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