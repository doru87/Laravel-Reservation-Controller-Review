<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->tokenCan('reservations.make');
    }

    public function rules()
    {
        return [
            'office_id' => ['required', 'integer', 'exists:offices,id'],
            'start_date' => ['required', 'date', 'after:today'],
            'end_date' => ['required', 'date', 'after:start_date'],
        ];
    }

    public function messages()
    {
        return [
            'office_id.required' => 'Office ID is required.',
            'office_id.integer' => 'Office ID must be an integer.',
            'office_id.exists' => 'Selected office does not exist.',
            'start_date.required' => 'Start date is required.',
            'start_date.after' => 'Start date must be after today.',
            'end_date.required' => 'End date is required.',
            'end_date.after' => 'End date must be after the start date.',
        ];
    }
}
