<?php
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\logincontroller;

use Illuminate\Support\Facades\Route;

//Route::get('/register', [App\Http\Controllers\registercontroller::class, 'index']);
//Route::post('/register', [App\Http\Controllers\registercontroller::class, 'RegisterAction']);

Route::get('/', [App\Http\Controllers\registercontroller::class, 'login']);
Route::post('/login', [App\Http\Controllers\registercontroller::class, 'AksiLogin']);
