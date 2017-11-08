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
    }
    function index(){
        $this->view->render('addStudent/index');
    }
    function addStudent(){
        $this->view->render('addStudent/index');
       // $this->model->addStudent();
    }

}