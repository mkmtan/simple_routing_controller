<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show()
    {
        $data = [
            'skills' => ['Skill 1', 'Skill 2', 'Skill 3'],
        ];

        return view('skills', $data);
    }
}
