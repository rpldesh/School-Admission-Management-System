<?php
/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 11/3/2017
 * Time: 3:11 PM
 */
include("database.php");
include("table.php");
include("school.php");
$s=new school();
$s->number_of_vacancies=33;
$s->district='Gampaha';
$s->id=124;
$s->sch_name='RBV';
$s->insert($dbObj);
?>