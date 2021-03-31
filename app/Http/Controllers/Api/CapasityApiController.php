<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Capasity;
use App\Http\Resources\CapasityResource;
use App\Http\Requests\StoreCapasityRequest;
use Symfony\Component\HttpFoundation\Response;
use Gate;
class CapasityApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // abort_if(Gate::denies('capasity_accsess'), Response::HTTP_FORBIDDEN, 'Forbidden');

        return new CapasityResource(Capasity::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCapasityRequest $request)
    {
        $capasity = Capasity::create($request->all());
       
        return (new CapasityResource($capasity))
        ->response()
        ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Capasity $capasity)
    {
        return new CapasityResource($capasity);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
