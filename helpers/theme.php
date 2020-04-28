<?php

if (! function_exists('theme')) {
    /**
     * Get the current platform instance or register.
     *
     * @param null $name
     * @param null $platform
     * @return mixed
     */
    function theme($name = null, $platform = null)
    {
        $theme = library()->cube('theme');

        if (is_null($name) && $theme->activeTheme){
            return $theme->current();
        }

        return $theme;
    }
}
