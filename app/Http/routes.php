<?php


Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@home'
]);



Route::resource('expenses', 'ExpensesController');
Route::get('/create', 'ExpensesController@create');

