<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarventaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "COD_INV"      => "required",
            "COD_PERSONA"  => "required",
            "COD_PRODUCTO" =>"required",
            "COD_PRODUCTO" =>"required",
            "NOM_PRODUCTO" =>"required",
            "CANT_PRODUCTO"=>"required",
            "PREC_UNITARIO"=>"required",
            "TOTAL_BRUTO"   =>"required",
            "DESTINO_VENTA" =>"required",
            "FEC_VENTA"     =>"required",
            "IMPUE_TOTAL"   =>"required",
            "TOTAL_VENTA"   =>"required",
            
        ];
    }
}
