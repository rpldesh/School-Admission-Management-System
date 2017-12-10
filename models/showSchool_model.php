<?php

/**
 * Created by PhpStorm.
 * User: Dell-PC
 * Date: 11/8/2017
 * Time: 5:51 PM
 */
class showSchool_model extends Model
{
    function __construct($db_user)
    {
        parent::__construct($db_user);
    }

    public function show_school()
    {
        $stmt= $this->db->prepare("SELECT * FROM school");
        $stmt->execute();
        return $stmt->fetchAll();


    }
    public function show_count(){
        $stmt= $this->db->prepare("SELECT * FROM school");
        $stmt->execute();
        $count = $stmt->rowCount();
        return $count;
    }

}