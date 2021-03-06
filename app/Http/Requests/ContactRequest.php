<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends Request
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
        // Add some basic validations to form
            'name' => 'required|min:3',
            'address' => 'required|min:3',
            'phone' => 'required|min:3',
            'email' => 'required|min:3',
        ];
    }
}
