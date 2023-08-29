<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            // 'service_name' => 'required',
            'area_or_postcode' => 'required|max:10',
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|digits:11|numeric',
            'instruction' => 'max:2550',
        ];
    }

    public function messages(): array
    {
        return [
            'phone.digits' => 'Please enter a valid contact number',
        ];
    }
}
