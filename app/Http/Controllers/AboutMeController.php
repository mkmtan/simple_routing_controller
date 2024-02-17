<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show()
    {
        $data = [
            'name' => 'Your Name',
            'description' => 'This is some information about me.',
        ];

        return view('about-me', $data);
    }
}
