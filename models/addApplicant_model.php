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
        Session::init();
        $this->user_ID = Session::get('user_ID');
        $loggedIn=Session::get('loggedIn');
        if($loggedIn==false){
            Session::destroy();
            header('location'.URL.'index');
            exit();

        }
    }
    public function addApplicant(){

        $application_ID=$_POST['application_ID'];
        $first_name=$_POST['app_f_name'];
        $mid_name=$_POST['app_m_name'];
        $last_name=$_POST['app_l_name'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $mother_fName=$_POST['mother_fName'];
        $mother_LName=$_POST['mother_LName'];
        $father_fName=$_POST['father_fName'];
        $father_LName=$_POST['father_LName'];
        $guardian_fName=$_POST['guardian_fName'];
        $guardian_LName=$_POST['guardian_LName'];
        $sibling_ref=$_POST['sibling_ref'];
        $parent_ref=$_POST['parent_ref'];
        $distanceToSchl=$_POST['distanceToSchl'];
        $academic_staff_ref=$_POST['academic_staff_ref'];
        $state_emp_ref=$_POST['state_emp_ref'];

        $applicantData=array('application_ID'=>$application_ID,'first_name'=>$first_name,
            'mid_name'=>$mid_name,
            'last_name'=>$last_name,
            'gender'=>$gender,
            'DoB'=>$dob,
            'mother_fName'=>$mother_fName,
            'mother_LName'=>$mother_LName,
            'father_fName'=>$father_fName,
            'father_LName'=>$father_LName,
            'guardian_fName'=>$guardian_fName,
            'guardian_LName'=>$guardian_LName);

        $this->db->insert('applicant',$applicantData);


        echo "parent..".$parent_ref;
        echo "sibling..".$sibling_ref;
        if(isset($parent_ref)!=null){
            echo "in isset parent\n";
            $std_ID=$parent_ref;
            $reference_type="parent";
            $referData=array('application_ID'=>$application_ID,'std_ID'=>$std_ID,'reference_type'=>$reference_type);
            $this->db->insert('refer',$referData);
        }
        if(isset($sibling_ref)!=null){
            echo "in isset Sibling\n";
            $std_ID=$sibling_ref;
            $reference_type="sibling";
            $referData=array('application_ID'=>$application_ID,'std_ID'=>$std_ID,'reference_type'=>$reference_type);
            $this->db->insert('refer',$referData);
        }


        echo "user iddddddddddd ".$this->user_ID;
        $stmt = $this->db->prepare("SELECT sch_ID FROM school_staff WHERE u_ID=:u_ID");
        $stmt->execute(array(
            ':u_ID' => $this->user_ID));
        $count = $stmt->rowCount();
        echo $count;
        if ($count > 0) {
            echo "countttttttt".$count;
            $result = $stmt->fetchAll();
            foreach ($result as $row){
                $this->sch_ID = $row['sch_ID'];

                $applyData=array('application_ID'=>$application_ID,'sch_ID'=>$this->sch_ID,'distanceToSchl'=>$distanceToSchl,'academic_staff_ref'=>$academic_staff_ref,'state_emp_ref'=>$state_emp_ref);
                $this->db->insert('apply',$applyData);

            }
        }
    }
}