<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {

        $cars = $cars = Car::latest()->get();
        return response()->json($cars);
    }

    public function store(Request $request)
    {

        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'engine' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'price_per_day' => 'required|numeric|min:0',
            'status' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $car = new Car;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->engine = $request->engine;
        $car->quantity = $request->quantity;
        $car->price_per_day = $request->price_per_day;
        $car->status = $request->status;


        if ($request->hasFile('image')) {
            $imageName = $request->brand . '-' . $request->model . '-' . $request->engine . '-' . Str::random(10) . '.' . $request->file('image')->extension();
            $image = $request->file('image');
            $path = $image->storeAs('images/cars', $imageName);
            $car->image = '/' . $path;
        }

        $car->save();

        return response()->json($car, 201);
    }

    public function show(Car $car)
    {

        return response()->json($car);
    }

    public function update(Request $request, Car $car)
    {

        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'engine' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'price_per_day' => 'required|numeric|min:0',
            'status' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $car = Car::findOrFail($car->id);

        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->engine = $request->engine;
        $car->quantity = $request->quantity;
        $car->price_per_day = $request->price_per_day;
        $car->status = $request->status;


        if ($request->hasFile('image')) {

            $filename = basename($car->image);
            Storage::disk('local')->delete('images/cars/' . $filename);
            $car->delete();

            $imageName = $request->brand . '-' . $request->model . '-' . $request->engine . '-' . Str::random(10) . '.' . $request->file('image')->extension();
            $image = $request->file('image');
            $path = $image->storeAs('images/cars', $imageName);
            $car->image = $path;
        }
        $car->save();

        return response()->json($car);
    }


    public function destroy(Car $car)
    {

        $activeReservations = $car->reservations()->where('status', 'Active')->count();

        if ($activeReservations > 0) {

            return redirect()->route('cars.index')->with('error', 'Cannot delete car with active reservations.');
        }

        $car->reservations()->where('status', '!=', 'Active')->delete();
        return $car->delete();
    }
}
