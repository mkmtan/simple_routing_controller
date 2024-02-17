<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutMe()
    {
        return view('about-me');
    }

    public function skills()
    {
        return view('skills');
    }

    public function hobbies()
    {
        return view('hobbies');
    }
}
