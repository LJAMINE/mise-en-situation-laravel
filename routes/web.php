<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'index']
);


Route::get('/create',[ProductController::class,'create']);
Route::post('/store',[ProductController::class,'store']);
Route::delete('/destroy/{product}',[ProductController::class,'destroy'])->name('destroy');
