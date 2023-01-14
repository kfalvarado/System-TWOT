@extends('adminlte::page')

@section('title', 'Editar')


@section('content_header')
    <h1>TWOT</h1>
@stop

@section('content')

<h1>Editar Reporte</h1>
@foreach((array)$reportepersonasArreglo as $reportepersonas) 
<form action="{{url('reportepersonas/actualizar')}}" method="post">
  
{!! csrf_field() !!}
 @method('PUT') 
    
 <input type='hidden' name='COD_ROL' class="form-control" tabindex="1" value="{{$reportepersonas['COD_ROL']}}"></input> 
    <label class="form-label">
        ROL_PER
        <input type='text' name='ROL_PERSONA' class="form-control" tabindex="1" value="{{$reportepersonas['ROL_PER']}}"></input> 
    </label>
    <label class="form-label">
        COD_PERSONA
        <input type='text' name='COD_PERSONA' class="form-control" tabindex="2" value="{{$reportepersonas['COD_PERSONA']}}"></input> 
    </label>
    <label class="form-label">
        NOM_PERSONA
        <input type='text' name='NOM_PERSONA' class="form-control" value="{{$reportepersonas['NOM_PERSONA']}}"></input> 
    </label>
    <label class="form-label">
        COD_TELEFONO
        <input type='text' name='COD_TELEFONO' class="form-control" value="{{$reportepersonas['COD_TELEFONO']}}"></input> 
    </label>
    <label class="form-label">
        COD_DIR
        <input type='text' name='COD_DIRECCION' class="form-control" value="{{$reportepersonas['COD_DIR']}}"></input> 
    </label>
    <label class="form-label">
        COD_COR
        <input type='text' name='COD_CORREO' class="form-control" value="{{$reportepersonas['COD_COR']}}"></input> 
    </label>
    <label class="form-label">
        COD_USR
        <input type='text' name='COD_USUARIO' class="form-control" value="{{$reportepersonas['COD_USR']}}"></input> 
    </label>




    <input name="reportepersonas" type="hidden" value="{{$reportepersonas['COD_REPORTPERSONA']}}">
    <a href="/reportepersonas" class="btn btn-secondary">Cancelar</a>
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