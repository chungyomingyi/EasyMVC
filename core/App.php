<?php

class App {
    // https://..../home/index.php
    
    
    public function __construct() {
        $url = $this->parseUrl();      //秀出陣列內容
        
        $controllerName = "{$url[0]}Controller";        
        if (!file_exists("controllers/$controllerName.php"))
            return;
        require_once "controllers/$controllerName.php";
        $controller = new $controllerName;
        $methodName = isset($url[1]) ? $url[1] : "index";
        if (!method_exists($controller, $methodName))
            return;
        unset($url[0]); unset($url[1]);
        $params = $url ? array_values($url) : Array();
        call_user_func_array(Array($controller, $methodName), $params);
        
        //homeController
    }
    
    public function parseUrl() {     //取得後面網址名稱
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/");
            $url = explode("/", $url);
            return $url;
        }
    }
    
}

?>