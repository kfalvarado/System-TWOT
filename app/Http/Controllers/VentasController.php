<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\GuardarventaRequest;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

//GUARDAR DATOS EN LA TABLA
     //public function store(GuardarventaRequest $request)
    //{
       /* $venta = new Venta();
        $venta -> COD_INV = $request->COD_INV;
        $venta -> COD_PERSONA = $request->COD_PERSONA;
        $venta -> NOM_PRODUCTO = $request->NOM_PRODUCTO;
        $venta -> CANT_PRODUCTO= $request->CANT_PRODUCTO;
        $venta -> PREC_UNITARIO = $request->PREC_UNITARIO;
        $venta -> TOTAL_BRUTO = $request->TOTAL_BRUTO;
        $venta -> DESTINO_VENTA = $request->DESTINO_VENTA;
        $venta -> IMPUE_TOTAL = $request->IMPUE_TOTAL;
        $venta -> TOTAL_VENTA = $request->TOTAL_VENTA;

        $venta->save();*/
       
        
    //}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)   
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //quizas se deba quitar esto de aqui $id
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)// quizas se deba cambiar esto antes estaba asi $id
    {
       
    }
}
