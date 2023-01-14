@extends('adminlte::page')

@section('title', 'Editar')


@section('content_header')
    <h1>TWOT</h1>
@stop

@section('content')

<h1>Editar fabricante</h1>
@foreach((array)$fabricanteArreglo as $fabricante) 
<form action="{{url('fabricante/actualizar')}}" method="post">
  
{!! csrf_field() !!}
 @method('PUT') 
    <label class="form-label">
        PROVEEDORES
        <input type='text' name='PROVEEDORES' class="form-control" tabindex="1" value="{{$fabricante['PROVEEDORES']}}"></input> 
    </label>
    <label class="form-label">
        DIR_EMPRESA
        <input type='text' name='DIR EMPRESA' class="form-control" tabindex="2" value="{{$fabricante['DIR_EMPRESA']}}"></input> 
    </label>
    <label class="form-label">
        TEL_EMPRESA
        <input type='text' name='TEL EMPRESA' class="form-control" value="{{$fabricante['TEL_EMPRESA']}}"></input> 
    </label>
    <label class="form-label">
        COR_EMPRESA
        <input type='text' name='COR EMPRESA' class="form-control" value="{{$fabricante['COR_EMPRESA']}}"></input> 
    </label>
    <label class="form-label">
        NOM_PRODUCTO
        <input type='text' name='NOM PRODUCTO' class="form-control" value="{{$fabricante['NOM_PRODUCTO']}}"></input> 
    </label>
    <label class="form-label">
        UNIDADES
        <input type='text' name='UNIDADES' class="form-control" value="{{$fabricante['UNIDADES']}}"></input> 
    </label>
    <label class="form-label">
        COS_PRODUCTO
        <input type='text' name='COS PRODUCTO' class="form-control" value="{{$fabricante['COS_PRODUCTO']}}"></input> 
    </label>




    <input name="fabricante" type="hidden" value="{{$fabricante['COD_EMPRESA']}}">
    <a href="/fabricante" class="btn btn-secondary">Cancelar</a>
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