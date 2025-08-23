<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        // $car = new Car();
        // $car->maker_id = 1;
        // $car->model_id = 1;
        // $car->year = 1999;
        // $car->price = 100000;
        // $car->vin = 123;
        // $car->mileage = 123;
        // $car->car_type_id = 1;
        // $car->fuel_type_id = 1;
        // $car->user_id = 1;
        // $car->city_id = 1;
        // $car->address = "Lorem Ipsum";
        // $car->phone = "09123456789";
        // $car->description = null;
        // $car->published_at = now();
        // $car->save();

        // $carData = [
        //     'maker_id' => 1,
        //     'model_id' => 1,
        //     'year' => 1,
        //     'price' => 1,
        //     'vin' => 1,
        //     'mileage' => 1,
        //     'car_type_id' => 1,
        //     'fuel_type_id' => 1,
        //     'user_id' => 1,
        //     'city_id' => 1,
        //     'address' => 1,
        //     'phone' => 1,
        //     'description' => 1,
        //     'published_at' => 1,
        // ];

        // $car = Car::create($carData);

        // $car = Car::find(1);
        // $car->price = 2000;
        // $car->save();

        // $carData = [
        //     'maker_id' => 1,
        //     'model_id' => 1,
        //     'year' => 1,
        //     'price' => 25000,
        //     'vin' => 11,
        //     'mileage' => 1,
        //     'car_type_id' => 1,
        //     'fuel_type_id' => 1,
        //     'user_id' => 1,
        //     'city_id' => 1,
        //     'address' => 1,
        //     'phone' => 1,
        //     'description' => 1,
        //     'published_at' => 1,
        // ];
        // $car = Car::updateOrCreate([
        //     'vin' => 11, 'price' => 1
        // ], 
        // $carData);


        // Car::where('published_at', null)
        //     ->where('user_id', 1)
        //     ->update(['published_at' => now()]);

        // $car = Car::find(1);
        // $car->delete();

        // Car::destroy([2, 3]);

        Car::where('published_at', null)
            ->where('user_id', 1)
            ->delete();
        return view('home.index');
    }
}
