<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RapportRequest extends FormRequest
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
            'date' => 'required|date',
            'detail' => 'required|min:2|max:10000',
            'animal_id' => 'required|exists:animals,id|unique:rapport_vetos,animal_id'
        ];
    }

    public function messages(): array
    {
        return [
            'detail.min' => 'Minimum :min caractères',
            'detail.max' => 'Maximum :max caractères',

            'date.required' => 'Veuillez entrer une date',
            'date.date' => 'Veuillez entrer une DATE valide',

            'animal_id.required' => 'Veuillez choisir un animal dans la liste',
            'animal_id.exists' => 'L\'animal sélectionné n\'existe pas',
            'animal_id.unique' => 'Un rapport existe déjà pour cet animal',
        ];
    }
}
