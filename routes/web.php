<?php

use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\LetslearnController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');


    //Courses
    Route::resource('courses', CourseController::class)->except(['create', 'show', 'edit']);
    //Lets Learn 
    Route::resource('lets-learn', LetslearnController::class)->except(['show']);

    ///////////////////////////// Roles And Permission Route ///////////////////////////////////
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class)->except(['create', 'show', 'edit']);
    Route::get('roles/permissions/{id}', [RoleController::class, 'addPermissionToRole'])->name('role.permissions');
    Route::put('roles/permissions/{id}', [RoleController::class, 'addPermissionToRoleUpdate'])->name('role-permissions.update');

    ///////////////////////////// User and Profile Route ///////////////////////////////////
    Route::resource('users', UserController::class)->except(['show']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/pdf-file-download', function () {
    return view('frontend.pdf-download');
});

Route::get('/', [HomeController::class, 'front_index'])->name('website');

require __DIR__ . '/auth.php';
