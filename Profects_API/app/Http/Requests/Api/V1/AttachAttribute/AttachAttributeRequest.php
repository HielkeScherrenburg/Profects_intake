<?php

namespace App\Http\Requests\Api\V1\AttachAttribute;

use Illuminate\Foundation\Http\FormRequest;

class AttachAttributeRequest extends FormRequest
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
            'attribute_id' => 'required|integer|exists:attributes,id',
        ];
    }

    public function messages(): array
    {
        return [
            'attribute_id.required' => 'Attribute ID is verplicht.',
            'attribute_id.integer' => 'Attribute ID moet een integer zijn.',
            'attribute_id.exists' => 'Attribute ID bestaat niet!',
        ];
    }}
