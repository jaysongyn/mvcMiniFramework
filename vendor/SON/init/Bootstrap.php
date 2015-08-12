<?php

namespace SON\init;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/08/15
 * Time: 20:41
 */
abstract class Bootstrap
{
    private $routes;

    public function __construct(){

        $this->initRoutes();
        $this->run($this->getUrl());
    }

    abstract protected function initRoutes();

    protected function  run($url){

        array_walk($this->routes, function($route) use($url){
            if($url == $route['route'] ){

                $class = "App\\Controller\\" . ucfirst($route['controller']);

                $controller = new $class;


                $controller->$route['action']();

            }
        });
    }

    protected function setRoutes(array $routes){

        $this->routes = $routes;
    }

    protected function getUrl(){

        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }

}