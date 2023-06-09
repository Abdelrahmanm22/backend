<?php

namespace MVC\core;
class app{
    private $controller,$method,$params;
    public function __construct()
    {
        
        $this->url();
        $this->render();
    }
    private function url(){
        $url = explode("/",$_SERVER['QUERY_STRING']);
        if(!empty($_SERVER['QUERY_STRING'])){
            $url = explode("/",$_SERVER['QUERY_STRING']);
            $this->controller = isset($url[0])?$url[0]."controller":"homecontroller";
            $this->method = isset($url[1])?$url[1]:"index";
            unset($url[0],$url[1]); 
            $this->params=array_values($url);
        }else{
            $this->controller = "homecontroller";
            $this->method = "index";
            unset($url[0],$url[1]); 
            $this->params = array_values($url);
        }
    }
    private function render(){
        $controller = "MVC\controllers\\".$this->controller;
        if(class_exists($controller)){
            $controller = new $controller;
            if(method_exists($controller,$this->method)){
                call_user_func_array([$controller,$this->method],$this->params);
            }
        }
    }

}

?>