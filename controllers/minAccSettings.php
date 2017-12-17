<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 17-Dec-17
 * Time: 10:14 PM
 */
class MinAccSettings extends Controller
{
    function __construct()
    {
        parent::__construct();
        Session::init();
        $loggedIn = Session::get('loggedIn');
        $userID = Session::get('user_id');
        if($loggedIn == false){
            Session::destroy();
            header('location'.URL.'index');
        }
    }

    function index(){
        $this->view-> render('minAccSettings/index');
    }

    function minChange()
    {
        $this->model->minChange();
        $this->view-> render('minAccSettings/notify');
    }

}