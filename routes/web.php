<?php

use Illuminate\Support\Facades\Route;

//Product Routes
Route::get('/products',"App\Http\Controllers\ProductController@index");
Route::get('/products/edit/{id}',"App\Http\Controllers\ProductController@edit");
Route::get('/products/show/{id}',"App\Http\Controllers\ProductController@show");
Route::get('/products/create',"App\Http\Controllers\ProductController@create");
Route::post('/products/store',"App\Http\Controllers\ProductController@store");
Route::post('/products/update/{id}',"App\Http\Controllers\ProductController@update");
Route::get('/products/destroy/{id}', "App\Http\Controllers\ProductController@destroy");


//Category Routes
Route::get('/categories',"App\Http\Controllers\CategoryController@index");
Route::get('/categories/edit/{id}',"App\Http\Controllers\CategoryController@edit");
Route::get('/categories/show/{id}',"App\Http\Controllers\CategoryController@show");
Route::get('/categories/create',"App\Http\Controllers\CategoryController@create");
Route::post('/categories/store',"App\Http\Controllers\CategoryController@store");
Route::post('/categories/update/{id}',"App\Http\Controllers\CategoryController@update");
Route::get('/categories/destroy/{id}', "App\Http\Controllers\CategoryController@destroy");