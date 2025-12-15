<?php

namespace App\Http\Requests\Api\V1\Discount;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDiscountRequest extends FormRequest
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
            'amount' => 'required_without:discount|nullable|numeric|min:1',
            'discount' => 'required_without:amount|nullable|numeric|min:1|max:100',
            'start_date' => 'nullable|date|after_or_equal:today',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ];
    }

    public function messages(): array
    {
        return [
            'amount.required_without' => 'Vul een bedrag of een kortingspercentage in!',
            'amount.numeric' => 'Hoeveelheid moet een cijfer zijn!',
            'amount.min' => 'Hoeveelheid moet minimaal 1 zijn!',
            'discount.required_without' => 'Vul een bedrag of een kortingspercentage in!',
            'discount.numeric' => 'Korting moet een cijfer zijn!',
            'discount.min' => 'Korting moet minimaal 1 zijn!',
            'discount.max' => 'Korting mag maximaal 100 zijn!',
            'start_date.after_or_equal' => 'Startdatum moet dezelfde datum zijn of later liggen dan vandaag!',
            'start_date.date' => 'Startdatum moet een datum zijn!',
            'end_date.date' => 'Einddatum moet een datum zijn!',
            'end_date.after_or_equal' => 'Einddatum moet dezelfde datum of later liggen dan startdatum!',
        ];
    }
}
