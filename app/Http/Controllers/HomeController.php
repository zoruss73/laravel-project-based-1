<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'name' => 'Russel',
            'Age' => 22,
            'hobbies' => ['Reading', 'Gaming', 'Sleeping'],
        ]);
    }
}
