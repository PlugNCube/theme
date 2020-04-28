<?php

namespace Cubes\Theme\Apply;

use Apply\Library\Engine;
use Cubes\Theme\Providers\AppServiceProvider;
use Cubes\Theme\Providers\RouteServiceProvider;
use Apply\Library\Support\Providers\SetupServiceProvider;
use Cubes\Theme\Theme;

class Setup extends SetupServiceProvider
{
    /**
     * Bootstrap any Library services.
     *
     * @return void
     */
    public function boot()
    {
        $this
            ->registerProviders()
            //->registerAlias()
            ->registerConfig('theme')
            //->registerDatabase()
            ->registerHelpers()
            //->registerViews()
            //->registerRouteProvider(RouteServiceProvider::class)
        ;

        Engine::cube('theme', new Theme());
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            AppServiceProvider::class,
        ];
    }
}
