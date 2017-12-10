<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 08-Nov-17
 * Time: 3:36 AM
 */
class AddSchool extends Controller
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

    function index(){
        $this->view-> render('addSchool/index');
    }

    function addSchool()
    {
        $this->index();
        $this->model->addSchool();
    }
}