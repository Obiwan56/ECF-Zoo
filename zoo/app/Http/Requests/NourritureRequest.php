<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NourritureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Autorisation par défaut (à ajuster selon vos besoins d'autorisation)
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'aliment' => 'required|string|min:2|max:50',
            'animal_id' => 'required'
            // 'date' => ['required', 'date'], // La date doit être requise et être une date valide
            // 'nourriture' => ['required', 'string', 'min:2', 'max:255'], // La nourriture doit être une chaîne avec une longueur valide
            // 'quantite' => ['required', 'integer', 'min:1', 'max:10000'], // La quantité doit être un entier avec une plage valide
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'aliment.required' => 'Veuillez entrer un nom pour la nourriture',
            'aliment.string' => 'Seulement des lettres',
            'aliment.min' => 'Au moins :min caractères',
            'aliment.max' => 'Au maximum :max caractères',

            'animal_id' => 'Veuillez choisir un animal dans la liste'
            // 'date.required' => 'Veuillez entrer une date.',
            // 'date.date' => 'Le champ date doit être une date valide.',

            // 'nourriture.required' => 'Veuillez entrer le type de nourriture.',
            // 'nourriture.string' => 'Le champ nourriture doit être une chaîne de caractères.',
            // 'nourriture.min' => 'Le champ nourriture doit avoir au moins :min caractères.',
            // 'nourriture.max' => 'Le champ nourriture ne doit pas dépasser :max caractères.',

            // 'quantite.required' => 'Veuillez entrer la quantité.',
            // 'quantite.integer' => 'Le champ quantité doit être un nombre entier.',
            // 'quantite.min' => 'La quantité doit être d\'au moins :min.',
            // 'quantite.max' => 'La quantité ne doit pas dépasser :max.',
        ];
    }
}
