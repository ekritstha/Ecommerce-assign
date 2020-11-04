<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required',
            'contact' => 'required|digits:10',
            'address' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Enter Your Name',
            'contact.required' => 'Enter valid phone number',
            'address.required' => 'Enter address',
        ];
    }
}
