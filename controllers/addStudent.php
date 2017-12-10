<?php

/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 11/8/2017
 * Time: 3:43 AM
 */
class AddStudent extends Controller
{
    function __construct()
    {
        parent::__construct();
        Session::init();
        $loggedIn = Session::get('loggedIn');
        if ($loggedIn == false) {
            Session::destroy();
            header('location: ' . URL . 'index');
            exit();
        }
    }
    function index(){
        $this->view->render('addStudent/index');
    }
    function addStudent(){
        $this->index();
        $this->model->addStudent();
    }

}