<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 29.11.18
 * Time: 19:45
 */

class  Router
{



    protected $routes = [];

    public  static  function  load($file)
    {
        $router = new self;

        require $file;

        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($url)
    {

        if (isset($this->routes[$url])) {
            return $this->routes[$url];
        }

        throw new Exception('Page not found');
    }
};