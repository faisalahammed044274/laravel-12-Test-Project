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

Route::get('/user/{username}', function ($username) {
    return "Username: $username";
})->where('username', '[a-z]+');

Route::get("{lang}/product/{id}", function($lang, $id){
    return "<h3>Language: $lang, Product ID: $id</h3>";
})->where(['lang' => '[a-z]{2}', 'id' => '[0-9]+']);


// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// $aboutPageUrl = route('about');
// dd($aboutPageUrl);

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

// $contactPageUrl = route('contact');
// dd($contactPageUrl);

Route::get('/product/{id}', function ($id) {
    return "Product ID: $id";
})->whereNumber('id');

Route::get('/product-category/{category?}', function ($category) {
    return "Product Category: $category";
})->whereAlpha('category');

Route::get('/search/{search}', function ($search) {
    return "Search: $search";
})->where('search', '.*');