<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $person = [
        'name' => 'John Doe',
        'email' =>'jhondoe@tester.com',
        'phone' => '123-456-7890'

    ];
    dd($person);
    return view('welcome', ['person' => $person]);
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/product/{id}', function ($id) {
    return "Product ID: " . $id;
});