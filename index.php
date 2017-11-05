<?php
/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 11/5/2017
 * Time: 11:26 AM
 */
require 'config.php';

function __autoload($class)
{
    require LIBS.$class.'.php';
}

$app=new Bootstrap();
?>