<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à effectuer cette demande.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Obtenir les règles de validation qui s'appliquent à la demande.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:255',
            'prenom' => 'required|string|min:2|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|min:8|max:15',
            'message' => 'required|min:4|max:10000'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Veuillez entrer un nom',
            'name.min' => 'Le nom doit comporter au moins :min caractères.',
            'name.max' => 'Le nom ne peut pas dépasser :max caractères.',

            'prenom.required' => 'Veuillez entrer un prénom',
            'prenom.min' => 'Le prénom doit comporter au moins :min caractères.',
            'prenom.max' => 'Le prénom ne peut pas dépasser :max caractères.',

            'email.required' => 'Veuillez entrer un Email',
            'email.email' => 'Veuillez entrer un Email valide',

            'phone.required' => 'Veuillez entrer un numéro de téléphone',
            'phone.string' => 'Veuillez entrer un numéro valide',
            'phone.min' => 'Le numéro de téléphone doit comporter au moins :min chiffres.',
            'phone.max' => 'Le numéro de téléphone ne peut pas dépasser :max chiffres.',

            'message.required' => 'Veuillez saisir un message',
            'message.min' => 'Le message doit comporter au moins :min caractères.',
            'message.max' => 'Le message ne peut pas dépasser :max caractères.',
        ];
    }
}
