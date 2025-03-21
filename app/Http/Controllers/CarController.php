<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    function createCar(){
        return view('addCar');
    }

    function createCar1(Request $request) {
        $request->validate([
            'Name' => ['required'],
            'Price' => ['required'],
            'Photo' => ['required', 'image']
        ]);

        $filename = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('/public'.'/'.$filename);

        Car::create([
            'Name' => $request->Name,
            'Price' => $request->Price,
            'Photo' => $filename
        ]);

        return redirect('/display');
    }

    public function viewCars() {
        $cars = Car::all();
        return view('display', compact('cars'));
    }
}