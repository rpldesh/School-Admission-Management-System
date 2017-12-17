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
        $this->view->applicantion_details = $this->model->loadApplicantion();
        $this->view->sib_reference_details = $this->model->loadSiblingReference();
        $this->view->parent_reference_details = $this->model-> loadParentReference();
        $this->view->d_result=$this->model->distance_result();
        $this->view->sib_ref_result=$this->model->sibling_ref_result();
        $this->view->p_ref_result=$this->model->parent_ref_result();

        $this->view->render('interview/customInterface');
    }
    function submitResult($applicantID){
        $this->model->submitResult($applicantID);
        $this->index();
    }

}