<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        if (View::exists('index')) {
            return view('index',  [])->with('hobbies', ['Reading', 'Travelling'])->with('country', 'United States');
        } else {
            return view('home.index');
        }
    }
}