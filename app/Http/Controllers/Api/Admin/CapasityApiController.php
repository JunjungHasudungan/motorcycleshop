<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Capasity;
use App\Http\Resources\Admin\CapasityResource;
use App\Http\Requests\StoreCapasityRequest;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class CapasityApiController extends Controller
{

    public function index()
    {
        // abort_if(Gate::denies('capasity_accsess'), Response::HTTP_FORBIDDEN, 'Forbidden');

        return new CapasityResource(Capasity::all());
    }

    public function store(StoreCapasityRequest $request)
    {
        $capasity = Capasity::create($request->all());
       
        return (new CapasityResource($capasity))
        ->response()
        ->setStatusCode(Response::HTTP_CREATED);
    }


    public function show(Capasity $capasity)
    {
        return new CapasityResource($capasity);
    }


    public function update(Request $request, Capasity $capasity)
    {
        //
    }


    public function destroy(Capasity $capasity)
    {
        //
    }
}
