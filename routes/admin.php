<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\MyProfileController;

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');



Route::resource('/admin-users', AdminUserController::class)->except(['show','create']);
Route::patch('/admin-users/is-active/{user}', [AdminUserController::class, 'status'])->name('admin_users.is_active');

Route::resource('/my-profile', MyProfileController::class)->only(['index','edit']);
