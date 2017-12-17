<?php


class AddApplicant_Model extends Model
{
    private $user_ID;
    private $sch_ID;

    public function __construct($user_type)
    {
        parent::__construct($user_type);
        Session::init();
        $this->sch_ID=Session::get('sch_ID');
        $this->user_ID = Session::get('user_id');
        $loggedIn = Session::get('loggedIn');
        if ($loggedIn == false) {
            Session::destroy();
            header('location' . URL . 'index');
            exit();

        }
    }

    public function checkAppID()
    {
        $stt = $this->db->prepare("SELECT sch_ID FROM school_staff WHERE u_ID=:u_ID");
        $stt->execute(array(
            ':u_ID' => $this->user_ID));
        $count4 = $stt->rowCount();
        if ($count4 > 0) {
            $result = $stt->fetchAll();
            foreach ($result as $row) {
                $sch_ID = $row['sch_ID'];
                Session::set('sch_ID', $sch_ID);
                $this->sch_ID=Session::get('sch_ID');
            }
        }

        $application_ID = $_POST['application_ID'];
        Session::set('application_ID', $application_ID);
        $stmt = $this->db->prepare("SELECT * FROM applicant WHERE application_ID=:application_ID");
        $stmt->execute(array(':application_ID' => $application_ID));
        $count1 = $stmt->rowCount();
        return $count1;

    }


    public function addExistApplicantDet(){

        try{
            $application_ID = $_POST['application_ID'];
            $sibling_ref = $_POST['sibling_ref'];
            $parent_ref = $_POST['parent_ref'];
            $distanceToSchl = $_POST['distanceToSchl'];
            $academic_staff_ref = $_POST['academic_staff_ref'];
            $state_emp_ref = $_POST['state_emp_ref'];


            $this->db->beginTransaction();
            if (($parent_ref) != null) {
                $reference_type = "parent";
                $parentStmt = $this->db->prepare("SELECT * FROM attend WHERE std_ID=:std_ID and sch_ID=:sch_ID ");
                $parentStmt->execute(array(
                    ':std_ID' => $parent_ref,
                    ':sch_ID'=>$this->sch_ID));
                $count1 = $parentStmt->rowCount();
                if ($count1 > 0) {

                    $referData=array('application_ID'=>$application_ID,'std_ID'=>$parent_ref,'reference_type'=>$reference_type);
                    $this->db->insert('refer',$referData);
                }else{
                    echo '<script language="javascript">';
                    echo 'alert("Student ID doesn\'t exist";)';
                    echo 'window . location = \"http://localhost/School-Admission-Management-System/..\addApplicant\"';
                    echo '</script>';

                }

            }
            if (($sibling_ref) != null) {
                $reference_type = "sibling";
                $siblingStmt = $this->db->prepare("SELECT * FROM attend WHERE std_ID=:std_ID and sch_ID=:sch_ID ");
                $siblingStmt->execute(array(
                    ':std_ID' => $sibling_ref,
                    ':sch_ID'=>$this->sch_ID));
                $count2 = $siblingStmt->rowCount();
                if ($count2 > 0) {

                    $referData=array('application_ID'=>$application_ID,'std_ID'=>$sibling_ref,'reference_type'=>$reference_type);
                    $this->db->insert('refer',$referData);
                }else{
                    echo '<script language="javascript">';
                    echo 'alert("Error occurred :( Failed to insert")';
                    echo 'window . location = \"http://localhost/School-Admission-Management-System/..\addApplicant\"';
                    echo '</script>';

                }


            }
            $applyData=array('application_ID'=>$application_ID,'sch_ID'=>$this->sch_ID,'distanceToSchl'=>$distanceToSchl,'academic_staff_ref'=>$academic_staff_ref,'state_emp_ref'=>$state_emp_ref);
            $this->db->insert('apply',$applyData);

            $this->db->commit();

            echo '<script language="javascript">';
            echo 'alert("Applicant Added successfully!")';
            echo '</script>';


        }catch(Exception $e){
            $this->db->rollBack();
            echo '<script language="javascript">';
            echo 'alert("Error occurred :( Failed to insert")';
            echo '</script>';

        }


    }


