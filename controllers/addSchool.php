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