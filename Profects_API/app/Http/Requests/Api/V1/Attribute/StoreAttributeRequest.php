<?php

namespace App\Http\Requests\Api\V1\Attribute;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttributeRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:attributes,name',
            'value' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Naam is verplicht.',
            'name.string' => 'Naam moet een tekst zijn.',
            'name.max' => 'Naam mag niet langer zijn dan 255 tekens.',

            'value.required' => 'Waarde is verplicht.',
            'value.string' => 'Waarde moet een tekst zijn.',
            'value.max' => 'Waarde mag niet langer zijn dan 255 tekens.',
        ];
    }
}
