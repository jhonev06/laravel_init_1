<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Order_ItenRequest extends FormRequest
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
            'seq'=> 'required|unique:',
            'orders_id',// foreign key
            'product_id',// foreign key
            'qtd'=> 'required',
            'value'=> 'required',
            'discount'=> 'required',
            'perc_discount'=> 'required'
        ];
    }
}
