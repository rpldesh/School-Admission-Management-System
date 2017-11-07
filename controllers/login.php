<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 07-Nov-17
 * Time: 2:58 AM
 */
class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $this->view-> render('login/index');
    }
    function loginDo()
    {
        $this->model->loginDo();
    }
}