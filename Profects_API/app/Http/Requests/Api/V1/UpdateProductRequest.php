<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'sometimes|string|unique:products,name,' . $this->route('id'),
            'price' => 'sometimes|numeric|min:0',
            'category_id' => 'sometimes|integer|exists:categories,id',
        ];
    }

    public function messages(): array {
        return [
            'name.string' => 'Productnaam moet een string zijn.',
            'name.unique' => 'Deze productnaam bestaat al.',
            'price.numeric' => 'Prijs moet een nummer zijn.',
            'price.min' => 'Prijs mag niet negatief zijn.',
            'category_id.integer' => 'Categorie ID moet een nummer zijn.',
            'category_id.exists' => 'Categorie bestaat niet.',
        ];
    }
}
