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
    return view('onboarding-form-1');
});

Route::get('/onboarding-form-1', function () {
    return view('onboarding-form-1');
});
Route::get('/onboarding-form-2/{id}', function () {
    return view('onboarding-form-2');
});
Route::get('/onboarding-form-3', function () {
    return view('onboarding-form-3');
});
Route::get('/onboarding-form-4', function () {
    return view('onboarding-form-4');
});
Route::get('/onboarding-form-5', function () {
    return view('onboarding-form-5');
});
