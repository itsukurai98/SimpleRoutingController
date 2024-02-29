<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = [
            'skills' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'Cycling']
        ];

        return view('skills', $data);
    }
}
