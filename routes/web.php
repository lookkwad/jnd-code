<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\AdminController;

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


Route::controller(AuthController::class)->group(function() {
    Route::view('/', 'login')->name('login');
    Route::post('login/check', 'login_check')->name('login_check');
    Route::get('logout', 'logout')->name('logout');
});

Route::controller(RegisterController::class)->group(function() {
    Route::view('/register', 'register')->name('register');
    Route::post('register/insert', 'insert')->name('register_insert');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/links', [LinksController::class, 'index'])->name('links');

    Route::view('/links/create', 'links.create')->name('links_create');
    Route::post('links/insert', [LinksController::class, 'insert'])->name('links_insert');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('admin/edit/{id}', [AdminController::class, 'editLinks'])->name('admin_edit');
    Route::post('admin/update', [AdminController::class, 'updateLinks'])->name('admin_update');
    Route::post('admin/delete', [AdminController::class, 'deleteLinks'])->name('admin_delete');
});

Route::get('{short_url}', [LinksController::class, 'shortLink'])->name('short_url');
