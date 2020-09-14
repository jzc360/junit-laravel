<?php
Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('jjunit.store');
