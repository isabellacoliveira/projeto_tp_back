<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BibliotecaRequest extends FormRequest
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
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'sinopse' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'titulo.required' => 'Title is required',
            'autor.required' => 'Autor is required',
            'sinopse.required' => 'Sinopse is required',
            'genero.required' => 'Gênero is required',
        ];
    }
}
