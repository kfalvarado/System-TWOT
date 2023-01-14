@extends('adminlte::page')

@section('title', 'Reporte de Personas')


@section('content_header')
    <h1>REPORTE DE PERSONAS</h1>
@stop

@section('content')
<a href="reportepersonas/crear" class="btn btn-success">Insertar reporte</a>
<table id="ejemplo" class="table table-striped" style="width:50%">
        <thead>
            <tr>
            <th>#</th>
                <th>COD_ROL</th>
                <th>ROL_PER</th>
                <th>COD_PERSONA</th>
                <th>COD_TELEFONO</th>
                <th>COR_DIR</th>
                <th>COD_COR</th>
                <th>COD_USR</th>
                
           
            </tr>
        </thead>
        <tbody>
   @foreach($reportepersonasArreglo as $reportepersonas)
   <tr>
                <td>{{$reportepersonas['COD_REPORTPERSONAS']}}</td>
                <td>{{$reportepersonas['COD_ROL']}}</td>
                <td>{{$reportepersonas['ROL_PER']}}</td>
                <td>{{$reportepersonas['COD_PERSONA']}}</td>
                <td>{{$reportepersonas['COD_TELEFONO']}}</td>
                <td>{{$reportepersonas['COD_DIR']}}</td>
                <td>{{$reportepersonas['COD_COR']}}</td>
                <td>{{$reportepersonas['COD_USR']}}</td>
        
            
            <td>
                 <a href="/reportepersonas/actualizalo/{{$reportepersonas['COD_REPORTPERSONAS']}}" class="btn btn-success">Editar</a>
               
            </td>

            <td>   
                <form action="{{url('reportepersonas/eliminar/'.$reportepersonas['COD_REPORTPERSONAS'])}}" method="post">       
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
  'Bienvenidos a Reporte de Personas',
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



