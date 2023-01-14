<?php

namespace App\Http\Controllers\inicio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Session;

class reportepersonasController extends Controller
{
    

    public function reportepersonas(){

      
        $reportepersonas = Http::get('http://localhost:3000/reporteP');
        $reportepersonasArreglo = $reportepersonas->json();
        return view('inicio.reporteper', compact('reportepersonasArreglo'));
  
}

public function insertar(Request $request)
       {
           //agregarle comillass a los strings
           $ROL_PER= $_POST['ROL_PERSONA'];
           $COD_PERSONA= $_POST['COD_PERSONA'];
           $NOM_PERSONA= $_POST['NOM_PERSONA'];
           $COD_TELEFONO= $_POST['COD_TELEFONO'];
           $COD_DIR= $_POST['COD_DIRECCION'];
           $COD_COR= $_POST['COD_CORREO'];
           $COD_USR= $_POST['COD_USUARIO'];
           $NUEVOROL_PER="'$ROL_PER'";
           $NUEVOCOD_PERSONA="'$COD_PERSONA'";
           $NUEVONOM_PERSONA="'$NOM_PERSONA'";
           $NUEVOCOD_TELEFONO="'$COD_TELEFONO'";
           $NUEVOCOD_DIR="'$COD_DIR'";
           $NUEVOCOD_COR="'$COD_COR'";
           $NUEVOCOD_USR="'$COD_USR'";

           //metodo post
           $operacion=1;   
       $insertarreportepersonas = Http::post('http://localhost:3000/reporteP/NuevaReportP',[ 
                "COD_ROL" => $request->reportepersonas,       
                "ROL_PER"=> $NUEVOROL_PER,
                "COD_PERSONA"=> $NUEVOCOD_PERSONA,
                "NOM_PERSONA"=> $NUEVONOM_PERSONA,
                "COD_TELEFONO"=> $NUEVOCOD_TELEFONO,
                "COD_DIR"=> $NUEVOCOD_DIR,
                "COD_COR"=> $NUEVOCOD_COR,
                "COD_USR"=> $NUEVOCOD_USR,
                "OPERACION" =>$operacion,
                "FILA"=>$operacion
        
                

            
        ]); 
      
           
           Session::flash('message','Se registro correctamente');
           return redirect('/reportepersonas');    
            

       return response()->json($request,200);  
     }
       public function crear(){
        return view('inicio.reportepersonas.creareportepersonas');
       }
   
   /*public function enproduccion(){
          $enproduccion = Http::get('http://localhost:3000/enproduccion');
      $enproduccionArreglo = $enproduccion->json();
      return view('inicio.enproduccion', compact('enproduccionArreglo'));

      


   }*/
   public function datosparaactualizar($id){  //leer un registro para modificar y editarlo
 
   $reportepersonas = Http::get('http://localhost:3000/reporteP/leerP/'.$id);  
   $reportepersonasArreglo =  json_decode($reportepersonas,true);
    return $reportepersonasArreglo;
    // return view('inicio.reportepersonas.editarreportepersonas', compact('reportepersonasArreglo'));
     
    //echo $id;
   }



   public function actualizar(Request $request){
    
  //agregarle comillass a los strings
  $ROL_PER= $_POST['ROL_PER'];
  $COD_PERSONA= $_POST['COD_PERSONA'];
  $NOM_PERSONA= $_POST['NOM_PERSONA'];
  $COD_TELEFONO= $_POST['COD_TELEFONO'];
  $COD_DIR= $_POST['COD_DIR'];
  $COD_COR= $_POST['COD_COR'];
  $COD_USR= $_POST['COD_USR'];
  $NUEVOROL_PER="'$ROL_PER'";
  $NUEVOCOD_PERSONA="'$COD_PERSONA'";
  $NUEVONOM_PERSONA="'$NOM_PERSONA'";
  $NUEVOCOD_TELEFONO="'$COD_TELEFONO'";
  $NUEVOCOD_DIR="'$COD_DIR'";
  $NUEVOCOD_COR="'$COD_COR'";
  $NUEVOCOD_USR="'$COD_USR'";
    

  $operacion=2;
  
    $reportepersonas = Http::put('http://localhost:3000/reporteP/actualizarReportP/'.$request->reportepersonas,[ 
        "COD_ROL" => $request->reportepersonas,
        "ROL_PER"=> $NUEVOROL_PER,
        "COD_PERSONA"=> $NUEVOCOD_PERSONA,
        "NOM_PERSONA"=> $NUEVONOM_PERSONA,
        "COD_TELEFONO"=> $NUEVOCOD_TELEFONO,
        "COD_DIR"=> $NUEVOCOD_DIR,
        "COD_COR"=> $NUEVOCOD_COR,
        "COD_USR"=> $NUEVOCOD_USR,
        "OPERACION" =>$operacion,
        "FILA"=>$request->reportepersonas

        
]); 
return redirect('/reportepersonas');
//return $request;
   }

   public function eliminar($id){ //eliminar un registro
    //echo $id;
    
    $reportepersonas = Http::delete('http://localhost:3000/reporteP/borrarReportP/'.$id);
    return redirect('/reportepersonas');
    
}



   
}
