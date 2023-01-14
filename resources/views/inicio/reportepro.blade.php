@extends('adminlte::page')

@section('title', 'Reporte de Produccion')


@section('content_header')
    <h1>REPORTE DE PRODUCCIÓN</h1>
@stop

@section('content')
<a href="reporteproduccion/crear" class="btn btn-primary">Insertar reporte</a>
<table id="ejemplo" class="table table-striped" style="width:50%">
    <thead>
        <tr>
        <th># </th>
            <th >COD_ARTICULO</th>
            <th >NOM_PRODUCTO</th>
            <th >COD_EMPRESA</th>
            <th >PROVEEDORES</th>
            <th >COD_INV</th>
            <th >CATEGORIAS</th>
        </tr>
</thead>
<tbody>
    @foreach($reporteproduccionArreglo as $reporteproduccion) 
    <tr>
    
    <td>{{$reporteproduccion['COD_REPORTPRODUCCION']}}</td>
    <td>{{$reporteproduccion['COD_ARTICULO']}}</td>
       <td>{{$reporteproduccion['NOM_PRODUCTO']}}</td>
       <td>{{$reporteproduccion['COD_EMPRESA']}}</td>
       <td>{{$reporteproduccion['PROVEEDORES']}}</td>
       <td>{{$reporteproduccion['COD_INV']}}</td>
       <td>{{$reporteproduccion['CATEGORIAS']}}</td>
       <td>
           <a href="/reporteproduccion/actualizalo/{{$reporteproduccion['COD_REPORTPRODUCCION']}}" class="btn btn-success">Editar</a>
           
     </td>

      <td> 
           <form action="{{route('eliminarf.eliminarf',$reporteproduccion['COD_REPORTPRODUCCION'])}}" method="post">
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
  'Bienvenido a Reporte de Producción',
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



