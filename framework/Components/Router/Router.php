<?php


namespace framework\Components\Router;


use app\Controllers\HomeController;
use framework\Interfaces\RouteInterface;

class Router implements RouteInterface
{

    public function route(): callable
    {
        if ($this->getControllerName() == '') {
            $controllerName = HomeController::class;
            $controller = new $controllerName();
            return [$controller, 'index'];
        }
        $controllerName = $this->getControllerName();
        $controller = new $controllerName();
        $action = $this->getActionName();
        return [$controller, $action];
    }

    private function getExplodedRoute(): array
    {
        return explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }

    public function getParams(): array
    {
        $parts = $this->getExplodedRoute();
        return [$parts[3] => $parts[4]];
    }

    private function getControllerName(): string
    {
        $parts = $this->getExplodedRoute();
        if (empty($parts[1])) {
            return '';
        }
        return 'app\\Controllers\\' . ucfirst($parts[1]) . 'Controller';
    }

    private function getActionName()
    {
        $parts = $this->getExplodedRoute();
        return $parts[2];
    }


}