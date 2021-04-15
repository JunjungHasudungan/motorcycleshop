<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Http\Requests\StorePermissionRequest;
use App\Htpp\Requests\UpdatePermissionRequest;
use App\Http\Resources\Admin\PermissionResource;

class PermissionApiController extends Controller
{

    public function index()
    {
        return new PermissionResource(Permission::all());
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Permission $permission)
    {
        return new PermissionResource($permission);
    }


    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        //
    }

    
    public function destroy(Permission $permission)
    {
        //
    }
}
