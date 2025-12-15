<?php

namespace App\Http\Requests\Api\V1\Discount;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiscountRequest extends FormRequest
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
            'amount' => 'required_without:discount|numeric|min:1',
            'discount' => 'required_without:amount|numeric|min:1|max:100',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
        ];
    }

    public function messages(): array {
        return [
            'amount.required_without' => 'Vul een bedrag of een kortingspercentage in!',
            'amount.numeric' => 'Hoeveelheid moet een cijfer zijn!',
            'amount.min' => 'Hoeveelheid moet minimaal 1 zijn!',
            'discount.required_without' => 'Vul een bedrag of een kortingspercentage in!',
            'discount.numeric' => 'Hoeveelheid moet een cijfer zijn!',
            'discount.min' => 'Hoeveelheid moet minimaal 1 zijn!',
            'discount.max' => 'Hoeveelheid mag maar maximaal 100 zijn!',
            'start_date.required' => 'Start datum moet ingevuld zijn!',
            'start_date.date' => 'Startdatum moet een datum zijn!',
            'start_date.after_or_equal' => 'Startdatum moet vandaag of later zijn!',
            'end_date.required' => 'Eind datum moet ingevuld zijn!',
            'end_date.date' => 'Einddatum moet een datum zijn!',
            'end_date.after_or_equal' => 'Einddatum mag niet voor de startdatum liggen!',
        ];
    }
}
