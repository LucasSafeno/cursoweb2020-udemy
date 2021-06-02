<?php
    namespace App;

# [Route] #
class Route{

    public function initRoutes() {
        $routes['home'] = array(
            'route'         => '/',
            'controller'    => 'indexController',
            'action'        => 'index'
        );

        $routes['sobre_nos'] = array(
            'route'         => '/',
            'controller'    => 'indexController',
            'action'        => 'sobreNos'
        );
    } # initRoutes()


    public function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }# geturl()


} # [/Route] #


?>