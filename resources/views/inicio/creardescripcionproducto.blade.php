@extends('adminlte::page')

@section('title', 'DESCRIPCION PRODUCTO')


@section('content')
<h1>Registrar DESCRIPCION PRODUCTO</h1>
<form action="{{url('descripcionproducto/agregar')}}" method="post">
    {!! csrf_field() !!}
    <label class="form-label">
        COD_PRODUCTO
        <input type='number' name='COD_PRODUCTO' class="form-control" tabindex="1"></input> 
    </label>
    <label class="form-label">
        nombreproduct
        <input type='text' name='nombreproduct' class="form-control" tabindex="2"></input> 
    </label>
    <label class="form-label">
        precioproduct
        <input type='number' name='precioproduct' class="form-control" ></input> 
    </label>
    <label class="form-label">
    &quot; cantidadproduct:&quot; 
        <input type='number' name='cantidadproduct' class="form-control"></input> 
    </label>
    <label class="form-label">
        color
        <input type='text' name='color' class="form-control" ></input> 
    </label>
    <label class="form-label">
        tamano
        <input type='text' name='tamano' class="form-control" ></input> 
    </label>
    <a href="/descripcionproducto" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Registrar </button>
</form>


@stop