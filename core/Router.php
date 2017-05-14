<?php

class Router
{
    protected $routes = [];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        try {
            if (array_key_exists($uri, $this->routes[$requestType])) {
                return $this->routes[$requestType][$uri];
            } else {
                throw new Exception('No route defined for this URI');
            }
        } catch (Exception $e) {
            return 'views/404.php';
        }
    }
}
