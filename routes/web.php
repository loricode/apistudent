<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', 'studentController@index');

Route::post('/student', 'studentController@store');

Route::delete('/student/{id}', 'studentController@destroy');