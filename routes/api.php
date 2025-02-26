<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
    Route::get('/product/get', [ProductController::class, 'getProductDetail']);
});
