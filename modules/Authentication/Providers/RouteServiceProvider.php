<?php

namespace Modules\Authentication\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $rootUrlNamespace = 'Modules\Authentication\Http\Controllers';

    public function boot()
    {
        parent::boot();
        Route::model('authentication', 'Modules\Authentication\Entities\Authentication');
    }

    public function before(Router $router)
    {
        //

    }

    public function map(Router $router)
    {
        $router->group(['prefix' => 'auth'], function () use ($router){
            //Account authentication routes
            $router->get('login', ['middleware' => 'web', 'as' => 'login', 'uses' => 'Modules\Authentication\Http\Controllers\AuthenticationController@getLogin']);
            $router->post('login', ['as' => 'login.post', 'uses' => 'Modules\Authentication\Http\Controllers\AuthenticationController@postLogin']);
            $router->get('logout', ['as' => 'logout', 'uses' => 'Modules\Authentication\Http\Controllers\AuthenticationController@getLogout']);
            //Account reset routes

        });
    }
}