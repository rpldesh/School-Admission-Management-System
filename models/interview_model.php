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
    private $applicantID;
    private $user_ID;
    public function __construct($user_type)
    {
        parent::__construct($user_type);
        Session::init();
        $this->user_ID = Session::get('user_id');
        $this->schoolID = Session::get('sch_ID');
    }

    public function loadApplicantion(){
        $applicant_ID=$_POST['application_ID'];
        $this->applicantID= $applicant_ID;
        $stmt=$this->db->prepare("select applicant.application_ID,applicant.first_name,applicant.last_name,applicant.mother_fName,applicant.mother_LName,
applicant.father_fName,applicant.father_LName,applicant.guardian_fName,applicant.guardian_LName,applicant.gender,applicant.DoB,apply.distanceToSchl,apply.academic_staff_ref,apply.state_emp_ref from applicant natural join apply where
applicant.application_ID=:app_id and apply.sch_ID=:sch_id");
        $stmt->execute(array(':app_id'=>$this->applicantID,':sch_id' => $this->schoolID));
        $count=$stmt->rowCount();
        if($count){
            return $stmt->fetchAll();
        }
        else{
            ?>
            <style>div.alert{display:inline-block;}</style>

            <?php
        }
    }

    public function loadSiblingReference(){
        $stmt = $this->db->prepare("select refer.std_ID,student.first_name,student.last_name,student.achievements from refer natural join student natural join attend
where refer.application_ID=:app_id and attend.sch_ID=:sch_id and refer.reference_type='sibling'");
        $stmt->execute(array(':app_id' => $this->applicantID, ':sch_id' => $this->schoolID));
        return $stmt->fetchAll();
        }

        public function loadParentReference(){
            $stmt=$this->db->prepare("select refer.std_ID,student.first_name,student.last_name,student.achievements from refer natural join student natural join attend
where refer.application_ID=:app_id and attend.sch_ID=:sch_id and refer.reference_type='parent'");
            $stmt->execute(array(':app_id'=>$this->applicantID,':sch_id' => $this->schoolID));
            return $stmt->fetchAll();
        }
        public function distance_result(){
            $sql="select distance_result(".$this->applicantID.",".$this->schoolID.")";
            $stmt=$this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
        }
        public function sibling_ref_result(){
            $stmt=$this->db->prepare("select sib_ref_result(".$this->applicantID.",".$this->schoolID.")");
            $stmt->execute();
            return $stmt->fetch();
        }
        public function parent_ref_result(){
            $stmt=$this->db->prepare("select p_ref_result(".$this->applicantID.",".$this->schoolID.")");
            $stmt->execute();
            return $stmt->fetch();
        }
        public function submitResult($applicantID){
            $distance_mark = $_POST["d_result"];
            $sib_ref_result= $_POST["sib_ref_result"];
            $SA_result = $_POST["SA_result"];
            $sibling_ref_mark=$sib_ref_result+$SA_result;

            $p_ref_result = $_POST["p_ref_result"];
            $PA_result= $_POST["PA_result"];
            $parental_ref_mark=$p_ref_result+$PA_result;

            $academic_ref_mark = $_POST["Aca_ref_result"];
            $state_emp_mark = $_POST["gov_result"];
            $total_mark=$distance_mark+$sibling_ref_mark+$parental_ref_mark+$academic_ref_mark+$state_emp_mark;


            $result = array('application_ID'=>$applicantID,'u_ID'=>$this->user_ID,'distance_mark'=>$distance_mark,
                'parental_ref_mark'=>$parental_ref_mark,'sibling_ref_mark'=>$sibling_ref_mark,'academic_ref_mark'=>$academic_ref_mark,
                'state_emp_mark'=> $state_emp_mark,'total_mark'=>$total_mark);

            //try{
                $this->db->beginTransaction();
                $this->db->insert('interview_result',$result);
                $this->db->commit();
                echo '<script language="javascript">';
                echo 'alert("Successfully inserted")';
                echo '</script>';
           /* }catch (PDOException $e){
                echo '<script language="javascript">';
                echo 'alert("Unable to insert marks:(")';
                echo '</script>';
                $this->db->rollBack();

            }*/
        }
}
