<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

//เพิ่มเส้นทาง get product
Route::prefix('api')->group(function () {
    Route::get('/product/get', [ProductController::class, 'getProductDetail']);
});
