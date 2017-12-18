<?php

/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 11/8/2017
 * Time: 3:44 AM
 */
class AddStudent_Model extends Model
{
    private $user_ID;
    private $sch_ID;
    private $std_ID;
    function __construct($user_type)
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

    public function getStuDetails()
    {

        $stmt=$this->db->prepare("SELECT * FROM student NATURAL JOIN attend WHERE std_ID=:id");
        $stmt->execute(array('id' => $this->std_ID));
        $count1=$stmt->rowCount();
        if($count1){
            return $stmt->fetchAll();
        }
        else{
            $message = "This user Id no longer exist in your school";
            echo "<script type = 'text/javascript' > alert('$message');window . location = 'http://localhost/School-Admission-Management-System/updateStudent';</script>";
        }

    }
    public function get_ID(){
        return $this->std_ID;
    }

    public function checkStuID()
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
                $this->sch_ID = Session::get('sch_ID');
            }
        }

        $std_ID = $_POST['std_ID'];
        $this->std_ID=$std_ID;
        $stmt = $this->db->prepare("SELECT * FROM student WHERE std_ID=:std_ID");
        $stmt->execute(array(':std_ID' => $std_ID));
        $count1 = $stmt->rowCount();
        return $count1;
    }



        public function addExistStudent($id){
        try {
            $dateOfAdmission = $_POST['date_of_add'];
            $admissionData = array(
                'std_ID' => $id,
                'sch_ID' => $this->sch_ID,
                'dateOfAdmission' => $dateOfAdmission,
                'state' => 'current'
            );
            $this->db->beginTransaction();
            $this->db->insert('attend', $admissionData);

            echo '<script language="javascript">';
            echo 'alert("Student is added Successfully!")';
            //echo 'window . location = \"http://localhost/School-Admission-Management-System/updateStudent\"';
            echo '</script>';


        $this->db->commit();

        }catch (Exception $e){
            $this->db->rollBack();
            echo '<script language="javascript">';
            echo 'alert("Error occurred :( Failed to insert")';
            echo '</script>';
        }
        }


        public function addNewStudentDetails(){
        try{
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

        $studentData=array('std_ID'=>$student_ID,
            'first_name'=>$first_name,
            'mid_name'=> $mid_name,
            'last_name'=>$last_name,
            'gender'=> $gender,
            'DoB'=>$dob,
            'street_no'=> $street_no,
            'street_name'=> $street_name,
            'city'=>$city,
            'district'=>$district);

        $this->db->beginTransaction();
        $this->db->insert('student',$studentData);


       if ($_POST['land_phone']!=null){
            $phone1=$_POST['land_phone'];
            $studentPhoneData=array('std_ID'=> $student_ID,'phone_number'=>$phone1);
            $this->db->insert(' studentPhone',$studentPhoneData);

        }
        if ($_POST['mobile_phone1']!=null){
            $phone2=$_POST['mobile_phone1'];
            $studentPhoneData=array('std_ID'=> $student_ID,'phone_number'=>$phone2);
            $this->db->insert(' studentPhone',$studentPhoneData);


        }
        if ($_POST['mobile_phone2']!=null){
            $phone3=$_POST['mobile_phone2'];
            $studentPhoneData=array('std_ID'=> $student_ID,'phone_number'=>$phone3);
            $this->db->insert(' studentPhone',$studentPhoneData);

        }
        
        $stmt = $this->db->prepare("SELECT sch_ID FROM school_staff WHERE u_ID=:user_ID");
        $stmt->execute(array(
            ':user_ID' => $this->user_ID));
        $count = $stmt->rowCount();


        if ($count > 0) {

            $result = $stmt->fetchAll();
            foreach ($result as $row) {
                $this->sch_ID = $row['sch_ID'];
                $date_of_add=$_POST['date_of_add'];
                $admissionData = array(
                    'std_ID'=> $student_ID,
                    'sch_ID'=>$this->sch_ID,
                    'dateOfAdmission'=>$date_of_add,
                    'state'=>'current'
                );
                $this->db->insert('attend',$admissionData);

                echo '<script language="javascript">';
                echo 'alert("Student is added Successfully!")';
                //echo 'window . location = \"http://localhost/School-Admission-Management-System/updateStudent\"';
                echo '</script>';
            }
           
        }$this->db->commit();
        }catch (Exception $e){
            $this->db->rollBack();
            echo '<script language="javascript">';
            echo 'alert("Error occurred :( Failed to insert")';
            echo '</script>';

        }

    }

}
?>