<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'riders'], function()
{
    Route::get('/', 'RidersApiController@index');
});
