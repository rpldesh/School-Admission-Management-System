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
    private $sch_ID;

    public function __construct($user_type)
    {
        parent::__construct($user_type);
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged==false){
            Session::destroy();
            header('location:../index');
            exit;
        }
    }


}