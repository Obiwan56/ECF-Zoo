<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HoraireRequest extends FormRequest
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
            'horaire1' => 'nullable|max:100',
            'horaire2' => 'nullable|max:100',
        ];
    }

    public function messages()
    {
        return [
            'horaire1.max' => ':max caractères maximum',
            'horaire2.max' => ':max caractères maximum',
        ];
    }
}
