<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 17-Dec-17
 * Time: 4:26 PM
 */
class ViewAllResults extends Controller
{
    function __construct()
    {
        parent::__construct();
        Session::init();
        $loggedIn = Session::get('loggedIn');
        if($loggedIn == false){
            Session::destroy();
            header('location'.URL.'index');
        }
    }

    public function index(){
        $this->view->schools= $this->model->show_school();
        $this->view->count= $this->model->show_count();
        $this->view-> render('viewAllResults/index');
    }

    public function getResult($sch_ID)
    {
        $this->view->vacancies = $this->model->getVacancies($sch_ID);
        $this->view->result_list = $this->model->getResult($sch_ID);
        $this->view->schoolName = $this->model->getSchoolName($sch_ID);
        $this->view-> render('viewAllResults/results');
    }

    public function printResult($sch_ID){
        $this->view->vacancies = $this->model->getVacancies($sch_ID);
        $this->view->result_list = $this->model->getResult($sch_ID);
        $this->view->schoolName = $this->model->getSchoolName($sch_ID);
        $this->view->render('viewAllResults/list');
    }

}