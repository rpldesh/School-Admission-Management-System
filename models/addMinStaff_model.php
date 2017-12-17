<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 10-Dec-17
 * Time: 10:46 AM
 */
class AddMinStaff_Model extends Model
{

    public function __construct($user_type)
    {
        parent::__construct($user_type);
        Session::init();
    }
    public function showStaff(){
        try {
            $stmt = $this->db->prepare("SELECT u_ID,first_name,last_name,user_type,user_status FROM users WHERE user_type = 'admin' OR user_type = 'clerk' AND user_status='active'");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            $message = "Your user type does not have privilege to view user details ";
            echo "<script type = 'text/javascript' > alert('$message');window.location = 'http://localhost/School-Admission-Management-System/ministryHome';</script>";
        }
    }

    public function createUser(){
        $u_id = $_POST["user_ID"];
        $f_name = $_POST["f_name"];
        $l_name = $_POST["l_name"];
        $user_type = $_POST["user_type"];

        $uData = array('u_ID'=>$u_id,'first_name'=>$f_name,'last_name'=>$l_name,'user_type'=>$user_type,'user_status'=>'active');
        $logData = array('u_ID'=>$u_id,'pwd'=>Hash::create('md5', $f_name,HASH_PASSWORD_KEY),'username'=>$f_name);

        try {
            $this->db->beginTransaction();
            $this->db->insert('users', $uData);
            $this->db->insert('login', $logData);
            $this->db->commit();
        } catch (PDOException $e) {
            if ($e->getCode()==23000) {
                echo '<script language="javascript">';
                echo 'alert("Error occurred \nUser ID you entered already exists")';
                echo '</script>';
            }else{
                echo '<script language="javascript">';
                echo 'alert("You may not have privileges to edit user details\nPlease recheck and try again")';
                echo '</script>';
            }
            $this->db->rollBack();
        }
    }

    public function disableUser($id)
    {
        try{
            $stmt = $this->db->prepare("UPDATE users SET user_status = 'restricted' WHERE u_ID = :u_id");
            $stmt->execute(array(':u_id' => $id));
        } catch (PDOException $e) {
            $message = "Your user type does not have privilege to disable users ";
            echo "<script type = 'text/javascript' > alert('$message');window . location = 'http://localhost/School-Admission-Management-System/ministryHome';</script>";
        }
    }

    public function editUser($id){
        try {
            $stmt = $this->db->prepare("SELECT u_ID,first_name,last_name,user_type,user_status FROM users WHERE u_ID = :u_id");
            $stmt->execute(array(':u_id' => $id));
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            $message = "Your user type does not have privilege to edit user details ";
            echo "<script type = 'text/javascript' > alert('$message');window . location ='http://localhost/School-Admission-Management-System/ministryHome';</script>";
        }
    }

    public function editConfirm(){
        $u_id = $_POST["u_ID"];
        $f_name = $_POST["f_name"];
        $l_name = $_POST["l_name"];
        $user_type = $_POST["u_type"];

        try {
            $stmt1 = $this->db->prepare('UPDATE users SET first_name=:f_name,last_name= :l_name,user_type=:u_type WHERE u_ID = :u_id');
            $stmt1->execute(array(':f_name'=>$f_name,':l_name'=>$l_name,':u_type'=>$user_type,':u_id'=>$u_id));
        } catch (PDOException $e) {
            echo '<script language="javascript">';
            echo 'alert("Error occurred \n You may not have privileges to proceed")';
            echo '</script>';
        }
    }
}
?>