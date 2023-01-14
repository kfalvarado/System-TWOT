
@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>TWOT</h1>
@stop


@section('content')
<h1>Editar enproduccion</h1>
@foreach($enproduccionArreglo as $enproduccion)

<form action="{{url('enproduccion/actualizar')}}" method="post">
{!! csrf_field() !!}
    @method('PUT')

    <label class="form-label">
    COD EMPRESA
        <input type='text' name='COD EMPRESA' class="form-control" tabindex="1" value="{{$enproduccion['COD_EMPRESA']}}"></input> 
    </label>
    <label class="form-label">
    NOM PROD EN
        <input type='text' name='NOM PROD EN' class="form-control" tabindex="2" value="{{$enproduccion['NOM_PROD_EN']}}"></input> 
    </label>
    <label class="form-label">
    CAN PRODUCTO
        <input type='text' name='CAN PRODUCTO' class="form-control" value="{{$enproduccion['CAN_PRODUCTO']}}"></input> 
    </label>
    <label class="form-label">
    &quot; COS PROD EN:&quot; 
        <input type='text' name='COS PROD EN' class="form-control" value="{{$enproduccion['COS_PROD_EN']}}" ></input> 
    </label>
    
    <input name="enproduccion" type="hidden" value="{{$enproduccion['COD_ARTICULO']}}">
    <a href="/ventas" class="btn btn-secondary">Cancelar</a>
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

      

      