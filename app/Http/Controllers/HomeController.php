<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        // $maker = Maker::factory()->count(10)->create();
        // dd($maker);

        // User::factory()
        //     ->count(10)
        //     ->unverified()
        //     ->create();

        // One to Many
        // $maker = Maker::factory()
        //     ->count(5)
        //     ->hasModels(5)
        //     ->create();

        // dd($maker);

        //Many To One
        // Model::factory()
        //     ->forMaker(['name' => 'Lexus'])
        //     ->count(5)
        //     ->create();

        User::factory()
            ->has(Car::factory()->count(5), 'favouriteCars')
            ->create();


        return view('home.index');
    }
}
