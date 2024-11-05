<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimalVoteRequest2 extends FormRequest
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
            'photo' => 'nullable|mimes:jpg,jpeg,png,webp|max:10000',
            'votes' => 'integer|between:0,100000'
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

            'votes.between' => 'Le nombre de votes doit être compris entre 0 et 100000.',
            'votes.integer' => 'seul un chifrre est accepté',

            'photo.mimes' => 'Format jpg, jpeg, png ou webp uniquement',
            'photo.max' => '10 mo maximum',
        ];
    }
}
