<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index(Service $service)
    {
        $services = Service::withCount(['users', 'motors'])->get();

        return view('admin.services.index', compact('services'));
        // dd($service);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }


    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }


    public function update(Request $request, Service $service)
    {
        //
    }

    
    public function destroy(Service $service)
    {
        //
    }

    public function search()
    {
        // Sparepart
    }
}
