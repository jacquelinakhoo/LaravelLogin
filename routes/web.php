<?php
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\logincontroller;

use Illuminate\Support\Facades\Route;

//login
Route::get('/', 'App\Http\Controllers\Perpustakaan@index');
Route::post('/login', 'App\Http\Controllers\Perpustakaan@login');

//dashboard
Route::get('/dashboard', 'App\Http\Controllers\Perpustakaan@dashboard');

//logout
Route::get('/logout', 'App\Http\Controllers\Perpustakaan@logout');

//signup
Route::get('/register', 'App\Http\Controllers\Perpustakaan@register');
Route::post('/register', 'App\Http\Controllers\Perpustakaan@form');

