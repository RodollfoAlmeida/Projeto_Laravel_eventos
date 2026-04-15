<?php


use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/create', [EventController::class, 'create']);
Route::get('/events/{$id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);






