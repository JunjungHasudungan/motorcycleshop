<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Gate;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class StoreUserRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, 'Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'      => 'required',
            'email'     => ['required', 'unique:users'],
            'password'  => 'required',
            'roles.*'   => 'integer',
            'roles'     => ['required', 'array']

        ];
    }
}
