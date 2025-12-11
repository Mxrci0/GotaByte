<?php
    
namespace FW\Init;
    
abstract class Boostrap {
    
    private $routes;
    
    function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }
    
    function getRoutes() {
        return $this->routes;
    }

    function setRoutes($routes) {
        $this->routes = $routes;
    }       
    
    protected function run($url) {

        $rotaValida = false;

        // Remove barra inicial para padronização
        $url = trim($url, '/');
        
        foreach ($this->getRoutes() as $key => $route) {

            // Rota dinâmica
            if (isset($route['is_dynamic']) && $route['is_dynamic']) {

                $matches = [];

                if ($this->matchDynamicRoute($url, $route['pattern'], $matches)) {
                    
                    $params = $this->getNamedParams($matches);
                    $class = "App\\Controller\\" . $route['controller'];
                    $controller = new $class();
                    $action = $route['action'];

                    $controller->$action($params);

                    $rotaValida = true;
                    break;
                }

            } else {

                // Rota estática
                $rota = trim($route['route'], '/');

                if ($this->matchStaticRoute($url, $rota)) {
                    
                    $params = $this->getParams($url, $rota);

                    $class = "App\\Controller\\" . $route['controller'];
                    $controller = new $class();
                    $action = $route['action'];

                    $controller->$action($params);

                    $rotaValida = true;
                    break;
                }
            }
        }
        
        if (!$rotaValida) {
            $class = "App\\Controller\\ErrorController";
            $controller = new $class();                    
            $controller->error404();
        }
    }

    protected function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
            
    abstract protected function initRoutes();


    /** ROTA ESTÁTICA */
    protected function matchStaticRoute($url, $route) {
        return rtrim($url, '/') === rtrim($route, '/');
    }


    /** ROTA DINÂMICA */
    protected function matchDynamicRoute($url, $pattern, &$matches) {
        $regex = $this->convertPatternToRegex($pattern);
        return preg_match($regex, $url, $matches);
    }

    protected function convertPatternToRegex($pattern) {
        $pattern = trim($pattern, '/');
        $pattern = str_replace('/', '\/', $pattern);
        $regex = preg_replace('/\{([a-zA-Z_]+)\}/', '(?P<$1>[^\/]+)', $pattern);
        return '/^' . $regex . '$/';
    }

    protected function getNamedParams($matches) {
        $params = [];
        foreach ($matches as $key => $value) {
            if (is_string($key)) {
                $params[$key] = $value;
            }
        }
        return $params;
    }

    
    /** PARÂMETROS EM ROTAS ESTÁTICAS QUE TÊM {param} */
    protected function getParams($url, $route) {

        if (strpos($route, '{') === false) {
            return null;
        }

        $params = [];
        $urlParts = explode('/', trim($url, '/'));
        $routeParts = explode('/', trim($route, '/'));

        for ($i = 0; $i < count($routeParts); $i++) {
            if (isset($routeParts[$i]) && strpos($routeParts[$i], '{') !== false && 
                isset($urlParts[$i]) && strlen($urlParts[$i]) > 0) {
                    
                $paramName = trim($routeParts[$i], '{}');
                $params[$paramName] = $urlParts[$i];
            }
        }

        return $params;
    }
}
