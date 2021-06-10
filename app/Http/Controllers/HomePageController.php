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

        return view('homepage.services', compact('services'));
        // dd($services);
    }

    public function spareparts()
    {
        $spareparts = Sparepart::all();

        return view('homepage.spareparts', compact('spareparts'));
    }

    public function search()
    {
        $spareparts = Sparepart::with('motors')->orderBy('created_at', 'DESC');
        if (request()->search != '') {
            $spareparts = $spareparts->where('name', 'LIKE', '%' . request()->search . '%');
        }
        $spareparts = $spareparts->paginate(10);

        return view('homepage.spareparts', compact('spareparts'));
    }

    public function events()
    {
        return view('homepage.events');
    }

    public function motors()
    {
        return view('homepage.motors');
    }

    public function promo()
    {
        return view('homepage.promo');
    }
}
