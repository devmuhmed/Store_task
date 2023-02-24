<?php
use Illuminate\Support\Facades\Route;

Route::get('games','GameController@index');
Route::post('games','GameController@store');
Route::put('games/{game}','GameController@update');
Route::delete('games/{game}','GameController@destroy');
