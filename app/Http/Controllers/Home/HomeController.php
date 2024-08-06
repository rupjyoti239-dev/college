<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('FrontEnd.index');
    }

    public function faculties()
    {
        return view('FrontEnd.faculties');
    }

    public function contact()
    {
        return view('FrontEnd.contact');
    }
}