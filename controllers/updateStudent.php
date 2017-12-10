<?php

/**
 * Created by PhpStorm.
 * User: Shalika
 * Date: 11/16/2017
 * Time: 12:15 AM
 */

class UpdateStudent extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->view->Stu_details=$this->model->updateStuDet();
        $this->view-> render('updateStudent/index');
    }
    function updateStuDet($id)
    {
        $this->index();
        $this->model->updateStuDet();
    }
    function getId($id){
        
    }

    public function updateStudentTable(){


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

        $updateStuData=array('std_ID'=>$student_ID,
            'first_name'=>$first_name,
            'mid_name'=> $mid_name,
            'last_name'=>$last_name,
            'gender'=> $gender,
            'DoB'=>$dob,
            'street_no'=> $street_no,
            'street_name'=> $street_name,
            'city'=>$city,
            'district'=>$district);


        $this->model->updateStudentTable($updateStuData);
        header('location:'.URL.'updateStudent');

    }
}