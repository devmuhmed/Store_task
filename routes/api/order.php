<?php
use Illuminate\Support\Facades\Route;

Route::get('orders','OrderController@index');
Route::post('orders','OrderController@store');
Route::put('orders/{order}','OrderController@update');
Route::delete('orders/{order}','OrderController@destroy');
