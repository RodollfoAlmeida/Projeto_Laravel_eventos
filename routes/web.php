<?php


use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/create', [EventController::class, 'create']);
Route::get('/products', [EventController::class, 'products']);
Route::get('/product', [EventController::class, 'product']);





