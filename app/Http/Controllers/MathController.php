<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    
    public function addition(float $num1, float $num2)
    {
        return "Addition: " . ($num1 + $num2);
    }
    
    public function subtract(float $num1, float $num2)
    {
        return "Subtraction: " . ($num1 - $num2);
    }
}
