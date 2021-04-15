<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMotorRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'      => 'required|string',
            'type'      => 'required',
            'capasity'  =>  'required',
            'year'      => 'required'
        ];
    }
}
