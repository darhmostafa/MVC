<?php

namespace TWO\core;

class app
{
    private $controller = "home";
    private $method = "index";
    private $params = [];

    public function __construct()
    {
        $this->url();
        $this->render();
    }

    private function url()
    {
        if(isset($_SERVER["QUERY_STRING"]))
        {
            $url = explode("/", $_SERVER["QUERY_STRING"]);

            $this->controller = !empty($url[0]) ? $url[0]."controller" : "homecontroller";

            $this->method = !empty($url[1]) ? $url[1] : "index";

            unset($url[0],$url[1]);

            $url = array_values($url);

            $this->params = $url;
        }
    }


    private function render()
    {
        $controller = "TWO\controllers\\" . $this->controller;
        if(class_exists($controller))
        {
            $controller = new $controller;
            if(method_exists($controller, $this->method))
            {
                call_user_func_array([$controller,$this->method],$this->params);
            } else 
            {
                echo "Method Not Exists!";
            }
        } else 
        {
            echo "Class Not Exists!";
        }
    }
}