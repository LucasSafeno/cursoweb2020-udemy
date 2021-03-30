<?php

    namespace App;

class Route{

    public function initRoutes(){
        
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'IndexController.php',
            'action' => 'index'
        );

        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos',
            'controller' => 'IndexController.php',
            'action' => 'sobreNos'
        );

    }// initRoute


    public function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }// getUrl

} // fim Route

?>