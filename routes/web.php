<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::resource('artigos', 'ArtigoController');
    Route::resource('calendar', 'CalendarController');
    Route::get('vue','VueController@index')->name('vue.index');

});

Auth::routes(['register' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');



