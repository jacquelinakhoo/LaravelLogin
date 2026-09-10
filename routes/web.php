<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\logincontroller::class, 'index']);
Route::post('/login', [App\Http\Controllers\logincontroller::class, 'aksilogin']);