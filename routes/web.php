<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'category'], function(){
    Route::get('/', App\Http\Controllers\Category\IndexController::class)->name('category.index');
    Route::get('/create', App\Http\Controllers\Category\CreateController::class)->name('category.create');
    Route::post('/', App\Http\Controllers\Category\StoreController::class)->name('category.store');
    Route::get('/{category}/edit', App\Http\Controllers\Category\EditController::class)->name('category.edit');
    Route::get('/{category}', App\Http\Controllers\Category\ShowController::class)->name('category.show');
    Route::patch('/{category}', App\Http\Controllers\Category\UpdateController::class)->name('category.update');
    Route::delete('/{category}', App\Http\Controllers\Category\DeleteController::class)->name('category.delete');
});

Route::group(['prefix' => 'user'], function(){
    Route::get('/', App\Http\Controllers\User\IndexController::class)->name('user.index');
    Route::get('/create', App\Http\Controllers\User\CreateController::class)->name('user.create');
    Route::post('/', App\Http\Controllers\User\StoreController::class)->name('user.store');
    Route::get('/{user}/edit', App\Http\Controllers\User\EditController::class)->name('user.edit');
    Route::get('/{user}', App\Http\Controllers\User\ShowController::class)->name('user.show');
    Route::patch('/{user}', App\Http\Controllers\User\UpdateController::class)->name('user.update');
    Route::delete('/{user}', App\Http\Controllers\User\DeleteController::class)->name('user.delete');
});

Route::group(['prefix' => 'product'], function(){
    Route::get('/', App\Http\Controllers\Product\IndexController::class)->name('product.index');
    Route::get('/create', App\Http\Controllers\Product\CreateController::class)->name('product.create');
    Route::post('/', App\Http\Controllers\Product\StoreController::class)->name('product.store');
    Route::get('/{product}/edit', App\Http\Controllers\Product\EditController::class)->name('product.edit');
    Route::get('/{product}', App\Http\Controllers\Product\ShowController::class)->name('product.show');
    Route::patch('/{product}', App\Http\Controllers\Product\UpdateController::class)->name('product.update');
    Route::delete('/{product}', App\Http\Controllers\Product\DeleteController::class)->name('product.delete');
});

Route::group(['prefix' => 'order'], function(){
    Route::get('/', App\Http\Controllers\Product\IndexController::class)->name('order.index');
    Route::get('/create', App\Http\Controllers\Product\CreateController::class)->name('order.create');
    Route::post('/', App\Http\Controllers\Product\StoreController::class)->name('order.store');
    Route::get('/{order}/edit', App\Http\Controllers\Product\EditController::class)->name('order.edit');
    Route::get('/{order}', App\Http\Controllers\Product\ShowController::class)->name('order.show');
    Route::patch('/{order}', App\Http\Controllers\Product\UpdateController::class)->name('order.update');
    Route::delete('/{order}', App\Http\Controllers\Product\DeleteController::class)->name('order.delete');
});

Route::get('/', App\Http\Controllers\Main\IndexController::class)->name('main.index');
Route::get('/asd', App\Http\Controllers\API\Product\TopProductController::class)->name('asd.index');

//Авторизация пользователей
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'register_attempt'])->name('register_attempt');
