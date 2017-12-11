 <?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 10-Dec-17
 * Time: 10:46 AM
 */
class AddSchoolStaff_Model extends Model
{
    private $schoolID;

    public function __construct($user_type)
    {
        parent::__construct($user_type);
        Session::init();
        $this->schoolID = Session::get('sch_ID');
    }
    public function showStaff(){

        try {
            $stmt = $this->db->prepare("SELECT u_ID,first_name,last_name,user_type,user_status FROM school_staff NATURAL JOIN users WHERE sch_ID = :sch_id");
            $stmt->execute(array(':sch_id' => $this->schoolID));
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            $message = "Your user type does not have privilege to insert new schools ";
            echo "<script type = 'text/javascript' > alert('$message');window . location = \"../index\";</script>";
        }
    }

    public function createUser(){
        $u_id = $_POST["user_ID"];
        $f_name = $_POST["f_name"];
        $l_name = $_POST["l_name"];
        $user_type = $_POST["user_type"];

        $uData = array('u_ID'=>$u_id,'first_name'=>$f_name,'last_name'=>$l_name,'user_type'=>$user_type,'user_status'=>'active');
        $schData = array('u_ID'=>$u_id,'sch_ID'=>$this->schoolID,'user_type'=>$user_type);

        try {
            $this->db->insert('users', $uData);
            $this->db->insert('school_staff', $schData);
        } catch (PDOException $e) {
            $message = "Your user type does not have privilege to insert new schools ";
            echo "<script type = 'text/javascript' > alert('$message');window . location = \"../index\";</script>";
        }
        ?>
        <style>div.alert{display:inline-block;}</style>
        <?php
    }

    public function disableUser($id)
    {
        try{
            $stmt = $this->db->prepare("UPDATE users SET user_status = 'restricted' WHERE u_ID = :u_id");
            $stmt->execute(array(':u_id' => $id));
        } catch (PDOException $e) {
            $message = "Your user type does not have privilege to insert new schools ";
            echo "<script type = 'text/javascript' > alert('$message');window . location = \"../index\";</script>";
        }
    }

    public function editUser($id){
        try {
            $stmt = $this->db->prepare("SELECT u_ID,first_name,last_name,user_type,user_status FROM users WHERE u_ID = :u_id");
            $stmt->execute(array(':u_id' => $id));
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            $message = "Your user type does not have privilege to insert new schools ";
            echo "<script type = 'text/javascript' > alert('$message');window . location = \"../index\";</script>";
        }
    }

    public function editConfirm(){
        $u_id = $_POST["u_ID"];
        $f_name = $_POST["f_name"];
        $l_name = $_POST["l_name"];
        $user_type = $_POST["u_type"];

        //try {
            $stmt1 = $this->db->prepare('UPDATE users SET first_name=:f_name,last_name= :l_name,user_type=:u_type WHERE u_ID = :u_id');
            $stmt1->execute(array(':f_name'=>$f_name,':l_name'=>$l_name,':u_type'=>$user_type,':u_id'=>$u_id));
            $stmt2 = $this->db->prepare('UPDATE school_staff SET user_type = :u_type WHERE u_ID = :u_id AND sch_ID = :sch_id');
            $stmt2->execute(array(':u_type'=>$user_type,':u_id'=>$u_id,':sch_id'=>$this->schoolID));
        //} //catch (PDOException $e) {
            //$message = "Your user type does not have privilege to insert new schools ";
            //echo "<script type = 'text/javascript' > alert('$message');window . location = \"../index\";</script>";
        //}
        ?>
        <style>div.alert{display:inline-block;}</style>
        <?php
    }
}
?>