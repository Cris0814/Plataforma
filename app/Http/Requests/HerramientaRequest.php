<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HerramientaRequest extends FormRequest
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
            'nom_herra' => 'required',
            'tipo_licencia' => 'required',
            'funciones' => 'required',
            'interaccion' => 'required',
            'diseño' => 'required',
            'usabilidad' => 'required',
            'documentacion' => 'required',
            'actualizaciones' => 'required',
            'porcentaje_aprove' => 'required',
            'porcentaje_aproba' => 'required',

            
        ];
    }
}