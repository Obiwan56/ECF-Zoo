<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HabitatRequest extends FormRequest
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
            'nom' => 'required|min:2|max:50',
            'description' => 'required|min:2|max:10000',
            'img1' => 'required|mimes:jpg,jpeg,png,webp|max:10000',
            'img2' => 'nullable|mimes:jpg,jpeg,png,webp|max:10000',
            'img3' => 'nullable|mimes:jpg,jpeg,png,webp|max:10000',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Veuillez entrer un nom',
            'nom.min' => '2 caractères minimum',
            'nom.max' => '50 caractères maximum',
            'description.required' => "Veuillez entrer une description pour l'habitat",
            'description.min' => '2 caractères minimum',
            'description.max' => '10 000 caractères maximum',

            'img1.required' => 'Une image est requise',
            'img1.mimes' => 'Format jpg, jpeg, png ou webp uniquement',
            'img1.max' => '10 mo maximum',

            'img2.mimes' => 'Format jpg, jpeg, png ou webp uniquement',
            'img2.max' => '10 mo maximum',

            'img3.mimes' => 'Format jpg, jpeg, png ou webp uniquement',
            'img3.max' => '10 mo maximum',

        ];
    }
}
