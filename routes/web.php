<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

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

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::prefix('/category')->controller(CategoryController::class)->name('category.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::patch('/edit/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

Route::prefix('/article')->controller(ArticleController::class)->name('article.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::patch('/edit/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

Route::prefix('/user')->controller(UserController::class)->name('user.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');
    Route::get('/edit/{user}', 'edit')->name('edit');
    Route::patch('/edit/{user}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

Route::prefix('/role')->controller(RoleController::class)->name('role.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/show/{role}', 'show')->name('show');
    Route::get('create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');
    Route::get('/edit/{role}', 'edit')->name('edit');
    Route::post('/edit/{role}', 'update')->name('update');
    Route::post('/destroy/{role}', 'destroy')->name('destroy');
});
