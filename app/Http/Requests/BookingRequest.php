<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => ['required', 'min:6'],
            'reserved_date' => ['required', 'date', 'after:today'],
            'reserved_time' => ['required'],
            'message' => ['required', 'min:20']
        ];
    }

    public function attributes()
    {
        return [
            'full_name' => 'Full Name',
            'reserved_date' => 'Date',
            'reserved_time' => 'Time',
            'message' => 'Message',
        ];
    }
}
