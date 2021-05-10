<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sparepart;
use App\Models\Service;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        // $motors = Motor::all();
        $categories = Category::with('categoriesMotors')->orderBy('name', 'asc')->get();
        
        // $categories->groupBy('capasity_id');
        return view('homepage.home', compact('categories'));
        // dd($categories);
    }

    public function about()
    {
        return view('homepage.about');
    }

    public function services()
    {
        $services = Service::with('motors')->get();

        return view('admin.services.index', compact('services'));
        // dd($services);
    }

    public function spareparts()
    {
        $spareparts = Sparepart::all();

        return view('admin.spareparts.index', compact('spareparts'));
    }
}
