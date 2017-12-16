<?php

/**
 * Created by PhpStorm.
 * User: Shalika
 * Date: 11/16/2017
 * Time: 12:18 AM
 */
class UpdateStudent_Model extends Model
{
    public function __construct($user_type)
    {
        parent::__construct($user_type);
        Session::init();
    }

    public function getStuDetails()
    {
        $id=$_POST['std_ID'];
        Session::set('std_ID',$id);
        $sth=$this->db->prepare("SELECT * FROM student WHERE std_ID=:id");
        $sth->execute(array('id'=>$id));
        $count=$sth->rowCount();
        if($count){
            return $sth->fetchAll();
        }

    }
    public function updateDetails(){

        $student_ID=$_POST['student_ID'];
        $first_name=$_POST['student_f_name'];
        $mid_name=$_POST['student_m_name'];
        $last_name=$_POST['student_l_name'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $street_no=$_POST['street_no'];
        $street_name=$_POST['street_name'];
        $city=$_POST['city'];
        $district=$_POST['district'];


        try {
            $this->db->beginTransaction();
            $stmt1 = $this->db->prepare('UPDATE student SET first_name=:first_name,mid_name=:mid_name,last_name=:last_name,gender=:gender,DoB=:DoB,street_no=:street_no,street_name=:street_name,city=:city,district=:district WHERE std_ID = :std_ID');
            $stmt1->execute(array(':std_ID'=>$student_ID,
                ':first_name'=>$first_name,
                ':mid_name'=> $mid_name,
                ':last_name'=>$last_name,
                ':gender'=> $gender,
                ':DoB'=>$dob,
                ':street_no'=> $street_no,
                ':street_name'=> $street_name,
                ':city'=>$city,
                ':district'=>$district));
            $this->db->commit();
        } catch (PDOException $e) {
            $this->db->rollBack();
            echo '<script language="javascript">';
            echo 'alert("You may not have privileges to edit student details\n Please recheck and try again")';
            echo 'window . location = \"http://localhost/School-Admission-Management-System/schoolHome\"';
            echo '</script>';
        }
    }
}