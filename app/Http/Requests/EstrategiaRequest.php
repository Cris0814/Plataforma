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
            'nom_estra' => 'required',
            'estra_apren_interactivo' => 'required',    
            'estra_apren_colabo' => 'required',
            'estra_autoapren' => 'required',
            'estra_didactica' => 'required',
            'compete_evaluar' => 'required',
            'estra_evaluacion' => 'required',
            'valoracion_estra' => 'required'
        ];
    }
}
