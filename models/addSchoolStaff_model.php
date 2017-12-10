<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 10-Dec-17
 * Time: 10:46 AM
 */
class AddSchoolStaff_Model extends Model
{
    private $schoolID;

    public function __construct($user_type)
    {
        parent::__construct($user_type);
        Session::init();
        $this->schoolID = Session::get('sch_ID');
    }
    public function showStaff(){

        try {
            $stmt = $this->db->prepare("SELECT u_ID,first_name,last_name,user_type,user_status FROM school_staff NATURAL JOIN users WHERE sch_ID = :sch_id");
            $stmt->execute(array(':sch_id' => $this->schoolID));
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