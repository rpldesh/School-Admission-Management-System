<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 07-Nov-17
 * Time: 12:27 PM
 */
class SchoolHome_model extends Model
{
    private $user_type;
    private $school_name;

    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged==false){
            Session::destroy();
            header('location:../index');
            exit;
        }
    }

    function addApplicant()
    {

    }
}