<?php
    namespace App;

    use MF\Init\Bootstrap;

# [Route] #
class Route extends Bootstrap{

    protected function initRoutes() {
        $routes['home'] = array(
            'route'         => '/',
            'controller'    => 'IndexController',
            'action'        => 'index'
        );

        $routes['inscrevese'] = array(
            'route'         => '/inscreverse',
            'controller'    => 'IndexController',
            'action'        => 'inscreverse'
        );

        
        $this->setRoutes($routes);
    } # initRoutes()

} # [/Route] 


?>