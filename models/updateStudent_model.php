<?php

/**
 * Created by PhpStorm.
 * User: Shalika
 * Date: 11/16/2017
 * Time: 12:18 AM
 */
class UpdateStudent_Model extends Model
{
    public function __construct($user_type)
    {
        parent::__construct($user_type);
    }

    public function updateStuDet($id)
    {
        $sth=$this->db->prepare("SELECT * FROM student WHERE stu_ID=:id");
        $sth->execute(array('id'=>$id));
        return $sth->fetch();

    }
    public function updateStudentTable($updateStuData){


        $this->db->insert('student',$updateStuData);
    }
}