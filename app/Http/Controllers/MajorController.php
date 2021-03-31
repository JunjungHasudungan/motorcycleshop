<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use App\Http\Requests\StoreMajorRequest;
use App\Http\Requests\UpdateMajorRequest;
use Illuminate\Support\Facades\DB;
class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *inde
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $majors = Major::all();
        $majors = Major::paginate(5);
         return view('majors.index', compact('majors')); 
        // dd($majors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('majors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMajorRequest $request)
    {
        $major = Major::create($request->all());
        return redirect()->route('major.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Major $major)
    {
        // $major->find($major);
        // $major->where('id', $major)->get(['name', 'cost']);
        return view('majors.show', compact('major'));
        // dd($major);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Major $major)
    {
        return view('majors.edit', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMajorRequest $request, Major $major)
    {
        $major->update($request->all());
        return redirect()->route('major.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Major $major)
    {
        $major->delete();
        return redirect()->route('major.index');
    }
}
