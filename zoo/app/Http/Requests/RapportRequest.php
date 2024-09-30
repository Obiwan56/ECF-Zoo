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
            'animal_id' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'detail.min' => 'Minimum :min carractères',
            'detail.max' => 'Maximun :max carractères',

            'date.required' => 'Veuillez entrer une date',
            'date.date' => 'Veuillez entrer une DATE',

            'animal_id.required' => 'Veuillez choisir un animal dans la liste',
        ];
    }
}
