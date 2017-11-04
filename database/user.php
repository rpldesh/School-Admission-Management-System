<?php

/**
 * Created by PhpStorm.
 * User: Shalika
 * Date: 11/4/2017
 * Time: 8:49 PM
 */
class user extends table
{
    var $u_ID;
    var $user_type;
    var $first_name;
    var $last_name;
    var $street_no;
    var $streat_name;
    var $city;
    var $user_status;
    var $tableName="user";

    function bind($sql,$dbObj)
    {

        $sql->bind_param("ssssssss",$this->u_ID, $this->user_type, $this->first_name,$this->last_name, $this->street_no
            ,$this->streat_name,$this->city,$this->user_status);
        $dbObj->doQuery($sql);


    }
}