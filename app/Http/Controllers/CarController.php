<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('created_at')->paginate(10);
        return view('cars.index', compact('cars'));
    }

    public function dashboard()
    {
        $cars = Car::orderBy('created_at')->paginate(10);
        return view('cars.dashboard', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }
}
