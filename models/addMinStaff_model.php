<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 10-Dec-17
 * Time: 10:46 AM
 */
class AddMinStaff_Model extends Model
{

    public function __construct($user_type)
    {
        parent::__construct($user_type);
        Session::init();
    }
    public function showStaff(){

        try {
            $stmt = $this->db->prepare("SELECT u_ID,first_name,last_name,user_type,user_status FROM users WHERE user_type = 'admin' OR user_type = 'clerk'");
            $stmt->execute();
            return $stmt->fetchAll();
            ?>
            <style>div.alert{display:inline-block;}</style>
            <?php
        } catch (PDOException $e) {
            $message = "Your user type does not have privilege to insert new schools ";
            echo "<script type = 'text/javascript' > alert('$message');window . location = \"../index\";</script>";
        }
    }
}
?>