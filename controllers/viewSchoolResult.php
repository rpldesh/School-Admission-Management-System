<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 17-Dec-17
 * Time: 1:01 AM
 */
class ViewSchoolResult extends Controller
{
    function __construct()
    {
        parent::__construct();
        Session::init();
        $loggedIn = Session::get('loggedIn');
        $schoolID = Session::get('sch_ID');
        if($loggedIn == false){
            Session::destroy();
            header('location'.URL.'index');
        }
    }

    public function index(){
        $this->view-> render('viewSchoolResult/index');
    }

    public function getResult()
    {
        $this->view->vacancies = $this->model->getVacancies();
        $this->view->result_list = $this->model->getResult();
        $this->index();
    }

    public function printResult(){
        $this->view->vacancies = $this->model->getVacancies();
        $this->view->result_list = $this->model->getResult();
        $this->view->schoolName = $this->model->getSchoolName();
        $this->view->render('viewSchoolResult/list');
    }

}