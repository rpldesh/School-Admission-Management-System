

<?php

/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 06-Nov-17
 * Time: 11:08 PM
 */

class Login_Model extends Model
{
    private $user_id;
    private $username;
    private $pwd;
    private $user_type;
    private $user_status;

    public function __construct($user_type)
    {
        parent::__construct($user_type);
        /*echo "Anuradha  ";
        echo Hash::create('md5', "Anuradha",HASH_PASSWORD_KEY).'<br />';
        */
    }

    public function loginDo()
    {
        $this->username = $_POST['u_name'];
        $this->pwd = $_POST['psw'];
        $stmt = $this->db->prepare("SELECT user_type,user_status,u_ID FROM login NATURAL JOIN users WHERE username = :username AND pwd = :pwd");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array(
            ':username' => $this->username,
            ':pwd' => Hash::create('md5', $this->pwd, HASH_PASSWORD_KEY)
        ));
        $count = $stmt->rowCount();
        if ($count > 0) {
            $result = $stmt->fetchAll();
            foreach ($result as $row){
                $this->user_type = $row['user_type'];
                $this->user_status = $row['user_status'];
                $this->user_id = $row['u_ID'];

                echo $this->user_id;

                //echo htmlentities($key)."---".htmlentities($value);

            }
            if ($this->user_status == 'active') {
                $this->initLoginSession();

                if ($_SESSION['user_type'] == 'interviewer' || $_SESSION['user_type'] == 'principal' || $_SESSION['user_type'] == 'inserter') {
                    header('location: ../schoolHome');
                } else if ($_SESSION['user_type'] == 'admin' || $_SESSION['user_type'] == 'clerk') {
                    header('location: ../ministryHome');
                }
            } else {
                $message = "Sorry, your account has been deactivated\\nActive your account and try again";
                echo "<script type='text/javascript'>alert('$message');window.location = \" ../index\";</script>";
            }
        } else {
            $message = "Username and/or Password incorrect . \\nTry again . ";
            echo "<script type = 'text/javascript' > alert('$message');window . location = \"../index\";</script>";
        }
    }

    public function initLoginSession() {
        Session::init();
        Session::set('user_id',$this->user_id);
        Session::set('username', $this->username);
        Session::set('user_type', $this->user_type);
        Session::set('loggedIn', true);
    }
}