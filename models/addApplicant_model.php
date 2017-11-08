<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 08-Nov-17
 * Time: 3:50 AM
 */
class AddApplicant_Model extends Model
{
    private $user_ID;
    private $sch_ID;

    public function __construct($user_type)
    {
        parent::__construct($user_type);
        $this->user_ID = Session::get('user_ID');
    }
    public function addApplicant(){
        $applicantData=array('application_ID'=>$_POST['application_ID'],'first_name'=>$_POST['app_f_name'],
            'mid_name'=>$_POST['app_m_name'],
            'last_name'=>$_POST['app_l_name'],
            'gender'=>$_POST['gender'],
            'DoB'=>$_POST['dob'],
            'mother_fName'=>$_POST['mother_fName'],
            'mother_LName'=>$_POST['mother_LName'],
            'father_fName'=>$_POST['father_fName'],
            'father_LName'=>$_POST['father_LName'],
            'guardian_fName'=>$_POST['guardian_fName'],
            'guardian_LName'=>$_POST['guardian_LName']);

        $this->db->insert('applicant',$applicantData);



        if (isset($_POST['parent_ref']) || isset($_POST['sibling_ref'])){
            $std_ID=null;
            $reference_type=null;
            if(isset($_POST['parent_ref'])){
                $std_ID=$_POST['parent_ref'];
                $reference_type="parent";
            }elseif(isset($_POST['sibling_ref'])){
                $std_ID=$_POST['sibling_ref'];
                $reference_type="sibling";

            }

            $referData=array('application_ID'=>$_POST['application_ID'],'std_ID'=>$std_ID,'reference_type'=>$reference_type);
            $this->db->insert('refer',$referData);
        }


        $stmt = $this->db->prepare("SELECT sch_ID FROM school_staff WHERE u_ID=:u_ID");
        $stmt->execute(array(
            ':u_ID' => $this->user_ID));

        $count = $stmt->rowCount();
        if ($count > 0) {
            echo "countttttttt".$count;
            $result = $stmt->fetchAll();
            foreach ($result as $row){
                $this->sch_ID = $row['sch_ID'];

                $applyData=array('application_ID'=>$_POST['application_ID'],'sch_ID'=>$this->sch_ID,'distanceToSchl'=>$_POST['distanceToSchl'],'academic_staff_ref'=>$_POST['academic_staff_ref'],'state_emp_ref'=>$_POST['state_emp_ref']);
                $this->db->insert('apply',$applyData);

            }
        }
    }
}