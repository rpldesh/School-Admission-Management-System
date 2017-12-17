<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 17-Dec-17
 * Time: 10:15 PM
 */
class AccSettings_Model extends Model
{
    private $user_id;

    public function __construct($user_type)
    {
        parent::__construct($user_type);
        Session::init();
        $this->user_id = Session::get('user_id');
    }

    public function change(){
        $accountData=array('userID'=>$this->user_id,
            'username'=>$_POST['username'],
            'pwd'=>$_POST['pwd'],
            'pwd2'=>$_POST['pwd2']);
        print_r($accountData);

        $stmt = $this->db->prepare("SELECT u_ID FROM login WHERE username = :username");
        $stmt->execute(array(':username' => $accountData['username']));
        $count = $stmt->rowCount() ;
        $result = $stmt->fetch();
        if ($count>0){
            echo 'inside username exists';
            if($result['u_ID']==$this->user_id){
                echo 'username exists but changes';
                $stmt = $this->db->prepare("UPDATE login SET username = :username , pwd =:password WHERE u_ID=:user_ID");
                $stmt->execute(array(':username' => $accountData['username'],':password' => Hash::create('md5', $accountData['pwd'],HASH_PASSWORD_KEY),':user_ID'=>$this->user_id));
                echo '<script language="javascript">';
                echo 'alert("You may not have privileges to edit user details\n Please recheck and try again")';
                echo 'window . location = \"http://localhost/School-Admission-Management-System/schoolHome\"';
                echo '</script>';
            }else{
                echo 'username exists';
                echo '<script language="javascript">';
                echo 'alert("Username already exists. Try another username")';
                echo '</script>';
            }
        }elseif ($count==0){
            echo 'new username';
            $stmt = $this->db->prepare("UPDATE login SET username = :username , pwd =:password WHERE u_ID=:user_ID");
            $stmt->execute(array(':username' => $accountData['username'],':password' => Hash::create('md5', $accountData['pwd'],HASH_PASSWORD_KEY),':user_ID'=>$this->user_id));
            echo '<script language="javascript">';
            echo 'alert("You may not have privileges to edit user details\n Please recheck and try again")';
            echo 'window . location = \"http://localhost/School-Admission-Management-System/schoolHome\"';
            echo '</script>';
        }

    }
}