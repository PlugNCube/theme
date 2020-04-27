# Plug N Cube-Theme

## Set theme using route middleware
A helper middleware is included out of the box if you want to define a theme per route. To use it:

First register it in app\Http\Kernel.php:

```php
protected $routeMiddleware = [
    // ...
    'theme' => \Cubes\Theme\Http\Middleware\RouteMiddleware::class,
];
```
Now you can apply the middleware to a route or route-group. Eg:
```php
Route::group(['prefix' => 'admin', 'middleware'=>'theme:Your_theme_name'], function() {
    // ... Add your routes here 
    // The Your_theme_name will be applied.
});
```

## Set theme using web middleware
A helper middleware is included out of the box if you want to define a theme per route. To use it:

First register it in app\Http\Kernel.php:

```php
protected $middlewareGroups = [
    'web' => [
        // ...
        \Cubes\Theme\Http\Middleware\WebMiddleware::class,
    ],
    // ...
];
```



