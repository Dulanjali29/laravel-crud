<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('products.index');
});

Route::get('/products',[ProductsController::class,'index']);
Route::get('/products/create',[ProductsController::class,'create']);
Route::post('/products/create',[ProductsController::class,'store']);
Route::get('/products/{id}/edit',[ProductsController::class,'edit']);
Route::put('/products/{id}/edit',[ProductsController::class,'update']);
Route::get('/products/{id}/delete',[ProductsController::class,'destroy']);
Route::get('/products/{id}/view',[ProductsController::class,'view']);
