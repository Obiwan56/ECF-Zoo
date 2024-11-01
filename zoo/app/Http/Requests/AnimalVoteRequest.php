<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimalVoteRequest extends FormRequest
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
            'name' => 'required|min:2|max:20',
            'race' => 'required|min:2|max:20',
            'photo' => 'required|mimes:jpg,jpeg,png,webp|max:10000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Veuillez entrer un nom',
            'name.min' => '2 caractères minimum',
            'name.max' => '20 caractères maximum',
            'race.required' => 'Veuillez entrer la race de l\'animal',
            'race.min' => '2 caractères minimum',
            'race.max' => '20 caractères maximum',


            'photo.required' => 'Une image est requise',
            'photo.mimes' => 'Format jpg, jpeg, png ou webp uniquement',
            'photo.max' => '10 mo maximum',
        ];
    }
}
