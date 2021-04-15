<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Resources\Admin\UserResource;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class UserApiController extends Controller
{

    public function index()
    {
        // abort_if(Gate::denies('user_acsees'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UserResource(User::all());
    }


    public function store(Request $request)
    {
        //
    }


    public function show(User $user)
    {
        // abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden);
    
        return new UserResource($user->load(['roles', 'biographies']));
    }


    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy(User $user)
    {
        //
    }
}
