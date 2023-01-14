@extends('adminlte::page')

@section('title', 'DISTRIBUCION PRODUCTO')


@section('content')
<h1>Registrar DISTRIBUCION PRODUCTO</h1>
<form action="{{url('distribucionproducto/agregar')}}" method="post">
    {!! csrf_field() !!}
    <label class="form-label">
        COD PERSONA
        <input type='text' name='COD_PERSONA' class="form-control" tabindex="1"></input> 
    </label>
    <label class="form-label">
        COD_PRODUCTO
        <input type='text' name='COD_PRODUCTO' class="form-control" tabindex="2"></input> 
    </label>
    <label class="form-label">
        COD_VENTA
        <input type='text' name='COD_VENTA' class="form-control" ></input> 
    </label>
    <label class="form-label">
    &quot; nombreDepart:&quot; 
        <input type='text' name='nombreDepart' class="form-control"></input> 
    </label>
    <label class="form-label">
        lugar entrega
        <input type='text' name='lugar_entrega' class="form-control" ></input> 
    </label>
    <label class="form-label">
        nombre
        <input type='text' name='nombre' class="form-control" ></input> 
    </label>
    <a href="/distribucionproducto" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Registrar </button>
</form>


@stop