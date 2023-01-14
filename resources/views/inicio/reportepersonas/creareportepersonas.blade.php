@extends('adminlte::page')

@section('title', 'Reporte de Personas')


@section('content')
<h1>Registrar Reporte</h1>
<form action="{{url('reportepersonas/agregar')}}" method="post">
    {!! csrf_field() !!}
    <label class="form-label">
        ROL_PER
        <input type='text' name='ROL_PERSONA' class="form-control" tabindex="1"></input> 
    </label>
    <label class="form-label">
        COD_PERSONA
        <input type='text' name='COD_PERSONA' class="form-control" tabindex="2"></input> 
    </label>
    <label class="form-label">
        NOM_PERSONA
        <input type='text' name='NOM_PERSONA' class="form-control" ></input> 
    </label>
    <label class="form-label">
    &quot; COD_TELEFONO:&quot; 
        <input type='text' name='COD_TELEFONO' class="form-control"></input> 
    </label>
    <label class="form-label">
        COD_DIR
        <input type='text' name='COD_DIRECCION' class="form-control"></input> 
    </label>
    <label class="form-label">
        COD_COR
        <input type='text' name='COD_CORREO' class="form-control"></input> 
    </label>
    <label class="form-label">
        COD_USR
        <input type='text' name='COD_USUARIO' class="form-control"></input> 
    </label>
    <a href="/reportepersonas" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Registrar </button>
</form>


@stop