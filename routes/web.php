<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::resource('artigos', 'ArtigoController');

});

Auth::routes(['register' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
