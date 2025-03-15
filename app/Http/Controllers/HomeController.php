<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        if (View::exists('index')) {
            return view('index',  [])->with('name','JamesR')->with('surname','Bonddd')->with('job','<b>Developer</b>');
        } else {
            return view('home.index');
        }
    }
}