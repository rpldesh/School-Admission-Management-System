<?php

/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 11/5/2017
 * Time: 11:28 AM
 */
class View
{
    //public $user_list;

    public function __construct() {
    }

    public function render($name, $no_header = false) {
        if ($no_header === true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
			require 'views/footer.php';
        }
    }

}