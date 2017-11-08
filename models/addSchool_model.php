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
        $this->db->insert('school',$schoolData);
    }
}
