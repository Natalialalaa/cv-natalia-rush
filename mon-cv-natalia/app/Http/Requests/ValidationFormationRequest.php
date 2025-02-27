<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationFormationRequest extends FormRequest
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
            'nom' => 'required|min:5',
            'etablissement' => 'required|min:5',
            'lieu' => 'required|min:5',
            'debut' => 'required',
            'fin' => 'required',
            'description'=>'required|min:10'
        ];
    }
}
