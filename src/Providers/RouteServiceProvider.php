<?php

namespace Cubes\Theme\Providers;

use Apply\Library\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    public $namespace = 'Cubes\Theme\Http\Controllers';

}
