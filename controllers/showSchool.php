<?php

/**
 * Created by PhpStorm.
 * User: Dell-PC
 * Date: 11/8/2017
 * Time: 5:41 PM
 */
class ShowSchool extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view->schools= $this->model->show_school();
        $this->view->count= $this->model->show_count();
        $this->view-> render('showSchool/index');
    }

    public function editSchool($id){
        $this->view->School_details= $this->model->editSchool($id);
        $this->view->render('showSchool/editSchool');
    }

    public function editConfirm(){
        $this->model->editConfirm();
        $this->view->schools = $this->model->show_School();
        $this->index();
    }


}
