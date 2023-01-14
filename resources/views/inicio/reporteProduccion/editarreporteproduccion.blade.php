@extends('adminlte::page')

@section('title', 'Editar')


@section('content_header')
    <h1>TWOT</h1>
@stop

@section('content')

<h1>Editar Reporte</h1>
@foreach((array)$reporteproduccionArreglo as $reporteproduccion) 
<form action="{{url('reporteproduccion/actualizar')}}" method="post">
  
{!! csrf_field() !!}
 @method('PUT') 
 <input type='hidden' name='COD_ARTICULO' class="form-control" tabindex="1" value="{{$reporteperoduccion['COD_ARTICULO']}}"></input> 
    <label class="form-label">
        NOM_PRODUCTO
        <input type='text' name='NOM_PRODUCTO' class="form-control" tabindex="2" value="{{$reporteproduccion['NOM_PRODUCTO']}}"></input> 
    </label>
    <label class="form-label">
        COD_EMPRESA
        <input type='text' name='COD_EMPRESA' class="form-control" value="{{$reporteproduccion['COD_EMPRESA']}}"></input> 
    </label>
    <label class="form-label">
        PROVEEDORES
        <input type='text' name='PROVEEDORES' class="form-control" value="{{$reporteproduccion['PROVEEDORES']}}"></input> 
    </label><label class="form-label">
        COD_INV
        <input type='text' name='COD_INV' class="form-control" value="{{$reporteproduccion['COD_INV']}}"></input> 
    </label>
    <label class="form-label">
        CATEGORIAS
        <input type='text' name='CATEGORIAS' class="form-control" value="{{$reporteproduccion['CATEGORIAS']}}"></input> 
    </label>
    




    <input name="reporteproduccion" type="hidden" value="{{$reporteproduccion['COD_ARTICULO']}}">
    <a href="/reporteproduccion" class="btn btn-secondary">Cancelar</a>
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