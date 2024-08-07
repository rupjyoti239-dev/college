<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Faculty;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $banners = Banner::where('status',1)->get();
        return view('FrontEnd.index', compact('banners'));
    }

    public function faculties()
    {
        $faculties = Faculty::all();
        return view('FrontEnd.faculties',compact('faculties'));
    }

    public function contact()
    {
        return view('FrontEnd.contact');
    }
}