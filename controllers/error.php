<?php

/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 11/5/2017
 * Time: 4:17 PM
 */
class Error extends Controller
{
    function __construct()
    {
        parent::__construct();

    }
    function index(){
        $this->view-> render('error/index');
    }
}