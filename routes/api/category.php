<?php
use Illuminate\Support\Facades\Route;

Route::get('categories','CategoryController@index');
Route::post('categories','CategoryController@store');
Route::put('categories/{category}','CategoryController@update');
Route::delete('categories/{category}','CategoryController@destroy');
