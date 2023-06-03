<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'genre' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Lauks ":attribute" ir obligāts',
        ];
    }
    public function attributes()
    {
        return [
            'genre' => 'žanra nosaukums',
        ];
    }
}
