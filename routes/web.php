<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LockScreenController;
use App\Http\Controllers\Frontend\IndexController;

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


Route::get('login/locked', [LockScreenController::class, 'locked'])->middleware('auth')->name('login.locked');
Route::post('login/locked', [LockScreenController::class, 'unlock'])->name('login.unlock');


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/properties', [IndexController::class, 'property'])->name('properties');
Route::get('/commercial-property', [IndexController::class, 'commercialProperty'])->name('commercial_property');
Route::get('/property-details/{property}', [IndexController::class, 'propertyDetail'])->name('property_details');
