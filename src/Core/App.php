<?php
namespace Ljm\Core;
use Ljm\Core\Router;
class App{
    public function __construct(){
        //获取url

    }
    public function  start(){
        if(isset($_GET['r'])){
            $route = $_GET['r'];
        
        }else {
            //从url匹配取得路由
            $pattern = '/\/(.*)[\/]?\?/';
            preg_match($pattern,$_SERVER['REQUEST_URI'],$result);
            $str = $result[1];
            $routerName = trim($str,'\/');
            $controller = Router::$routers[$routerName];
            $app = new $controller[0];
            $app->{$controller[1]};
        }
    }
}
