<?php
use Illuminate\Support\Facades\Route;

Route::get('products','ProductController@index');
Route::post('products','ProductController@store');
Route::put('products/{product}','ProductController@update');
Route::delete('products/{product}','ProductController@destroy');
