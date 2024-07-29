<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComRequest extends FormRequest
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
            'pseudo' => 'required|min:2|max:20',
            'commentaire' => 'required|min:2|max:10000',
        ];
    }

    public function messages()
    {
        return [
            'pseudo.required' => 'Veuillez entrer un nom',
            'pseudo.min' => '2 caractères minimum',
            'pseudo.max' => '20 caractères maximum',
            'commentaire.required' => 'Veuillez entrer un commentaire',
            'commentaire.min' => '2 caractères minimum',
            'commentaire.max' => '10 000 caractères maximum',
        ];
    }
}
