<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 07-Nov-17
 * Time: 12:02 PM
 */
class MinistryHome extends Controller
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
        $this->view-> render('ministryHome/index');
    }

}