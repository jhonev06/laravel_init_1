<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomertRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required',
            'document' => 'required',
            'email' => 'required',
            'postal_code' => 'required',
            'address' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'number' => 'required',
            'state' => 'required',



        ];
    }
}
