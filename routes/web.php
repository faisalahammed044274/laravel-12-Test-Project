<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\ShowCarController;

Route::get('/', function () {
    $person = [
        'name' => 'John Doe',
        'email' =>'jhondoe@tester.com',
        'phone' => '123-456-7890'

    ];
    dd($person);
    return view('welcome', ['person' => $person]);
});

Route::get('/user/{username}', function ($username) {
    return "Username: $username";
})->where('username', '[a-z]+');

Route::get("{lang}/product/{id}", function($lang, $id){
    return "<h3>Language: $lang, Product ID: $id</h3>";
})->where(['lang' => '[a-z]{2}', 'id' => '[0-9]+']);

Route::get('/product/{id}', function ($id) {
    return "Product ID : $id";
})->whereNumber('id');

Route::get('/product-category/{category?}', function ($category) {
    return "Product Category: $category";
})->whereAlpha('category');

Route::get('/search/{search}', function ($search) {
    return "Search: $search";
})->where('search', '.*');

Route::get('/sum/{a}/{b}', function ( $a , $b ) {
    return "Sum : " . ($a + $b);
});

// Route::get('/car', [CarController::class,'index']);

// route::controller( CarController::class)->group(function(){
//     Route::get('/car', 'index');
//     Route::get('/my-cars', 'myCars');
// });

// Route::get('/car/invokable',CarController::class);
// Route::get('/car',[CarController::class, 'index']);

// Route::resource('/products', ProductController::class)->except(['destroy']);
// Route::resource('/products', ProductController::class)->only(['index']);
Route::apiResource('/products', ProductController::class);