<?php

/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 11/5/2017
 * Time: 11:28 AM
 */
class Model
{
    function __construct() {
        $this->db = new Database(DB_TYPE,DB_HOST,DB_NAME,DB_USER,DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}
?>