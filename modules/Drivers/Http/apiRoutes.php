<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'drivers'], function()
{
    Route::get('/', 'DriversApiController@index');
});
