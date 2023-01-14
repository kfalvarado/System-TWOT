<?php

namespace App\Http\Controllers\inicio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Session;

class reporteproduccionController extends Controller
{
    public function reporteproduccion(){
        $reporteproduccion = http::get('http://localhost:3000/reportePro');
        $reporteproduccionArreglo = $reporteproduccion->json();
        return view('inicio.reportepro', compact('reporteproduccionArreglo')); 
    }

    public function insertar(Request $request)
       {
           //agregarle comillass a los strings
           $COD_ARTICULO= $_POST['COD_ARTICULO'];
           $NOM_PRODUCTO= $_POST['NOM_PRODUCTO'];
           $COD_EMPRESA= $_POST['COD_EMPRESA'];
           $PROVEEDORES= $_POST['PROVEEDORES'];
           $COD_INV= $_POST['COD_INVENTARIO'];
           $CATEGORIA= $_POST['CATEGORIAS'];
           $NUEVOCOD_ARTICULO="'$COD_ARTICULO'";
           $NUEVONOM_PRODUCTO="'$NOM_PRODUCTO'";
           $NUEVOCOD_EMPRESA="'$COD_EMPRESA'";
           $NUEVOPROVEEDORES="'$PROVEEDORES'";
           $NUEVOCOD_INV="'$COD_INV'";
           $NUEVOCATEGORIA="'$CATEGORIA'";

           //metodo post
           $operacion=1; 
       $insertarreportepersonas = Http::post('http://localhost:3000/reportePro/nuevaReportPro',[ 

        "COD_ARTICULO" => $request->reporteproduccion,
        "NOM_PRODUCTO"=> $NUEVONOM_PRODUCTO,
        "COD_EMPRESA"=> $NUEVOCOD_EMPRESA,
        "PROVEEDORES"=> $NUEVOPROVEEDORES,
        "COD_INV"=> $NUEVOCOD_INV,
        "CATEGORIAS"=> $NUEVOCATEGORIA,
        "OPERACION" =>$operacion,
        "FILA"=>$operacion     
                

            
        ]); 
      
           //return response()->json($request,200);
           Session::flash('message','Se registro correctamente');
           return redirect('/reporteproduccion');

           return response()->json($request,200);
       }
       public function crear(){
        return view('inicio.reporteproduccion.creareporteproduccion');
       }
   
   /*public function enproduccion(){
          $enproduccion = Http::get('http://localhost:3000/enproduccion');
      $enproduccionArreglo = $enproduccion->json();
      return view('inicio.enproduccion', compact('enproduccionArreglo'));

      


   }*/
   public function datosparaactualizar($id){  //leer un registro para modificar y editarlo
    $reporteproduccion = Http::get('http://localhost:3000/reportePro/'.$id);  
    $reporteproduccionArreglo =  json_decode($reporteproduccion,true);
    return $reporteproduccionArreglo;
    // return view('inicio.reporteproduccion.editreporteproduccion', compact('reporteproduccionArreglo'));
     
    //echo $id;
   }



   public function actualizar(Request $request){
    
  //agregarle comillass a los strings
  $COD_ARTICULO= $_POST['COD_ARTICULO'];
  $NOM_PRODUCTO= $_POST['NOM_PRODUCTO'];
  $COD_EMPRESA= $_POST['COD_EMPRESA'];
  $PROVEEDORES= $_POST['PROVEEDORES'];
  $COD_INV= $_POST['COD_INV'];
  $CATEGORIA= $_POST['CATEGORIA'];
  $NUEVOCOD_ARTICULO="'$COD_ARTICULO'";
  $NUEVONOM_PRODUCTO="'$NOM_PRODUCTO'";
  $NUEVOCOD_EMPRESA="'$COD_EMPRESA'";
  $NUEVOPROVEEDORES="'$PROVEEDORES'";
  $NUEVOCOD_INV="'$COD_INV'";
  $NUEVOCATEGORIA="'$CATEGORIA'";
  
  $operacion=2;

    $reportepersonas = Http::put('http://localhost:3000/reportePro/actualizarReportPro/'.$request->reporteproduccion,[ 
        "COD_ARTICULO"=> $NUEVOCOD_ARTICULO,
        "NOM_PRODUCTO"=> $NUEVONOM_PRODUCTO,
        "COD_EMPRESA"=> $NUEVOCOD_EMPRESA,
        "PROVEEDORES"=> $NUEVOPROVEEDORES,
        "COD_INV"=> $NUEVOCOD_INV,
        "CATEGORIAS"=> $NUEVOCATEGORIA,
       "OPERACION" =>$operacion,
        "FILA"=>$request->reportepersonas
    
]); 

return redirect('/reporteproduccion');
//return $request;
   }

   public function eliminar($id){ //eliminar un registro
    //echo $id;
    
    $reporteproduccion = Http::delete('http://localhost:3000/reportePro/borrarReportPro/'.$id);
    return redirect('/reporteproduccion');
    
}



   
}
