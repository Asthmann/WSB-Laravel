<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name'    => ['string', 'max:255'],
            'surname' => ['string', 'max:255'],
            'phone'   => ['string', 'max:255'],
            'street'  => ['string', 'max:255'],
            'city'    => ['string', 'max:255']
        ];
    }
}
