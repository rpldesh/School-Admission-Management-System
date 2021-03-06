<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 10-Dec-17
 * Time: 10:46 AM
 */
class AddMinStaff extends Controller
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

    function index(){
        $this->view-> render('addMinStaff/index');
    }

    function showStaff()
    {
        $this->view->user_list = $this->model->showStaff();
        $this->index();
    }

    public function createUser(){
        $this->model->createUser();
        $this->view->user_list = $this->model->showStaff();
        $this->index();
    }

    public function disableUser($id){
        $this->model->disableUser($id);
        $this->view->user_list = $this->model->showStaff();
        $this->index();
    }

    public function editUser($id){
        $this->view->user_details= $this->model->editUser($id);
        $this->view->render('addMinStaff/editUser');
    }

    public function editConfirm(){
        $this->model->editConfirm();
        $this->view->user_list = $this->model->showStaff();
        $this->index();
    }
}

?>