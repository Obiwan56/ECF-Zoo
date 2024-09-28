<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'quantite' => 'required|integer',
            'observation' => 'nullable|min:2|max:500',
            'date' => 'required|date',
            'animal_id' => 'required',
            'nourriture_id' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'quantite.required' => 'Veuillez entrer une valeur',
            'quantite.integer' => 'Veuillez entrer une valeur numérique (en grammage)',

            'observation.min' => 'Minimum :min carractères',
            'observation.max' => 'Maximun :max carractères',

            'date.required' => 'Veuillez entrer une date',
            'date.date' => 'Veuillez entrer une DATE',

            'animal_id.required' => 'Veuillez choisir un animal dans la liste',
            'nourriture_id.required' => 'Veuillez choisir un aliment dans la liste',
        ];
    }
}
