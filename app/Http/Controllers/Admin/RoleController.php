<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateRoleRequest;
use App\Http\Requests\MassDestroyRoleRequest;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->orderBy('name', 'asc')->get();

        return view('admin.roles.index', compact('roles'));
        // dd($roles);
    }

    public function create()
    {
        $permissions = Permission::all()->pluck('nama', 'id');
        
        return view('admin.roles.create', compact('permissions'));

    }


    public function store(Request $request)
    {
        //
    }


    public function show(Role $role)
    {
        $role->load('permissions');

        return view('admin.roles.show', compact('role'));
    }


    public function edit(Role $role)
    {
        $permissions = Permission::all()->pluck('title', 'id');
        $role->load('permissions');

        return view('admin.roles.edit', compact('role', 'permissions'));
    }


    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update($request->all());
        $role->permissions()->sync($request->input('permissions', []));

        return redirect()->route('admin.roles.index');
    }


    public function destroy(Role $role)
    {
     $role->delete();
     
     return back();
    }

    public function massDestroy(MassDestroyRoleRequest $request)
    {
        Role::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
