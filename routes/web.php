<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductsController::class,'index']);

Route::get('/products',[ProductsController::class,'index']);
Route::get('/products/create',[ProductsController::class,'create']);
Route::post('/products/create',[ProductsController::class,'store']);
Route::get('/products/{id}/edit',[ProductsController::class,'edit']);
Route::put('/products/{id}/edit',[ProductsController::class,'update']);
Route::get('/products/{id}/delete',[ProductsController::class,'destroy']);
Route::get('/products/{id}/show',[ProductsController::class,'show']);
