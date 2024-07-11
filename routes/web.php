<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'gestion'],function () {

    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});

