<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
class carController extends Controller
{
    public function allCars(){
        $car = Car::all();
        return view('car', ['cars' => $car]);
    }
    public function specificCar($id){
        $car = Car::where('id', '=', $id)->get();
        return view('car', ['cars' => $car]);
    }
    public function newCar(){
        $car = new Car;
        $car->make = request('make');
        $car->model = request('model');
        $car->produced_on = request('production');
        if($car->save()){
            echo "Save operation successful";
        }else{
            echo "Save operation failed! Retry...";
        }
        
        
    }
}
