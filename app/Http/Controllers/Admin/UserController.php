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

    public function index(Request $request)
    {
        // abort_if(Gate::denies('user_access', Response::HTTP_FORBIDDEN, '403 Forbidden'));

        $users = User::when($request->role, function($query) use($request) {
            $query->whereHas('roles', function($query) use($request){
                $query->whereId($request->role);
            });
        })->get();

        // $users = User::active('ASC')->get();

        // return view('admin.users.index', compact('users'));
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

        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }


    public function show(User $user)
    {
    // abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

     $user->load('roles', 'biographies');
     
     return view('admin.users.show', compact('user'));
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
