<?php

namespace app\Core;

use DI\Container;
use app\Core\Request;
use app\Core\RouteCollection;
use app\Core\Interfaces\IRoutes;
use app\Core\Interfaces\IRequest;

class Dispatcher
{
    private $container;
    private $routeList;
    private $currentRequest;
    public function __construct(Container $container, IRoutes $routeCollection, IRequest $request)
    {
        $this->container = $container;
        $this->routeList = $routeCollection->getRoutes();
        $this->currentRequest = $request;
        $this->dispatch();
    }
    private function dispatch()
    {
        $route = $this->currentRequest->getRoute();
        if (isset($this->routeList[$route])) {
            $controllerClass = "app\\Controller\\" . $this->routeList[$route]["controller"]; 
            $controller =  $this->container->get($controllerClass); 
            $method = $this->routeList[$route]["method"];
            $controller->$method(...$this->currentRequest->getParams());
        } else {
            echo "ruta no existe";
        }
    }
}
