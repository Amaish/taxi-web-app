<?php namespace Modules\Core\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Modules\Core\Services\MyApp;
use Nwidart\Modules\LaravelModulesServiceProvider;
use Nwidart\Modules\Facades\Module;

class MyAppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->register(MailServiceProvider::class);
        $this->app->register(SidebarServiceProvider::class);
        $this->app->singleton('myapp', function () {
            return new MyApp;
        });
    }

    public function register()
    {

        $loader = AliasLoader::getInstance();
        $loader->alias('Module', Module::class);

        $this->app->register(ConsoleServiceProvider::class);

    }
}
