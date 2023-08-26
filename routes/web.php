<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth','web']], function () {

    Route::resource('artigos', 'ArtigoController');

});

Auth::routes(['register' => true]);

Route::get('/home', 'HomeController@index')->name('home');
