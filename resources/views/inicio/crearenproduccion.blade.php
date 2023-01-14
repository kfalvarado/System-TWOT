@extends('adminlte::page')

@section('title', 'ENPRODUCCION')


@section('content')
<h1>Registrar PRODUCCION</h1>
<form action="{{url('enproduccion/agregar')}}" method="post">
    {!! csrf_field() !!}
    <label class="form-label">
        COD EMPRESA
        <input type='text' name='COD EMPRESA' class="form-control" tabindex="1"></input> 
    </label>
    <label class="form-label">
        NOM PORD EN
        <input type='text' name='NOM PROD EN' class="form-control" tabindex="2"></input> 
    </label>
    <label class="form-label">
        CAN PRODUCTO
        <input type='text' name='CAN PRODUCTO' class="form-control" ></input> 
    </label>
    <label class="form-label">
    &quot; COS PROD EN:&quot; 
        <input type='text' name='COS PROD EN' class="form-control"></input> 
    </label>
    <a href="/enproduccion" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Registrar </button>
</form>


@stop