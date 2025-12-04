<?php

use Illuminate\Support\Facades\Route;

// Default Laravel route
Route::get('/', function () {
    return view('welcome');
});

// Our custom Hello World route
Route::get('/hello', function () {
    // Data to pass to the view
    $data = [
        'name' => 'Laravel Developer',
        'framework' => 'Laravel',
        'version' => app()->version()
    ];
    
    // Return the view with data
    return view('hello', $data);
});