<?php

use Illuminate\Support\Facades\Route;

Route::get('home', 'TestController@home')
       ->name('home');

Route::get('/ospite/{id}', 'TestController@ospite')
        -> name('ospite');



Route::get('/create', 'TestController@create')
        -> name('create');
Route::post('/store/movie', 'TestController@store')
        -> name('store');
