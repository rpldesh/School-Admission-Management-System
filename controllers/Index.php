<?php

/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 11/5/2017
 * Time: 12:40 PM
 */
class Index extends Contoller
{
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $this->view-> render('index/index');
    }

}