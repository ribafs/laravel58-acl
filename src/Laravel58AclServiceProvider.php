<?php
namespace Ribafs\Laravel58Acl;

use Illuminate\Support\ServiceProvider;

class Laravel58AclServiceProvider extends ServiceProvider
{    
    public function boot()
    {
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //$this->commands();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel58-acl'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Here only folders with new files and only copy without overwrite
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravel58-acl.php' => config_path('laravel58-acl.php'),
        ], 'laravel58-acl.config');

        // Directories
        // Publishing the database.
        $this->publishes([
            __DIR__.'/../up/database/' => base_path('/database'),
        ], 'laravel58-acl.database');

        // Publishing app.
        $this->publishes([
            __DIR__.'/../up/app/' => base_path('/app'),
        ], 'laravel58-acl.app');

        // Publishing the resources.
        $this->publishes([
            __DIR__.'/../up/resources/' => base_path('/resources'),
        ], 'laravel58-acl.resources');

        // Publishing commands.
        $this->publishes([
            __DIR__.'/../up/Commands/' => app_path('Console/Commands'),
        ], 'laravel58-acl.commands');
  
        // Registering package commands.
        //$this->commands([]);
    }
}
