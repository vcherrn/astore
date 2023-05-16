<?php

namespace Apackage\Astore;

use Apackage\Astore\Facade\GeoMetric;
use Apackage\Astore\FacadeClasses\CurrentCurrency;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class StoreServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
      
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__.'/routes/web.php';
        $this->loadViewsFrom(__DIR__.'/views','astore');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        App::singleton('currency', CurrentCurrency::class);
        App::singleton('geometric', GetGeoMetric::class);

        $this->publishes([
            __DIR__.'/views'=>resource_path('views/vendor/astor')
        ]);
    }
}
