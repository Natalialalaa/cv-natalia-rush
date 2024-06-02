<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationCompetenceRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nom' => 'required|min:5',
            'description'=>'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => "Le nom est obligatoire",
            'nom.min' => "Le nom doit comporter 5 caractères minimum",
            'description.required' => "Le descriptif est obligatoire",
            'description.min' => "Le descriptif doit comporter au moins 10 caractères",
        ];
    }
}
