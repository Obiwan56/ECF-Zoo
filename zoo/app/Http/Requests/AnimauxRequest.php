<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimauxRequest extends FormRequest
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
            'race' => 'required|min:2|max:20',
            'prenom' => 'required|min:2|max:20',
            'etat' => 'required|min:2|max:10000',
            'img1' => 'required|mimes:jpg,jpeg,png,webp|max:10000',
            'img2' => 'nullable|mimes:jpg,jpeg,png,webp|max:10000',
            'img3' => 'nullable|mimes:jpg,jpeg,png,webp|max:10000',
            'img4' => 'nullable|mimes:jpg,jpeg,png,webp|max:10000',
            'img5' => 'nullable|mimes:jpg,jpeg,png,webp|max:10000',
        ];
    }

    public function messages()
    {
        return [
            'race.required' => 'Veuillez entrer une race',
            'race.min' => '2 caractères minimum',
            'race.max' => '20 caractères maximum',
            'prenom.required' => "Veuillez entrer un prenom pour l'animal",
            'prenom.min' => '2 caractères minimum',
            'prenom.max' => '10 000 caractères maximum',
            'etat.required' => "Veuillez entrer un rapport sur l'animal",
            'etat.min' => '2 caractères minimum',
            'etat.max' => '10 000 caractères maximum',

            'img1.required' => 'Une image est requise',
            'img1.mimes' => 'Format jpg, jpeg, png ou webp uniquement',
            'img1.max' => '10 mo maximum',

            'img2.mimes' => 'Format jpg, jpeg, png ou webp uniquement',
            'img2.max' => '10 mo maximum',

            'img3.mimes' => 'Format jpg, jpeg, png ou webp uniquement',
            'img3.max' => '10 mo maximum',

            'img4.mimes' => 'Format jpg, jpeg, png ou webp uniquement',
            'img4.max' => '10 mo maximum',

            'img5.mimes' => 'Format jpg, jpeg, png ou webp uniquement',
            'img5.max' => '10 mo maximum',


        ];
    }
}
