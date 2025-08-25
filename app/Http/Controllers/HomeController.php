<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\Maker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        // $car = Car::find(1);

        // dump($car->features, $car->primaryImage);


        // $car->features->update(["abs" => 0]);
        // // $car->primaryImage->delete();
        // dump($car->features, $car->primaryImage);

        // $car = Car::find(11);

        // $car_features = new CarFeatures([
        //     'abs' => false,
        //     'air_conditioning' => false,
        //     'power_windows' => false,
        //     'power_door_locks' => false,
        //     'cruise_control' => false,
        //     'bluetooth_connectivity' => false,
        //     'remote_start' => false,
        //     'gps_navigation' => false,
        //     'heated_seats' => false,
        //     'climate_control' => false,
        //     'rear_parking_sensors' => false,
        //     'leather_seats' => false,
        // ]);

        // $car->features()->save($car_features);

        // $car = Car::find(1);
        // $image = new CarImage(["image_path" => "path5", "position" => 4]);
        // $car->images()->save($image);

        // $car = Car::find(1);

        // dump($car->carType);

        // $car_type = CarType::where('name', 'Hatchback')->first();

        // // $cars = Car::whereBelongsTo($car_type)->get();
        // $cars = $car_type->cars;
        // dump($cars);

        // Update Car Type of a specific car
        // $car = Car::find(1);
        // $car_type = CarType::where('name', 'SUV')->first();

        // $car->carType()->associate($car_type);
        // $car->save();

        //Get All the user whose favourited this car
        // $car = Car::find(1);
        // dd($car->favouredUsers);

        // Get All the cars favourited by this user
        // $user = User::find(1);
        // dd($user->favouriteCars);

        // Create a new favourite car for the user
        // $user = User::find(1);
        // $user->favouriteCars()->attach([3,4]);

        $user = User::find(1);
        // $user->favouriteCars()->detach([3]);

        dd($user->favouriteCars->firs);

        return view('home.index');
    }
}
