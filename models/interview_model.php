<?php

/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 12/12/2017
 * Time: 1:32 AM
 */
class interview_model extends Model
{
    private $schoolID;
    public function __construct($user_type)
    {
        parent::__construct($user_type);
        Session::init();
        $this->schoolID = Session::get('sch_ID');
    }

    public function loadApplicant(){
        $applicant_ID=$_POST['application_ID'];
        Session::set('applicant_ID',$applicant_ID);
        $stmt=$this->db->prepare("SELECT application_ID,distanceToSchl,academic_staff_ref,state_emp_ref from apply WHERE application_ID= :app_id AND sch_ID= :sch_id");
        $stmt->execute(array(':app_id'=>$applicant_ID,':sch_id' => $this->schoolID));
        $count=$stmt->rowCount();
        if($count){
            return $stmt->fetchAll();
        }
    }

}