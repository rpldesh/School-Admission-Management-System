<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 08-Nov-17
 * Time: 3:48 AM
 */
class AddApplicant extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $this->view-> render('addApplicant/index');
    }
    function addApplicant()
    {
        $this->index();
        $this->model->addApplicant();
    }
}