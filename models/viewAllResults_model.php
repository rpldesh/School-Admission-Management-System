<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 17-Dec-17
 * Time: 4:54 PM
 */
class viewAllResults_model extends Model
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

    public function getVacancies($sch_id){
        $stmt1 = $this->db->prepare("SELECT number_of_vacancies FROM school WHERE sch_ID = :sch_id");
        $stmt1->execute(array(':sch_id' => $sch_id));
        $result = $stmt1->fetch();
        return $result['number_of_vacancies'];
    }

    public function getResult($sch_id){
        try {
            $stmt = $this->db->prepare("SELECT application_ID,first_name,mid_name,last_name,distance_mark,parental_ref_mark,sibling_ref_mark,academic_ref_mark,
            state_emp_mark,total_mark FROM school_staff NATURAL JOIN interview_result NATURAL JOIN applicant WHERE sch_ID = :sch_id order by total_mark DESC ");
            $stmt->execute(array(':sch_id' => $sch_id));
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            $message = "Your user type does not have privilege to view results ";
            echo "<script type = 'text/javascript' > alert('$message');window . location = 'http://localhost/School-Admission-Management-System/schoolHome';</script>";
        }
    }

    public function getSchoolName($sch_id){
        $stmt3 = $this->db->prepare("SELECT sch_ID,sch_name,city FROM school WHERE sch_ID = :sch_id");
        $stmt3->execute(array(':sch_id' => $sch_id));
        return $stmt3->fetch();
    }

}