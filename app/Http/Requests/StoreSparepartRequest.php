<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSparepartRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_sparepart'  => 'required',
            'name'          => 'required|string',
            'price'         => 'required',
            'motor_id'      => 'required'
        ];
    }
}
