<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSparepartRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_sparepart'  => ['required','string'],
            'amount'        => ['required','integer'],
            'name'          => ['required','string'],
            'price'         => ['required'],
            'motors.*'      => ['integer'],
            'motors'        => ['required', 'array'],
        ];
    }
}
