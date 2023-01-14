<?php

namespace App\Http\Controllers\inicio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Session;

class reporteventaController extends Controller
{
    public function reporteventa(){
        $reporteventa = http::get('http://localhost:3000/reporteV');
        $reporteventaArreglo = $reporteventa->json();
        return view('inicio.reporteven', compact('reporteventaArreglo')); 
    }

    public function insertar(Request $request)
       {
           //agregarle comillass a los strings
           $COD_VENTA= $_POST['COD_VENTA'];
           $COD_INV= $_POST['COD_INV'];
           $CATEGORIAS= $_POST['CATEGORIAS'];
           $COD_PERSONA= $_POST['COD_PERSONA'];
           $NOM_PERSONA= $_POST['NOM_PERSONA'];
           
           $COD_PRODUCTO= $_POST['COD_PRODUCTO'];
           $NOM_PRODUCTO= $_POST['NOM_PRODUCTO'];
           $NUEVOCOD_VENTA="'$COD_VENTA'";
           $NUEVOCOD_INV="'$COD_INV'";
           $NUEVOCATEGORIAS="'$CATEGORIAS'";
           $NUEVOCOD_PERSONA="'$COD_PERSONA'";
           $NUEVONOM_PERSONA="'$NOM_PERSONA'";
           
           $NUEVOCOD_PRODUCTO="'$COD_PRODUCTO'";
           $NUEVONOM_PRODUCTO="'$NOM_PRODUCTO'";

           //metodo post
           $operacion=1;   
       $insertarreporteventa = Http::post('http://localhost:3000/reporteV/nuevaReportV',[ 
        "COD_VENTA" => $request->reporteventa,       
        "COD_INV"=> $NUEVOCOD_INV,
                "CATEGORIAS"=> $NUEVOCATEGORIAS,
                "COD_PERSONA"=> $NUEVOCOD_PERSONA,
                "NOM_PERSONA"=> $NUEVONOM_PERSONA,
                
                "COD_PRODUCTO"=> $NUEVOCOD_PRODUCTO,
                "NOM_PRODUCTO"=> $NUEVONOM_PRODUCTO,
                "OPERACION" =>$operacion,
                "FILA"=>$operacion
        
                

            
        ]); 
      
           
           Session::flash('message','Se registro correctamente');
           return redirect('/reporteventa');    
            

       return response()->json($request,200);  
     }
       public function crear(){
        return view('inicio.reporteventa.creareporteventa');
       }
   
   /*public function enproduccion(){
          $enproduccion = Http::get('http://localhost:3000/enproduccion');
      $enproduccionArreglo = $enproduccion->json();
      return view('inicio.enproduccion', compact('enproduccionArreglo'));

      


   }*/
   public function datosparaactualizar($id){  //leer un registro para modificar y editarlo
 
   $reporteventa = Http::get('http://localhost:3000/reporteV/'.$id);  
   $reporteventaArreglo =  json_decode($reporteventa,true);
    return $reporteventaArreglo;
    // return view('inicio.reportepersonas.editarreportepersonas', compact('reportepersonasArreglo'));
     
    //echo $id;
   }



   public function actualizar(Request $request){
    
  //agregarle comillass a los strings
  $COD_VENTA= $_POST['COD_VENTA'];
  $COD_INV= $_POST['COD_INV'];
  $CATEGORIAS= $_POST['CATEGORIAS'];
  $COD_PERSONA= $_POST['COD_PERSONA'];
  $NOM_PERSONA= $_POST['NOM_PERSONA'];
 
  $COD_PRODUCTO= $_POST['COD_PRODUCTO'];
  $NOM_PRODUCTO= $_POST['NOM_PRODUCTO'];
  $NUEVOCOD_VENTA="'$COD_VENTA'";
  $NUEVOCOD_INV="'$COD_INV'";
  $NUEVOCATEGORIAS="'$CATEGORIAS'";
  $NUEVOCOD_PERSONA="'$COD_PERSONA'";
  $NUEVONOM_PERSONA="'$NOM_PERSONA'";
  
  $NUEVOCOD_PRODUCTO="'$COD_PRODUCTO'";
  $NUEVONOM_PRODUCTO="'$NOM_PRODUCTO'";
    

  $operacion=2;
  
    $reporteventa = Http::put('http://localhost:3000/reporteV/actualizarReportV/'.$request->reporteventa,[ 
        "COD_VENTA" => $request->reporteventa,       
        "COD_INV"=> $NUEVOCOD_INV,
         "CATEGORIAS"=> $NUEVOCATEGORIAS,
         "COD_PERSONA"=> $NUEVOCOD_PERSONA,
         "NOM_PERSONA"=> $NUEVONOM_PERSONA,
         
         "COD_PRODUCTO"=> $NUEVOCOD_PRODUCTO,
         "NOM_PRODUCTO"=> $NUEVONOM_PRODUCTO,
        "OPERACION" =>$operacion,
        "FILA"=>$request->reporteventa

        
]); 
return redirect('/reporteventa');
//return $request;
   }

   public function eliminar($id){ //eliminar un registro
    //echo $id;
    
    $reporteventa = Http::delete('http://localhost:3000/reporteV/borrarReportV/'.$id);
    return redirect('/reporteventa');
    
}

}
