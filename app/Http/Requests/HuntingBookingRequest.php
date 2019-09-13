<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HuntingBookingRequest extends FormRequest
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
            'check-in' => 'required',
            'check-out' => 'required',
            'number-guest' => 'required',
            'hunting-package' => 'required',
            'first-name' => 'required',
            'last-name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ];
    }
}
