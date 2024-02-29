<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data = [
            'hobbies' => ['Walking', 'Stargazing', 'Listening in Music', 'Cycling', 'Playing Video Games', 'Watching', 'Cooking', 'Thrifting']
        ];

        return view('hobbies', $data);
    }
}