<?php

namespace Cubes\Theme\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ThemeNotFoundException extends NotFoundHttpException
{
    /**
     * ThemeNotFoundException constructor.
     *
     * @param $themeName
     */
    public function __construct($themeName)
    {
        parent::__construct("Theme [ $themeName ] not found! Maybe you're missing a ".config('library.scan.filename').' file.');
    }
}
