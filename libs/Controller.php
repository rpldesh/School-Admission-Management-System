<?php

/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 11/5/2017
 * Time: 11:28 AM
 */
class Controller
{
    function __construct() {
        $this->view = new View();
    }
    public function loadModel($name) {
        $path = 'models/' . $name . '_model.php';
        if (file_exists($path)) {
            require 'models/' . $name . '_model.php';
            $modelName = $name.'_Model';
            $this->model = new $modelName();
        }
    }

}
?>