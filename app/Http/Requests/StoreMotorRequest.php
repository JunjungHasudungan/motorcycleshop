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
            'name'              => 'required|string',
            'type'              => 'required',
            'category_id'       => ['required', 'integer'],
            'capasity_id'       => ['required','integer'],
            'created_by_year'   => 'required', 
        ];
    }
}
