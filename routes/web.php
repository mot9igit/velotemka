<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => "App\Http\Controllers\Blog"], function () {
    Route::get("/", IndexController::class);
});

Route::group(['namespace'=>'App\Http\Controllers\Admin', 'prefix' => 'adm'], function() {
    Route::get('/', 'IndexController' )->name('admin.index');
    Route::group(['namespace'=>'Post', 'prefix' => 'posts'], function(){
        Route::get('/', 'IndexController' )->name('admin.post.index');
    });
    Route::group(['namespace'=>'Category', 'prefix' => 'categories'], function(){
        Route::get('/', 'IndexController' )->name('admin.category.index');
    });
    Route::group(['namespace'=>'Tag', 'prefix' => 'tags'], function(){
        Route::get('/', 'IndexController' )->name('admin.tag.index');
    });
});

Auth::routes();
