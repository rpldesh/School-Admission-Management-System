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

    public function editSchool($id){
        try {
            $stmt = $this->db->prepare("SELECT * FROM School WHERE Sch_ID = :sch_id");
            $stmt->execute(array(':sch_id' => $id));
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            $message = "Your user type does not have privilege to edit user details ";
            echo "<script type = 'text/javascript' > alert('$message');window . location ='http://localhost/School-Admission-Management-System/ministryHome';</script>";
        }
    }

    public function editConfirm(){
        $sch_id = $_POST["sch_ID"];
        $sch_name = $_POST["sch_name"];
        $street_no = $_POST["street_no"];
        $street_name= $_POST["street_name"];
        $city = $_POST["city"];
        $district = $_POST["district"];
        $number_of_vacancies = $_POST["number_of_vacancies"];


        try {
            $stmt1 = $this->db->prepare('UPDATE school SET sch_name=:sch_name, street_no=:street_no, street_name=:street_name, city=:city, district=:district, number_of_vacancies=:vacancies WHERE sch_ID = :sch_id');
            $stmt1->execute(array(':sch_name'=>$sch_name, 'sch_id'=>$sch_id, ':street_no'=>$street_no,':street_name'=>$street_name,':city'=>$city,':district'=>$district,':vacancies'=>$number_of_vacancies ));
        } catch (PDOException $e) {
            echo '<script language="javascript">';
            echo 'alert("Error occurred \n You may not have privileges to proceed")';
            echo '</script>';
        }
    }

}