<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 08-Nov-17
 * Time: 3:48 AM
 */
class AddApplicant extends Controller
{
    private $countApplication;
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $this->view-> render('addApplicant/index');
    }
    function addNewApplicantDet()
    {
        $this->index();
        $this->model->addNewApplicantDet();
    }
    function addExistApplicantDet()
    {
        $this->index();
        $this->model->addExistApplicantDet();
    }


    function checkAppID(){
        $countApplication=$this->model->checkAppID();
        if($countApplication>0){
            $this->view-> render('addApplicant/addExistApplicant');
        }else{
            $this->view-> render('addApplicant/addNewApplicant');
        }
    }
}