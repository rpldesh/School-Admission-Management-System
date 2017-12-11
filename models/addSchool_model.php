<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 08-Nov-17
 * Time: 3:44 AM
 */
class AddSchool_Model extends Model
{
    public function __construct($user_type)
    {
        parent::__construct($user_type);
    }
    public function addSchool(){
        $schoolData=array('sch_ID'=>$_POST['sch_ID'],
            'sch_name'=>$_POST['sch_name'],
            'street_no'=>$_POST['street_no'],
            'street_name'=>$_POST['street_name'],
            'city'=>$_POST['city'],
            'district'=>$_POST['district'],
            'number_of_vacancies'=>$_POST['vacancies']);

        try {
            $c = $this->db->insert('school',$schoolData);
            if ($c==0){
                $message = "Error occured\n Please check if a school under same ID already exists in the system";
                echo "<script type = 'text/javascript' > alert('$message');window . location = 'http://localhost/School-Admission-Management-System/schoolHome';</script>";
            }else{
            ?>
            <style>div.alert{display:inline-block;}</style>
            <?php }
        } catch (PDOException $e) {
            if ($e->getCode()==23000) {
                echo '<script language="javascript">';
                echo 'alert("Error occured \n School ID you entered already exists in the system")';
                echo 'window . location = \"http://localhost/School-Admission-Management-System/schoolHome\"';
                echo '</script>';
            }else{
                echo '<script language="javascript">';
                echo 'alert("You may not have privileges to add new schools to the system\n Please recheck and try again")';
                echo 'window . location = \"http://localhost/School-Admission-Management-System/schoolHome\"';
                echo '</script>';
            }
        }
    }
}
?>