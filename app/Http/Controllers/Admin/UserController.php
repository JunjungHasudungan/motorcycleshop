<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Request\StoreUserRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        dd($users);
    }


    public function create()
    {
        // abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('name', 'id'); // user role

        // return view('user.create', compact('roles'));
        dd($roles);
    }


    public function store(StoreUserRequest $request)
    {
        $user->create($request->all());

        return redirect()->route('user.index');
    }


    public function show(User $user)
    {
        
    }


    public function edit(User $user)
    {
        $user->load(['roles','biographies']);

        return view('user.show', compact('user'));
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
