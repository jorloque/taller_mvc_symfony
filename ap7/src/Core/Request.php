<?php

namespace app\Core;

use app\Core\Interfaces\IRequest;

class Request implements IRequest
{
    private $route;
    private $params;
    public function __construct()
    {
        $rawRoute = $_SERVER["REQUEST_URI"];
        $rawRouteElements = explode("/", $rawRoute);
        $this->route = "/" . $rawRouteElements[3];
        $this->params = array_slice($rawRouteElements, 4);
    }

    /**
     * Get the value of route
     */
    public function getRoute(): string
    {
        return $this->route;
    }

    /**
     * Get the value of params
     */
    public function getParams(): array
    {
        return $this->params;
    }
}
