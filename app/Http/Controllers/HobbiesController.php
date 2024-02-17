<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function show()
    {
        $data = [
            'hobbies' => ['Hobby 1', 'Hobby 2', 'Hobby 3'],
        ];

        return view('hobbies', $data);
    }
}
