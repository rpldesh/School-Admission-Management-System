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
    /*function addStudent(){
        $this->index();
        $this->model->addStudent();
    }*/

    function addNewStudentDetails()
    {

        $this->model->addNewStudentDetails();
        $this->index();
    }
    function addExistStudent($id)
    {

        $this->model->addExistStudent($id);
        $this->index();
    }


    function checkStuID(){
        $count_Stu=$this->model->checkStuID();
        if($count_Stu>0){
            $this->view->Stu_Details=$this->model->getStuDetails();
            $this->view-> render('addStudent/addExistStudent');
        }else{
            $this->view-> render('addStudent/addNewStudent');
        }
    }

}