<?php
namespace Cubes\Theme;

use Apply\Library\Plugin;
use Cubes\Theme\Exceptions\ThemeNotFoundException;

class Theme extends Plugin
{
    /**
     * Current active theme.
     *
     * @var string|$activeTheme
     */
    public $activeTheme = null;

    /**
     * Get current theme.
     *
     * @return null
     */
    public function current()
    {
        return $this->activeTheme ? $this->where('name', $this->activeTheme)->first() : null;
    }

    /**
     * Set current theme.
     */
    public function setTheme($name)
    {
        $theme = $this->where('name', $name)->first();

        if (!$theme) {
            throw new ThemeNotFoundException($name);
        }

        $this->loadTheme($theme);
        $this->activeTheme = $name;
    }

    /**
     * load theme
     */
    public function loadTheme($theme)
    {
        $views          = $theme->path('resources/views');
        $alias          = $theme->alias;
        $trans          = $theme->path('resources/lang');

        app('view')->getFinder()->prependLocation($views);
        app('view')->getFinder()->prependNamespace($alias, $views);
        app('translator')->addNamespace($alias, $trans);
    }
}
