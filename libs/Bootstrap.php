<?php

class Bootstrap {

    function __construct() {
        if (isset($_GET['url'])){
            $url=$_GET['url'];
        }else{
            $url=null;
        }
        print_r ($url);
        //$url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');

        $url = explode('/', $url);

        if (empty($url[0])) {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();

            return false;
        }
        print_r ($url);

        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require_once $file;
            echo $file. "exits". $url[0];
        } else {
            require 'controllers/error.php';
            $controller = new Error();
            $controller->index();
            return false;
        }


        $controller = new $url[0];
        $controller->loadModel($url[0]);
        echo "just load the model";


        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);

            } else {
                $this->error();
            }
        } else {
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    echo "Login Do method";
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
