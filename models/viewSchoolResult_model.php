<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 17-Dec-17
 * Time: 1:12 AM
 */
class ViewSchoolResult_model extends Model
{
    private $schoolID;

    public function __construct($user_type)
    {
        parent::__construct($user_type);
        Session::init();
        $this->schoolID = Session::get('sch_ID');
    }

    public function getVacancies(){
        $stmt1 = $this->db->prepare("SELECT number_of_vacancies FROM school WHERE sch_ID = :sch_id");
        $stmt1->execute(array(':sch_id' => $this->schoolID));
        $result = $stmt1->fetch();
        return $result['number_of_vacancies'];
    }

    public function getResult(){
        try {
            $stmt = $this->db->prepare("SELECT application_ID,first_name,mid_name,last_name,distance_mark,parental_ref_mark,sibling_ref_mark,academic_ref_mark,
            state_emp_mark,total_mark FROM school_staff NATURAL JOIN interview_result NATURAL JOIN applicant WHERE sch_ID = :sch_id order by total_mark DESC ");
            $stmt->execute(array(':sch_id' => $this->schoolID));
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            $message = "Your user type does not have privilege to view users ";
            echo "<script type = 'text/javascript' > alert('$message');window . location = 'http://localhost/School-Admission-Management-System/schoolHome';</script>";
        }
    }

    public function getSchoolName(){
        $stmt3 = $this->db->prepare("SELECT sch_name,city FROM school WHERE sch_ID = :sch_id");
        $stmt3->execute(array(':sch_id' => $this->schoolID));
        return $stmt3->fetch();
    }

}