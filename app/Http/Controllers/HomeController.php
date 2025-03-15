<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        if (View::exists('index')) {
            return view('index',  [])->with('hobbies', ['Reading', 'Travelling']);
        } else {
            return view('home.index');
        }
    }
}