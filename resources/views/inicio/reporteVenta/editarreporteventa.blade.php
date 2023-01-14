@extends('adminlte::page')

@section('title', 'Editar')


@section('content_header')
    <h1>TWOT</h1>
@stop

@section('content')

<h1>Editar Reporte</h1>
@foreach((array)$reporteventaArreglo as $reporteventa) 
<form action="{{url('reporteventa/actualizar')}}" method="post">
  
{!! csrf_field() !!}
 @method('PUT')     
 <input type='hidden' name='COD_VENTA' class="form-control" tabindex="1" value="{{$reporteventa['COD_VENTA']}}"></input> 
    <label class="form-label">
        COD_INV
        <input type='text' name='COD_INV' class="form-control" tabindex="2" value="{{$reporteventa['COD_INV']}}"></input> 
    </label>
    <label class="form-label">
        CATEGORIAS
        <input type='text' name='CATEGORIAS' class="form-control" tabindex="3" value="{{$reporteventa['CATEGORIAS']}}"></input> 
    </label>
    <label class="form-label">
        COD_PERSONA
        <input type='text' name='COD_PERSONA' class="form-control" value="{{$reporteventa['COD_PERSONA']}}"></input> 
    </label>
    <label class="form-label">
        NOM_PERSONA
        <input type='text' name='NOM_PERSONA' class="form-control" value="{{$reporteventa['NOM_PERSONA']}}"></input> 
    </label>
    <label class="form-label">
        COD_PRODUCTO
        <input type='text' name='COD_PRODUCTO' class="form-control" value="{{$reporteventa['COD_PRODUCTO']}}"></input> 
    </label>
    <label class="form-label">
        NOM_PRODUCTO
        <input type='text' name='NOM_PRODUCTO' class="form-control" value="{{$reporteventa['NOM_PRODUCTO']}}"></input> 
    </label>




    <input name="reporteventa" type="hidden" value="{{$reporteventa['COD_REPORTVENTA']}}">
    <a href="/reporteventa" class="btn btn-secondary">Cancelar</a>
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