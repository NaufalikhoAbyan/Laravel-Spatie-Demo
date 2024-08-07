<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\ControllerMiddlewareOptions;

abstract class Controller
{
    use AuthorizesRequests;
    /**
     * The middleware registered on the controller.
     *
     * @var array
     */
    protected array $middleware = [];

    /**
     * Register middleware on the controller.
     *
     * @param array|\Closure|string $middleware
     * @param  array  $options
     * @return \Illuminate\Routing\ControllerMiddlewareOptions
     */
    public function middleware(array|\Closure|string $middleware, array $options = [])
    {
        foreach ((array) $middleware as $m) {
            $this->middleware[] = [
                'middleware' => $m,
                'options' => &$options,
            ];
        }

        return new ControllerMiddlewareOptions($options);
    }

    /**
     * Get the middleware assigned to the controller.
     *
     * @return array
     */
    public function getMiddleware()
    {
        return $this->middleware;
    }
}
