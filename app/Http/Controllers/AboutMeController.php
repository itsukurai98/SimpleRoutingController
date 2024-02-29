<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller

{
    public function index()
    {
        $data = [
            'name' => 'Rov Russelle',
            'description' => 'I am a BATMAN.'
        ];

        return view('about_me', $data);
    }
}
