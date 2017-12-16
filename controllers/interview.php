<?php

/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 12/12/2017
 * Time: 1:21 AM
 */
class Interview extends Controller
{
    function __construct()
    {
        parent::__construct();
        Session::init();
        $loggedIn = Session::get('loggedIn');
        $schoolID = Session::get('sch_ID');
        if ($loggedIn == false) {
            Session::destroy();
            header('location: ' . URL . 'index');
            exit();
        }
    }
    function index(){
        $this->view->render('interview/index');
    }
    function loadApplicant(){
        $this->view->applicant_details = $this->model->loadApplicant();
        $this->view->render('interview/customInterface');
}
}