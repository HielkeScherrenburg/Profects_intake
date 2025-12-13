<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => 'required|string|unique:users',
            'password' => 'required|string|min:6',
        ];
    }

    public function messages(): array {
        return [
            'username.required' => 'Gebruikersnaam is verplicht.',
            'username.string' => 'Gebruikersnaam moet een string zijn.',
            'username.unique' => 'Deze gebruikersnaam is al in gebruik.',
            'password.required' => 'Wachtwoord is verplicht.',
            'password.string' => 'Wachtwoord moet een string zijn.',
            'password.min' => 'Wachtwoord moet minimaal 6 karakters lang zijn.',
        ];
    }
}
