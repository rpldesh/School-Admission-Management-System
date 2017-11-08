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
        $this->view-> render('showSchool/index');
    }

    function showSchool()
    {
        $this->index();
        $this->model->showSchool();
    }

}