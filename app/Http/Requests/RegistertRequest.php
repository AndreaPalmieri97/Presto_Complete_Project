<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistertRequest extends FormRequest
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
            'email' => 'required|email',
            'name' => 'required|min:3',
            'password' => 'required|min:5',
            'password_confirmation' => 'required',
        ];

    }

    public function messages(): array
{
    return [

        'email.required' => 'Il campo è richiesto',
        'min' => 'Il campo compilato è troppo corto',
    ];
}
}
