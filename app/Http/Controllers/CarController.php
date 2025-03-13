<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __invoke()
    {
        return "Invoke Car Controller";
    }
    
    public function index()
    {
        return "Car Controller";
    }

    public function myCars()
    {
        return "My Cars";
    }

}
