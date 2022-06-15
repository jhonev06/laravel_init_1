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
            //'number' => 'required|',
            //'user_id', // foreign key
            'date' => 'required|',
            //'type' => 'required|',
            //'status' => 'required|',
            //'customer_id', // foreign key
            //'observation', // null
            //'type_payment_id' // foreign key

        ];
    }
}
