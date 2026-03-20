<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/admissions', function () {
    return view('pages.admissions');
});
Route::get('/about', function () {
    return view('pages.about-use');
});
Route::get('/program', function () {
    return view('pages.program');
});

