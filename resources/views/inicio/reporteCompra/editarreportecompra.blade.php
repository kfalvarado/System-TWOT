@extends('adminlte::page')

@section('title', 'Editar')


@section('content_header')
    <h1>TWOT</h1>
@stop

@section('content')

<h1>Editar Reporte</h1>
@foreach((array)$reportecompraArreglo as $reportecompra) 
<form action="{{url('reportecompra/actualizar')}}" method="post">
  
{!! csrf_field() !!}
 @method('PUT')     
 <input type='hidden' name='COD_COMPRA' class="form-control" tabindex="1" value="{{$reportecompra['COD_COMPRA']}}"></input> 
    <label class="form-label">
        COD_INV
        <input type='text' name='COD_INV' class="form-control" tabindex="2" value="{{$reportecompra['COD_INV']}}"></input> 
    </label>
    <label class="form-label">
        CATEGORIAS
        <input type='text' name='CATEGORIAS' class="form-control" tabindex="3" value="{{$reportecompra['CATEGORIAS']}}"></input> 
    </label>
    <label class="form-label">
        COD_PERSONA
        <input type='text' name='COD_PERSONA' class="form-control" value="{{$reportecompra['COD_PERSONA']}}"></input> 
    </label>
    <label class="form-label">
        NOM_PERSONA
        <input type='text' name='NOM_PERSONA' class="form-control" value="{{$reportecompra['NOM_PERSONA']}}"></input> 
    </label>
    <label class="form-label">
        COD_VENTA
        <input type='text' name='COD_VENTA' class="form-control" value="{{$reportecompra['COD_VENTA']}}"></input> 
    </label>
    <label class="form-label">
        COD_PRODUCTO
        <input type='text' name='COD_PRODUCTO' class="form-control" value="{{$reportecompra['COD_PRODUCTO']}}"></input> 
    </label>
    <label class="form-label">
        NOM_PRODUCTO
        <input type='text' name='NOM_PRODUCTO' class="form-control" value="{{$reportecompra['NOM_PRODUCTO']}}"></input> 
    </label>




    <input name="reportecompra" type="hidden" value="{{$reportecompra['COD_REPORTCOMPRA']}}">
    <a href="/reportecompra" class="btn btn-secondary">Cancelar</a>
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