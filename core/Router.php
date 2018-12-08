<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 29.11.18
 * Time: 19:45
 */

namespace Core;

class  Router
{



    protected $routes = [
        'GET'   => [],
        'POST'  => []
    ];

    public  static  function  load($file)
    {
        $router = new self;

        require $file;

        return $router;
    }


    public function get($url, $controller)
    {
        $this->routes['GET'][$url] = $controller;
    }

    public function post($url, $controller)
    {
        $this->routes['POST'][$url] = $controller;
    }


    public function direct($url, $method)
    {
        $url = parse_url($url, PHP_URL_PATH);

        if (! isset($this->routes[$method][$url])) {             //передивитися//

            throw new \Exception('Page not found');
        }



        $array = explode('@', $this->routes[$method][$url]);
        return $this->callAction(...$array);
    }

        public function callAction($controller, $action)
    {


        $controller = '\App\Controllers\\'.$controller;
        $controller = new $controller;
        if (! method_exists($controller, $action)) {
        throw new \Exception('Action don`t exists');
    }
        return $controller->$action();
    }

};