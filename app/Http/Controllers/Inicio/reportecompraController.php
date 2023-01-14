<?php

namespace App\Http\Controllers\inicio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Session;

class reportecompraController extends Controller
{
    public function reportecompra(){
        $reportecompra = http::get('http://localhost:3000/reporteC');
        $reportecompraArreglo = $reportecompra->json();
        return view('inicio.reportecom', compact('reportecompraArreglo'));
}
public function insertar(Request $request)
       {
           //agregarle comillass a los strings
           $COD_COMPRA= $_POST['COD_COMPRA'];
           $COD_INV= $_POST['COD_INV'];
           $CATEGORIAS= $_POST['CATEGORIAS'];
           $COD_PERSONA= $_POST['COD_PERSONA'];
           $NOM_PERSONA= $_POST['NOM_PERSONA'];
           $COD_VENTA= $_POST['COD_VENTA'];
           $COD_PRODUCTO= $_POST['COD_PRODUCTO'];
           $NOM_PRODUCTO= $_POST['NOM_PRODUCTO'];
           $NUEVOCOD_COMPRA="'$COD_COMPRA'";
           $NUEVOCOD_INV="'$COD_INV'";
           $NUEVOCATEGORIAS="'$CATEGORIAS'";
           $NUEVOCOD_PERSONA="'$COD_PERSONA'";
           $NUEVONOM_PERSONA="'$NOM_PERSONA'";
           $NUEVOCOD_VENTA =  "' $COD_VENTA'";
           $NUEVOCOD_PRODUCTO="'$COD_PRODUCTO'";
           $NUEVONOM_PRODUCTO="'$NOM_PRODUCTO'";

           //metodo post
           $operacion=1;   
       $insertarreportecompra = Http::post('http://localhost:3000/reporteC/nuevaReportC',[ 
        "COD_COMPRA" => $request->reportecompra,       
        "COD_INV"=> $NUEVOCOD_INV,
                "CATEGORIAS"=> $NUEVOCATEGORIAS,
                "COD_PERSONA"=> $NUEVOCOD_PERSONA,
                "NOM_PERSONA"=> $NUEVONOM_PERSONA,
                "COD_VENTA"=> $NUEVOCOD_VENTA,
                "COD_PRODUCTO"=> $NUEVOCOD_PRODUCTO,
                "NOM_PRODUCTO"=> $NUEVONOM_PRODUCTO,
                "OPERACION" =>$operacion,
                "FILA"=>$operacion
        
                

            
        ]); 
      
           
           Session::flash('message','Se registro correctamente');
           return redirect('/reportecompra');    
            

       return response()->json($request,200);  
     }
       public function crear(){
        return view('inicio.reportecompra.creareportecompra');
       }
   
   /*public function enproduccion(){
          $enproduccion = Http::get('http://localhost:3000/enproduccion');
      $enproduccionArreglo = $enproduccion->json();
      return view('inicio.enproduccion', compact('enproduccionArreglo'));

      


   }*/
   public function datosparaactualizar($id){  //leer un registro para modificar y editarlo
 
   $reportecompra = Http::get('http://localhost:3000/reporteC/'.$id);  
   $reportecompraArreglo =  json_decode($reportecompra,true);
    return $reportecompraArreglo;
    // return view('inicio.reportepersonas.editarreportepersonas', compact('reportepersonasArreglo'));
     
    //echo $id;
   }



   public function actualizar(Request $request){
    
  //agregarle comillass a los strings
  $COD_COMPRA= $_POST['COD_COMPRA'];
  $COD_INV= $_POST['COD_INV'];
  $CATEGORIAS= $_POST['CATEGORIAS'];
  $COD_PERSONA= $_POST['COD_PERSONA'];
  $NOM_PERSONA= $_POST['NOM_PERSONA'];
  $COD_VENTA= $_POST['COD_VENTA'];
  $COD_PRODUCTO= $_POST['COD_PRODUCTO'];
  $NOM_PRODUCTO= $_POST['NOM_PRODUCTO'];
  $NUEVOCOD_COMPRA="'$COD_COMPRA'";
  $NUEVOCOD_INV="'$COD_INV'";
  $NUEVOCATEGORIAS="'$CATEGORIAS'";
  $NUEVOCOD_PERSONA="'$COD_PERSONA'";
  $NUEVONOM_PERSONA="'$NOM_PERSONA'";
  $NUEVOCOD_VENTA =  "' $COD_VENTA'";
  $NUEVOCOD_PRODUCTO="'$COD_PRODUCTO'";
  $NUEVONOM_PRODUCTO="'$NOM_PRODUCTO'";
    

  $operacion=2;
  
    $reportecompra = Http::put('http://localhost:3000/reporteC/actualizarReportC/'.$request->reportecompra,[ 
        "COD_COMPRA" => $request->reportecompra,       
        "COD_INV"=> $NUEVOCOD_INV,
         "CATEGORIAS"=> $NUEVOCATEGORIAS,
         "COD_PERSONA"=> $NUEVOCOD_PERSONA,
         "NOM_PERSONA"=> $NUEVONOM_PERSONA,
         "COD_VENTA"=> $NUEVOCOD_VENTA,
         "COD_PRODUCTO"=> $NUEVOCOD_PRODUCTO,
         "NOM_PRODUCTO"=> $NUEVONOM_PRODUCTO,
        "OPERACION" =>$operacion,
        "FILA"=>$request->reportecompra

        
]); 
return redirect('/reportecompra');
//return $request;
   }

   public function eliminar($id){ //eliminar un registro
    //echo $id;
    
    $reportecompra = Http::delete('http://localhost:3000/reporteC/borrarReportC/'.$id);
    return redirect('/reportecompra');
    
}

}