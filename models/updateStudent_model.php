<?php

/**
 * Created by PhpStorm.
 * User: Shalika
 * Date: 11/16/2017
 * Time: 12:18 AM
 */
class UpdateStudent_Model extends Model
{
    private $schoolID;

    public function __construct($user_type)
    {
        parent::__construct($user_type);
        Session::init();
        $this->schoolID = Session::get('sch_ID');
    }

    public function getStuDetails()
    {
        $id=$_POST['std_ID'];
        Session::set('std_ID',$id);

        $stmt=$this->db->prepare("SELECT * FROM student NATURAL JOIN attend WHERE sch_ID=:sch_ID and std_ID=:id and state= 'current' ");
        $stmt->execute(array('sch_ID'=>$this->schoolID,'id' => $id));
        $count1=$stmt->rowCount();
        if($count1){
            return $stmt->fetchAll();
        }
        else{
            $message = "This user Id no longer exist in your school";
            echo "<script type = 'text/javascript' > alert('$message');window . location = 'http://localhost/School-Admission-Management-System/updateStudent';</script>";
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
        $date_of_add=$_POST['date_of_add'];



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
                ':district'=>$district,
                ':date_of_add'=>$date_of_add));
            $this->db->commit();
            echo '<script language="javascript">';
            echo 'alert("Student details updated Successfully!")';
            echo 'window . location = \"http://localhost/School-Admission-Management-System/updateStudent\"';
            echo '</script>';

        } catch (PDOException $e) {
            $this->db->rollBack();
            echo '<script language="javascript">';
            echo 'alert("You may not have privileges to edit student details\n Please recheck and try again")';
            echo 'window . location = \"http://localhost/School-Admission-Management-System/schoolHome\"';
            echo '</script>';
        }
    }
}