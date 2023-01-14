@extends('adminlte::page')

@section('title', 'Reporte de Venta')

@section('content_header')
    <h1>REPORTE DE VENTA</h1>
@stop
@section('content')
<a href="reporteventa/crear" class="btn btn-primary">Crear Reporte</a>
<table id="ejemplo" class="table table-striped" style="width:50%">
    <thead>
        <tr>
        <th >#</th>
            <th >COD_VENTA</th>
            <th >COD_INV</th>
            <th >CATEGORIAS</th>
            <th >COD_PERSONA</th>
            <th >NOM_PERSONA</th>
            <th >COD_VENTA</th>
            <th >COD_PRODUCTO</th>
            <th >NOM_PRODUCTO</th>
        </tr>
</thead>
<tbody>
    @foreach($reporteventaArreglo as $reporteventa) 
    <tr>
    <td>{{$reporteventa['COD_REPORTVENTA']}}</td>
    <td>{{$reporteventa['COD_VENTA']}}</td>
       <td>{{$reporteventa['COD_INV']}}</td>
       <td>{{$reporteventa['CATEGORIAS']}}</td>
       <td>{{$reporteventa['COD_PERSONA']}}</td>
       <td>{{$reporteventa['NOM_PERSONA']}}</td>
       <td>{{$reporteventa['COD_VENTA']}}</td>
       <td>{{$reporteventa['COD_PRODUCTO']}}</td>
       <td>{{$reporteventa['NOM_PRODUCTO']}}</td>
       <td>
           <a href="/reporteventa/actualizalo/{{$reporteventa['COD_REPORTVENTA']}}" class="btn btn-success">Editar</a>
           
           <form action="{{route('eliminare.eliminare',$reporteventa['COD_REPORTVENTA'])}}" method="post">
               @csrf @method('DELETE')
           <button  class="btn btn-danger">Eliminar</button>
           </form>
       </td>
       </tr>
    @endforeach
</tbody>
</table>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel= https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css>

@stop

@section('js')
  <script>
      Swal.fire(
  'COMENZAMOS!',
  'Binevenido a Reporte de Venta',
  'success'
)
  </script>

<script src=https://code.jquery.com/jquery-3.5.1.js></script>
<script src=https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js></script>
<script src=https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js></script>

<script>
$(document).ready(function() {
    $('#ejemplo').DataTable({
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
              
            

        }


    });
              
} );

</script>


@stop



