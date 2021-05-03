<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        // $motors = Motor::all();
        $motors = Motor::with('capasities')->orderBy('name', 'asc')->get();
        
        $motors->groupBy('capasity_id');
        // dd($motors);
        return view('home', compact('motors'));
    }

    public function about()
    {
        return view('about');
    }
}
