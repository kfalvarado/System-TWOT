@extends('adminlte::page')

@section('title', 'Reporte de Compra')


@section('content')
<h1>Registrar Reporte</h1>
<form action="{{url('reportecompra/agregar')}}" method="post">
    {!! csrf_field() !!}
    <label class="form-label">
        COD_COMPRA
        <input type='text' name='COD_COMPRA' class="form-control" tabindex="1"></input> 
    </label>
    <label class="form-label">
        COD_INV
        <input type='text' name='COD_INV' class="form-control" tabindex="2"></input> 
    </label>
    <label class="form-label">
        CATEGORIAS
        <input type='text' name='CATEGORIAS' class="form-control" ></input> 
    </label>
    <label class="form-label">
        COD_PERSONA
        <input type='text' name='COD_PERSONA' class="form-control" ></input> 
    </label>
    <label class="form-label">
       NOM_PERSONA 
        <input type='text' name='NOM_PERSONA' class="form-control"></input> 
    </label>
    <label class="form-label">
        COD_VENTA
        <input type='text' name='COD_VENTA' class="form-control"></input> 
    </label>
    <label class="form-label">
        COD_PRODUCTO
        <input type='text' name='COD_PRODUCTO' class="form-control"></input> 
    </label>
    <label class="form-label">
        NOM_PRODUCTO
        <input type='text' name='NOM_PRODUCTO' class="form-control"></input> 
    </label>
    <a href="/reportecompra" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Registrar </button>
</form>


@stop