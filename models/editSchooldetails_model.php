<?php

/**
 * Created by PhpStorm.
 * User: Dell-PC
 * Date: 12/10/2017
 * Time: 10:47 PM
 */

class editSchooldetails_model extends Model
{
    function __construct($db_user)
    {
        parent:: __construct($db_user);
    }


    public function show_details()
    {
        $stmt= $this->db->prepare("SELECT * FROM School where id=1");
        $stmt->execute();
        return $stmt-> fetchAll();
    }



}