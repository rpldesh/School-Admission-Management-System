<?php

/**
 * Created by PhpStorm.
 * User: Shalika
 * Date: 11/4/2017
 * Time: 8:49 PM
 */
class applicant extends table
{
    var $application_ID=null;
    var $first_name=null;
    var $mid_name=null;
    var $last_name=null;
    var $gender=null;
    var $DoB=null;
    var $mother_fName=null;
    var $mother_LName=null;
    var $father_fName=null;
    var $father_LName=null;
    var $guardian_fName=null;
    var $guardian_LName=null;
    var $tableName="applicant";

    function bind($sql,$dbObj)
    {

        $sql->bind_param("ssssssssssss",$this->application_ID, $this->first_name, $this->mid_name,$this->last_name, $this->gender
            ,$this->DoB,$this->mother_fName,$this->mother_LName,$this->father_fName,$this->father_LName,$this->guardian_fName,$this->guardian_LName);
        $dbObj->doQuery($sql);


    }

}