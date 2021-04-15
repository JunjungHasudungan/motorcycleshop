<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sparepart;
use Gate;
use App\Http\Resources\Admin\SpartpartResource;
use Symfony\Component\HttpFoundation\Response;

class SparepartApiController extends Controller
{

    public function index()
    {
        // abort_if(Gate::denies('sparepart_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SpartpartResource(Sparepart::all());
    }


    public function store(StoreSparepartRequest $request)
    {
        //
    }


    public function show(Sparepart $sparepart)
    {
        //
    }


    public function update(UpdateSparepartRequest $request, Sparepart $sparepart)
    {
        //
    }


    public function destroy(Sparepart $sparepart)
    {
        //
    }
}
