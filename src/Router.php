<?php

namespace Sepium;

class Router
{
    protected $routes = [];

    public function register($route, $controller, $method)
    {
        $this->routes[$route] = ['controller' => $controller, 'method' => $method];
    }

    public function send($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            $controller = $this->routes[$uri]['controller'];
            $meth = $this->routes[$uri]['method'];

            $controller = new $controller();
            $controller->$meth();
        } else {
            throw new \Exception("No route for URI: $uri");
        }
    }
}