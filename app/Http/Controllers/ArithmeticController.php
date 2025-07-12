<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArithmeticController extends Controller
{
    public function add(int $a, int $b)
    {
        return $a + $b;
    }

    public function subtract(int $a, int $b)
    {
        return $a - $b;
    }
}
