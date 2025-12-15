<?php

namespace App\Http\Requests\Api\V1\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string|unique:products,name',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|integer|exists:categories,id',
        ];
    }

    public function messages(): array {
        return [
            'name.required' => 'Naam van het product is verplicht.',
            'name.string' => 'Product moet een string zijn.',
            'name.unique' => 'Voeg een niet bestaand product toe.',
            'price.required' => 'Prijs is verplicht.',
            'price.numeric' => 'Prijs moet een nummer zijn.',
            'category_id.required' => 'Categorie ID is verplicht.',
            'category_id.integer' => 'Categorie ID moet een nummer zijn.',
            'category_id.exists' => 'Categorie ID bestaat niet.',
        ];
    }
}
