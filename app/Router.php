<?php
class Router {

    private $app;

    public function __construct($app) {
        $this->app = $app;
    }
    
    public function get($url, $action){
        return $this->app->get($url, function() use ($action){
            $action= explode('@', $action);
            var_dump($action);
            die();
        });
    }
}
