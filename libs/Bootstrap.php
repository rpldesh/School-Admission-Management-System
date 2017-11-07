<?php

class Bootstrap {

    function __construct() {
        Session::init();
        if (isset($_GET['url'])){
            $url=$_GET['url'];
        }else{
            $url=null;
        }
        //$url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');

        $url = explode('/', $url);

        if (empty($url[0])) {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();

            return false;
        }

        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require_once $file;
        } else {
            require 'controllers/error.php';
            $controller = new Error();
            $controller->index();
            return false;
        }

        if(isset($_SESSION['user_type'])){
            $user_type =  Session::get('user_type');
        }else{
            $user_type = 'root';
        }

        $controller = new $url[0];
        $controller->loadModel($url[0],$user_type);


        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);

            } else {
                $this->error();
            }
        } else {
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    $this->error();
                }
            } else {
                $controller->index();
            }
        }
    }

    function error() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index();
        return false;
    }

}
