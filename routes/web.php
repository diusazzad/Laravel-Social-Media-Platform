<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('login');
// });

Route::prefix('/')->group(function(){
    Route::controller(homeController::class)->group(function () {
        Route::get('/', 'home');
    });

});
