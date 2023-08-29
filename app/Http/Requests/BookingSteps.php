<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingSteps extends FormRequest
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
            // job_type
            // survey_type
            // valuation_reason
            // specific_reason_for_help_to_buy
            // specific_reason_for_shared_ownership
            // other_reason
            // valuation_other_reason
            // val_for_lending_purpose
            'job_type' => 'required',
            'survey_type' => 'required_if:job_type,RICS Home Survey',

            'val_reason' => 'required_if:job_type,RICS Home Valuation',
            
            'val_for_lending_purpose' => 'required_if:val_reason,Other reason',
        ];
    }

    public function messages(): array
    {
        return [
            'job_type.required' => 'Which of the following services do you require?',
            'survey_type.required_if' => 'Please confirm which RICS survey do you require?',

            'val_reason.required_if' => 'Please confirm the reason for the RICS Valuation?',
            
            'val_for_lending_purpose.required_if' => 'Is the valuation required for lending purposes?',
        ];
    }
}