    public function addNewApplicantDet()
    {
        try{
            $application_ID = $_POST['application_ID'];
            $first_name = $_POST['app_f_name'];
            $mid_name = $_POST['app_m_name'];
            $last_name = $_POST['app_l_name'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $mother_fName = $_POST['mother_fName'];
            $mother_LName = $_POST['mother_LName'];
            $father_fName = $_POST['father_fName'];
            $father_LName = $_POST['father_LName'];
            $guardian_fName = $_POST['guardian_fName'];
            $guardian_LName = $_POST['guardian_LName'];
            $sibling_ref = $_POST['sibling_ref'];
            $parent_ref = $_POST['parent_ref'];
            $distanceToSchl = $_POST['distanceToSchl'];
            $academic_staff_ref = $_POST['academic_staff_ref'];
            $state_emp_ref = $_POST['state_emp_ref'];

            $applicantData = array('application_ID' => $application_ID, 'first_name' => $first_name,
                'mid_name' => $mid_name,
                'last_name' => $last_name,
                'gender' => $gender,
                'DoB' => $dob,
                'mother_fName' => $mother_fName,
                'mother_LName' => $mother_LName,
                'father_fName' => $father_fName,
                'father_LName' => $father_LName,
                'guardian_fName' => $guardian_fName,
                'guardian_LName' => $guardian_LName);

            $this->db->beginTransaction();
            $this->db->insert('applicant', $applicantData);


            if (($parent_ref) != null) {
                $std_ID = $parent_ref;
                $reference_type = "parent";
                $parentStmt = $this->db->prepare("SELECT * FROM attend WHERE std_ID=:std_ID and sch_ID=:sch_ID ");
                $parentStmt->execute(array(
                    ':std_ID' => $parent_ref,
                    ':sch_ID'=>$this->sch_ID));
                $count1 = $parentStmt->rowCount();
                if ($count1 > 0) {

                    $referData=array('application_ID'=>$application_ID,'std_ID'=>$std_ID,'reference_type'=>$reference_type);
                    $this->db->insert('refer',$referData);
                }else{
                    $message = "Student ID doesn't exist";
                    echo "<script type = 'text/javascript' > alert('$message');window . location = \"../index\";</script>";

                }

            }
            if (($sibling_ref) != null) {
                $std_ID = $sibling_ref;
                $reference_type = "sibling";
                $siblingStmt = $this->db->prepare("SELECT * FROM attend WHERE std_ID=:std_ID and sch_ID=:sch_ID ");
                $siblingStmt->execute(array(
                    ':std_ID' => $sibling_ref,
                    ':sch_ID'=>$this->sch_ID));
                $count2 = $siblingStmt->rowCount();
                if ($count2 > 0) {

                    $referData=array('application_ID'=>$application_ID,'std_ID'=>$std_ID,'reference_type'=>$reference_type);
                    $this->db->insert('refer',$referData);
                }else{
                    echo '<script language="javascript">';
                    echo 'alert("Error occurred. Failed to insert")';
                    echo 'window . location = \"http://localhost/School-Admission-Management-System/addApplicant\"';
                    echo '</script>';

                }


            }
            $applicationData=array('application_ID'=>$application_ID,'sch_ID'=>$this->sch_ID,'distanceToSchl'=>$distanceToSchl,'academic_staff_ref'=>$academic_staff_ref,'state_emp_ref'=>$state_emp_ref);
            $this->db->insert('apply',$applicationData);

            $this->db->commit();

            echo '<script language="javascript">';
            echo 'alert("Applicant Added successfully!")';
            echo '</script>';

        }catch(Exception $e){
            $this->db->rollBack();
            echo '<script language="javascript">';
            echo 'alert("Error occurred :( Failed to insert")';
            echo '</script>';

        }
    }

}
?>