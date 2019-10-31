<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');  
Route::middleware('auth')->prefix('/admin')->group(function() {
    Route::get('/category', 'CategoryController@index')->name('category');
    Route::post('/category/store', 'CategoryController@store')->name('category.store');
    Route::get('/category/delete/{id}', 'CategoryController@delete')->name('category.delete');
    Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');

    Route::prefix("/product")->group(function(){
        Route::get('/', 'ProductController@index')->name('product');
        Route::get('/insert', 'ProductController@insert')->name('product.insert');
        Route::post('/store', 'ProductController@store')->name('product.store');
        Route::get('/delete/{id}', 'ProductController@delete')->name('product.delete');
        Route::get('/edit/{id}', 'ProductController@edit')->name('product.edit');
        Route::post('/update/{id}', 'ProductController@update')->name('product.update');
    });
    
    Route::prefix("/color")->group(function(){
        Route::get('/', 'ColorController@index')->name('color');
        Route::get('/insert', 'ColorController@insert')->name('color.insert');
        Route::post('/store', 'ColorController@store')->name('color.store');
        Route::get('/delete/{id}', 'ColorController@delete')->name('color.delete');
        Route::get('/edit/{id}', 'ColorController@edit')->name('color.edit');
        Route::post('/update/{id}', 'ColorController@update')->name('color.update');
    });

    Route::prefix("/take")->group(function(){
        Route::get('/', 'TakeController@index')->name('take');
        Route::get('/insert', 'TakeController@insert')->name('take.insert');
        Route::post('/store', 'TakeController@store')->name('take.store');
        Route::get('/delete/{id}', 'TakeController@delete')->name('take.delete');
        Route::get('/edit/{id}', 'TakeController@edit')->name('take.edit');
        Route::post('/update/{id}', 'TakeController@update')->name('take.update');
    });

    Route::prefix("/story")->group(function(){
        Route::get('/', 'StoryController@index')->name('story');
        Route::get('/stepfirst', 'StoryController@stepfirst')->name('story.stepfirst');
        Route::post('/stepseconds', 'StoryController@stepseconds')->name('story.stepseconds');
        Route::post('/stepthirds', 'StoryController@stepthird')->name('story.stepthird');
        Route::post('/store', 'StoryController@store')->name('story.store');
        Route::post('/update/{id}', 'StoryController@update')->name('story.update');
        Route::get('/edit/{id}', 'StoryController@edit')->name('story.edit');
        Route::get('/delete/{id}', 'StoryController@delete')->name('story.delete');
    });

    Route::get('/', 'HomeController@index')->name('home.index');
    Route::post('/services', "HomeController@service")->name('home.service');
    Route::post('/photo', "HomeController@photo")->name('home.photo');
    Route::get('/photo/{id}', "HomeController@delete_photo")->name('home.photo.delete');

   
    
});

// ROUTE CLIENT
Route::get('/', "HomeController@view")->name('home');

Route::prefix("/products")->group(function(){
    Route::get('/bridal/{id}/{category}', 'HomeController@product')->name('home.product');
    Route::get('/comming', 'HomeController@comming')->name('home.product.comming');
    Route::get('/take', 'HomeController@take')->name('home.product.take');
    Route::get('/detai/{id}', 'HomeController@detail')->name('home.product.detail');
    Route::get('/takes/{id}', 'HomeController@takes')->name('home.product.takes');
});