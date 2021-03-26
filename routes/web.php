<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@index')->name('index');
Route::get('/kategoriler', 'CategoryController@index')->name('categories.index');
Route::get('/kategori/{slug}', 'CategoryController@show')->name('categories.show');
Route::get('/{slug_c}/{slug}', 'PostController@show')->name('posts.show');
Route::get('/{slug}/tam/kodlar', 'CodeController@index')->name('codes.index');
Route::get('{slug_c}/kod/{slug}', 'CodeController@show')->name('codes.show');

Route::middleware('auth')->group(function(){
    Route::get('dashboard', 'AdminController@index')->name('dashboard');
    Route::prefix('dashboard')->group(function () {
        Route::get('/posts/full', 'PostController@index')->name('admin.posts.index');
         Route::get('/post/create', 'PostController@create')->name('admin.posts.create');
        Route::post('/post/create', 'PostController@store')->name('admin.posts.store');
        Route::get('/post/update/{id}', 'PostController@edit')->name('admin.posts.edit');
        Route::put('/post/update/{id}', 'PostController@update')->name('admin.posts.update');
    });
    // Route::get('dashboard/full/posts/hepsi', 'PostController@index')->name('admin.posts.index');
    // Route::get('/dashboard/post/create', 'PostController@create')->name('admin.posts.create');
    // Route::post('/dashboard/post/create', 'PostController@store')->name('admin.posts.store');
    // Route::get('/dashboard/post/update/{id}', 'PostController@edit')->name('admin.posts.edit');
    // Route::put('dashboard/post/update/{id}', 'PostController@update')->name('admin.posts.update');
    Route::prefix('dashboard')->group(function () {
        Route::get('/categories/full', 'AdminController@categories')->name('admin.categories.index');
        Route::get('/category/create', 'CategoryController@create')->name('admin.categories.create');
        Route::post('/category/create', 'CategoryController@store')->name('admin.categories.store');
        Route::get('/category/edit/{id}', 'CategoryController@edit')->name('admin.categories.edit');
        Route::put('/category/edit/{id}', 'CategoryController@update')->name('admin.categories.update');
});
    Route::prefix('dashboard')->group(function(){
        Route::get('/settings/site-ayarlari', 'SettingController@index')->name('admin.settings.index');
        Route::get('/settings/create', 'SettingController@create')->name('admin.settings.create');
        Route::post('/settings/create', 'SettingController@store')->name('admin.settings.store');
        Route::put('/settings/edit', 'SettingController@update')->name('admin.settings.update');
    });
    // Route::get('/category', 'AdminController@categories')->name('admin.categories.index');
    // Route::get('/dashboard/category/create', 'CategoryController@create')->name('admin.categories.create');
    // Route::post('/dashboard/category/create', 'CategoryController@store')->name('admin.categories.store');
    // Route::get('/dashboard/category/edit/{id}', 'CategoryController@edit')->name('admin.categories.edit');
    // Route::put('/dashboard/category/edit/{id}', 'CategoryController@update')->name('admin.categories.update');
});
require __DIR__.'/auth.php';
