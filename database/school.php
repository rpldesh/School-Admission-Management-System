<?php

/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 11/3/2017
 * Time: 11:30 AM
 */
class school extends table
{

    var $id=null;
    var $sch_name=null;
    var $street_no=null;
    var $street_name=null;
    var $city=null;
    var $district=null;
    var $number_of_vacancies=null;
    var $tableName="school";

    function bind($sql,$dbObj)
    {

        $sql->bind_param("ssssssd",$this->id, $this->sch_name, $this->street_no,$this->street_name, $this->city
        ,$this->district,$this->number_of_vacancies);
        $dbObj->doQuery($sql);


    }
}

?>