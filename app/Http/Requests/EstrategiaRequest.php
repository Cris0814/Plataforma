<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstrategiaRequest extends FormRequest
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
            'tipo_estra' => 'required',
            'nom_estra' => 'required',
            
            
            'compete_evaluar' => 'required',
            'tipo_herra' => 'required',
            'nom_herra' => 'required',
            'valoracion_estra' => 'required',
        ];
    }
}
