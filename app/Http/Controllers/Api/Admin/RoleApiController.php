<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Resources\Admin\RoleResource;

class RoleApiController extends Controller
{

    public function index()
    {
        return new RoleResource(Role::with('permissions')->get());
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Role $role)
    {
        return new RoleResource($role->load('permissions'));
    }


    public function update(Request $request, Role $role)
    {
        //
    }


    public function destroy(Role $role)
    {
        //
    }
}
