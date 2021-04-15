<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'registrasionDate' => 'required',
            'period' => 'required',
        ];
    }

    public function messages()
    {
        return[

        ];
    }

}
