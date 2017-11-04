<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 04-Nov-17
 * Time: 12:55 AM
 */

class student extends table
{

    var $id=null;
    var $first_name=null;
    var $mid_name=null;
    var $last_name=null;
    var $gender=null;
    var $DoB=null;
    var $street_no=null;
    var $street_name=null;
    var $city=null;
    var $district=null;
    var $achievements=null;
    var $tableName="student";

    function bind($sql,$dbObj)
    {

        $sql->bind_param("sssssssssss",$this->id, $this->first_name, $this->mid_name, $this->last_name, $this->gender, $this->DoB,
            $this->street_no,$this->street_name, $this->city ,$this->district, $this->achievements);
        $dbObj->doQuery($sql);


    }
}

?>