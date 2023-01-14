@extends('adminlte::page')

@section('title', 'FABRICANTE')


@section('content')
<h1>Registrar fabricante</h1>
<form action="{{url('fabricante/agregar')}}" method="post">
    {!! csrf_field() !!}
    <label class="form-label">
        PROVEEDORES
        <input type='text' name='PROVEEDORES' class="form-control" tabindex="1"></input> 
    </label>
    <label class="form-label">
        DIR EMPRESA
        <input type='text' name='DIR EMPRESA' class="form-control" tabindex="2"></input> 
    </label>
    <label class="form-label">
        TEL EMPRESA
        <input type='text' name='TEL EMPRESA' class="form-control" ></input> 
    </label>
    <label class="form-label">
    &quot; COR EMRPESA:&quot; 
        <input type='text' name='COR EMPRESA' class="form-control"></input> 
    </label>
    <label class="form-label">
        NOM PRODUCTO
        <input type='text' name='NOM PRODUCTO' class="form-control"></input> 
    </label>
    <label class="form-label">
        UNIDADES
        <input type='text' name='UNIDADES' class="form-control"></input> 
    </label>
    <label class="form-label">
        COS PRODUCTO
        <input type='text' name='COS PRODUCTO' class="form-control"></input> 
    </label>
    <a href="/fabricante" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Registrar </button>
</form>


@stop