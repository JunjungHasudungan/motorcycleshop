<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $motors = Motor::with('capasities')->get();
        
        // dd($motors);
        return view('home', compact('motors'));
    }
}
