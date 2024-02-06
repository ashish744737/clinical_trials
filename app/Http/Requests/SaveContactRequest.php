<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveContactRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|min:3|string',
            'last_name' => 'required|min:3|string',
            'email' => 'required|email',
            'date_of_birth' => 'required|date|date_format:Y-m-d|before_or_equal:'.\Carbon\Carbon::now()->subYears(18)->format('Y-m-d'),
            'frequency' => 'required',
            'sex' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'date_of_birth.before_or_equal' => 'Participants must be over 18 years of age.',
            'date_of_birth.required' => 'Date of birth is required.',
            'sex.required' => 'Please select the sex.',
            'frequency.required' => 'Please select the frequency.',
        ];
    }
}
