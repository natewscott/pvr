<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BirdHuntRequest extends FormRequest
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
            "name" => 'required',
            "email" => 'required',
            "checkin" => 'required|date',
            "checkout" => 'required|date|after:checkin',
            "guests" => 'required|min1',
        ];
    }
}
