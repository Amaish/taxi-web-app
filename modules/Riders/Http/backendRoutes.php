<?php

use Illuminate\Support\Facades\Route;

Route::bind('rider', function ($id) {
    return app(Modules\Riders\Repositories\RiderInterface::class)->byId($id);
});

Route::group(['prefix' => 'riders'], function () {
    Route::get('/', [
        'as' => 'admin.riders.index',
        'uses' => 'RidersController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.riders.create',
        'uses' => 'RidersController@create'
    ]);
    Route::get('{rider}/edit', [
        'as' => 'admin.riders.edit',
        'uses' => 'RidersController@edit'
    ]);
    Route::get('{rider}/view', [
        'as' => 'admin.riders.view',
        'uses' => 'RidersController@view'
    ]);
    Route::post('/', [
        'as' => 'admin.riders.store',
        'uses' => 'RidersController@store'
    ]);
    Route::put('{rider}', [
        'as' => 'admin.riders.update',
        'uses' => 'RidersController@update'
    ]);
    Route::get('datatable', [
        'as' => 'admin.riders.datatable',
        'uses' => 'RidersController@dataTable'
    ]);
    Route::delete('{rider}', [
        'as' => 'admin.riders.destroy',
        'uses' => 'RidersController@destroy'
    ]);
});
