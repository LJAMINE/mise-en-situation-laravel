<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\rolemiddleware;
use Illuminate\Support\Facades\Route;





Route::get(
    '/login',
    [AuthController::class, 'login']
);

Route::get(
    '/homepage',
    [AuthController::class, 'homepage']
)->middleware(rolemiddleware::class . ':1');

Route::get(
    '/register',
    [AuthController::class, 'register']
);


Route::get('/', function () {

    return view('register');
});

Route::post('/store', [AuthController::class, 'store']);
Route::post('/signin', [AuthController::class, 'signin']);

Route::post('/destroy', [AuthController::class, 'destroy']);




// Route::get('/create',[ProductController::class,'create']);
// Route::post('/store',[ProductController::class,'store']);
// Route::delete('/destroy/{product}',[ProductController::class,'destroy'])->name('destroy');


// Route::get('/create',[ProductController::class,'create']);
