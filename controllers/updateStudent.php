<?php

/**
 * Created by PhpStorm.
 * User: Shalika
 * Date: 11/16/2017
 * Time: 12:15 AM
 */

class UpdateStudent extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->view-> render('updateStudent/index');
    }
    function getStuDetails()
    {
        $this->view->Stu_details = $this->model->getStuDetails();
        $this->view->render('updateStudent/changeStuDetails');
    }

    public function updateDetails(){
        $this->model->updateDetails();
        $this->index();



    }
}