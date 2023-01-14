@extends('adminlte::page')

@section('title', 'Reporte de Compra')

@section('content_header')
    <h1>REPORTE DE COMPRA</h1>
@stop
@section('content')
<a href="reportecompra/crear" class="btn btn-primary">Crear Reporte de Compra</a>
<table id="ejemplo" class="table table-striped" style="width:50%">
    <thead>
        <tr>
        <th >#</th>
            <th >COD_COMPRA</th>
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
    @foreach($reportecompraArreglo as $reportecompra) 
    <tr>
    <td>{{$reportecompra['COD_REPORTCOMPRA']}}</td>
    <td>{{$reportecompra['COD_COMPRA']}}</td>
       <td>{{$reportecompra['COD_INV']}}</td>
       <td>{{$reportecompra['CATEGORIAS']}}</td>
       <td>{{$reportecompra['COD_PERSONA']}}</td>
       <td>{{$reportecompra['NOM_PERSONA']}}</td>
       <td>{{$reportecompra['COD_VENTA']}}</td>
       <td>{{$reportecompra['COD_PRODUCTO']}}</td>
       <td>{{$reportecompra['NOM_PRODUCTO']}}</td>
       <td>
           <a href="/reportecompra/actualizalo/{{$reportecompra['COD_REPORTCOMPRA']}}" class="btn btn-success">Editar</a>
           
           <form action="{{route('eliminarz.eliminarz',$reportecompra['COD_REPORTCOMPRA'])}}" method="post">
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
  'Bienvenido a Reporte de Compra',
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



