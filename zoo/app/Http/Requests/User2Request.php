<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class User2Request extends FormRequest
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
            'name' => 'required|min:2|max:50',
            'prenom' => 'required|min:2|max:50',
            'email' => 'required',
            'password' => 'nullable|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            'role' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Veuillez entrer un nom',
            'name.min' => 'Minimun 2 caractères',
            'name.max' => 'Maximum 50 caractères',

            'prenom.required' => 'Veuillez entrer un prénom',
            'prenom.min' => 'Minimun 2 caractères',
            'prenom.max' => 'Maximum 50 caractères',

            'email.required' => 'Veuillez entrer une adresse email',

            'password.min' => 'Le mot de passe doit faire au minimum 8 caractères',
            'password.regex' => 'Le mot de passe doit contenir au moins 1 chiffre et 1 caractère spécial et une majuscule',
        ];
    }
}
