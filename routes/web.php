<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('phpinfo', function () {
    phpinfo();
});

// Auth
Auth::routes();
Route::get('/auth/{driver}/redirect', [SocialiteController::class, 'redirectToProvider'])->name('google.login');
Route::get('/auth/{driver}/callback', [SocialiteController::class, 'handleProviderCallback']);

// Files Controller
Route::get('/files/{filenName}/{group?}', [FilesController::class, 'getFile'])->name('getFile');

// Home
Route::get('/', [HomeController::class, 'home'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {

    // Admin
    Route::get('/', [HomeController::class, 'index'])->name('admin');

    // Users
    Route::get('users/get-index-table', [UserController::class, 'getIndexTable'])->name('users.getIndexTable');
    Route::resource('users', UserController::class);

    // Roles
    Route::get('roles/get-index-table', [RoleController::class, 'getIndexTable'])->name('roles.getIndexTable');
    Route::resource('roles', RoleController::class);

});

Route::fallback(function () {

    return redirect()->route('home')->with('toast_errors', 'Algo salio mal!.');

});
