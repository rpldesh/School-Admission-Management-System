<?php

/**
 * Created by PhpStorm.
 * User: Dell-PC
 * Date: 12/10/2017
 * Time: 9:50 PM
 */
class editSchooldetails extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->view-> render('editSchool/index');
    }



}