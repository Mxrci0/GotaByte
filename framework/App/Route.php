<?php

namespace App;

use FW\Init\Boostrap;
use FW\Router\RouteManager;

class Route extends Boostrap
{
    public function initRoutes()
    {
        $routes = [];

        // Rota obrigatória de erro 404
        $routes['error-404'] = [
            'route' => '/error404',
            'controller' => 'ErrorController',
            'action' => 'error404'
        ];

        // Carrega rotas do banco
        $routeManager = RouteManager::getInstance();
        $dbRoutes = $routeManager->getAllRoutes();

        foreach ($dbRoutes as $dbRoute) {
            $routes[$dbRoute['nome_rota']] = [
                'route'       => '/' . trim($dbRoute['slug'], '/'),
                'controller'  => $dbRoute['controller'],
                'action'      => $dbRoute['action'],
                'is_dynamic'  => (bool) $dbRoute['is_dynamic'],
                'pattern'     => $dbRoute['pattern'] ?? null
            ];
        }

        // Registra tudo no Boostrap
        $this->setRoutes($routes);
    }
}
