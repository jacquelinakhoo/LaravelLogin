<?php
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\logincontroller;

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\Perpustakaan@index');
Route::post('/login', 'App\Http\Controllers\Perpustakaan@login');
Route::get('/dashboard', 'App\Http\Controllers\Perpustakaan@dashboard');
Route::get('/dashboard', 'App\Http\Controllers\Perpustakaan@dashboard');
Route::get('/logout', 'App\Http\Controllers\Perpustakaan@logout');
