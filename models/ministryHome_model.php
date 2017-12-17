<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 08-Nov-17
 * Time: 3:06 AM
 */
class MinistryHome_Model extends Model
{

    public function __construct($user_type)
    {
        parent::__construct($user_type);
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('location:../index');
            exit;
        }
    }

    function addSchool(){

    }

}