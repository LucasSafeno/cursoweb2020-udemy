<?php
    namespace MF\Init;

    abstract class Bootstrap{

        private $routes;

        abstract protected function initRoutes();

     public function __construct(){
            $this->initRoutes();
            $this->run($this->getUrl());
        } # [/constructu()]


    public function getRoutes(){
        return $this->routes;
    } # [/getRoutes()]

    public function setRoutes(array $routes){
        $this->routes  = $routes;
    } # [/setRoutes()]

    protected function run($url){
        
        foreach($this->getRoutes() as $key => $route  ){
            if($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']);

                $controller = new $class;

                $action = $route['action'];
                $controller->$action();
            }
        }
    } # [/run()]
  

    protected function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }# geturl()



    } // [/Bootstrap]


?>