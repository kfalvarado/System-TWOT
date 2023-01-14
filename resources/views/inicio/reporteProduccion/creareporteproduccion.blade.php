@extends('adminlte::page')

@section('title', 'Reporte de Produccion')


@section('content')
<h1>Registrar Reporte</h1>
<form action="{{url('reporteproduccion/agregar')}}" method="post">
    {!! csrf_field() !!}
    <label class="form-label">
        COD_ARTICULO
        <input type='text' name='COD_ARTICULO' class="form-control" tabindex="1"></input> 
    </label>
    <label class="form-label">
        NOM_PRODUCTO
        <input type='text' name='NOM_PRODUCTO' class="form-control" tabindex="2"></input> 
    </label>
    <label class="form-label">
        COD_EMPRESA
        <input type='text' name='COD_EMPRESA' class="form-control" ></input> 
    </label>
    <label class="form-label">
        PROVEEDORES
        <input type='text' name='PROVEEDORES' class="form-control" ></input> 
    </label>
    <label class="form-label">
        COD_INVENTARIO
        <input type='text' name='COD_INVENTARIO' class="form-control" ></input> 
    </label>
    <label class="form-label">
        CATEGORIAS
        <input type='text' name='CATEGORIAS' class="form-control" ></input> 
    </label>
    <a href="/reporteproduccion" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Registrar </button>
</form>


@stop