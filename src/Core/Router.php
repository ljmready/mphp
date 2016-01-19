<?php
namespace Ljm\Core;
require_once '../../config/route.php';
class Router{
    public static $routers = [];
    public function get($name = '',array $array){
        $controller = explode('@',$array['use']);
        $self::$routers[$name] = $controller;
    
    }

}
