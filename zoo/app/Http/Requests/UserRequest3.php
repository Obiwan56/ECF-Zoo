<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest3 extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Obtenir les règles de validation qui s'appliquent à la requête.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/|confirmed',

        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Le mot de passe est requis.',
            'password.min' => 'Le mot de passe doit faire au minimum 8 caractères.',
            'password.regex' => 'Le mot de passe doit contenir au moins 1 chiffre, 1 caractère spécial et une Majuscule.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas au mot de passe.',
            'password_confirmation.required' => 'La confirmation du mot de passe est requise.',
        ];
    }
}
