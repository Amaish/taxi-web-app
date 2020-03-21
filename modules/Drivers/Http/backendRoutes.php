<?php

use Illuminate\Support\Facades\Route;

Route::bind('driver', function ($id) {
    return app(Modules\Drivers\Repositories\DriverInterface::class)->byId($id);
});

Route::group(['prefix' => 'drivers'], function () {
    Route::get('/', [
        'as' => 'admin.drivers.index',
        'uses' => 'DriversController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.drivers.create',
        'uses' => 'DriversController@create'
    ]);
    Route::get('{driver}/edit', [
        'as' => 'admin.drivers.edit',
        'uses' => 'DriversController@edit'
    ]);
    Route::get('{id}/view', [
        'as' => 'admin.drivers.view',
        'uses' => 'DriversController@view'
    ]); 
    Route::post('/', [
        'as' => 'admin.drivers.store',
        'uses' => 'DriversController@store'
    ]);
    Route::put('{driver}', [
        'as' => 'admin.drivers.update',
        'uses' => 'DriversController@update'
    ]);
    Route::get('datatable', [
        'as' => 'admin.drivers.datatable',
        'uses' => 'DriversController@dataTable'
    ]);
    Route::delete('{driver}', [
        'as' => 'admin.drivers.destroy',
        'uses' => 'DriversController@destroy'
    ]);
});
