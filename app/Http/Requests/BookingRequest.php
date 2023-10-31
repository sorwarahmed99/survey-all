<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JustSteveKing\LaravelPostcodes\Facades\Postcode;
use JustSteveKing\LaravelPostcodes\Service\PostcodeService;

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
            'house_or_flat' => 'required|max:255',
            'street' => 'required|max:255',
            'postcode' => 'required|max:10',
            // 'postcode' => [
            //     'required',
            //     new Postcode(resolve(PostcodeService::class))
            // ],
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
            'postcode.required' => 'Postcode is required',
            // 'postcode.max' => 'Please enter a valid postcode',
        ];
    }
}
