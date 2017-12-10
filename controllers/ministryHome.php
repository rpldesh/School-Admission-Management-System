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
    }
    function index(){
        $this->view-> render('ministryHome/index');
    }

}