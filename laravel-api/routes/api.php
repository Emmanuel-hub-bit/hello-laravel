<?php

use Illuminate\Support\Facades\Route;

Route::get('/status', function () {
    return response()->json([
        'message' => 'Laravel API Working!',
        'status' => 'success'
    ]);
});
