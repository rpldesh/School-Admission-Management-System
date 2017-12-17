<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 16-Dec-17
 * Time: 6:10 PM
 */

$connection = mysqli_connect('localhost','root','');
mysqli_select_db($connection,'EMS_DB')or die("Error occurred");


$sql= "Create function distance_result(student_id varchar(20), school_id varchar(10))
    returns int
      begin
         declare d_result int;
         declare distance numeric(5,2);
         set d_result =0;
         select distanceToSchl into distance from apply where apply.application_ID = student_id;
         IF distance <= 1 THEN
            SET d_result = 60;
         ELSEIF distance <=3 THEN
            SET d_result = 48;
         ELSEIF distance <=5 THEN
            SET d_result = 36;
         ELSEIF distance >5 THEN
            SET d_result = 24; 
         END IF;
         RETURN d_result;
      end";
$retval = mysqli_query( $connection, $sql );
if(! $retval ) {
    die('Could not create function: ');
}
echo "Function1 created successfully\n";

$sql= "Create function sib_ref_result(student_id varchar(20), school_id varchar(10))
    returns int
      begin
         declare sib_ref_result int;
         declare row_count int;
         set sib_ref_result =0;
         select count(*) into row_count from refer where application_ID = student_id and reference_type='sibling';
         IF row_count = 1 THEN
            SET sib_ref_result = 5;
         ELSE
            SET sib_ref_result =0; 
         END IF;
         RETURN sib_ref_result;
      end";
$retval = mysqli_query( $connection, $sql );
if(! $retval ) {
    die('Could not create function: ');
}
echo "Function2 created successfully\n";

$sql= "Create function p_ref_result(student_id varchar(20), school_id varchar(10))
    returns int
      begin
         declare p_ref_result int;
         declare p_count int;
         set p_ref_result =0;
         select count(*) into p_count from refer where application_ID = student_id and 
         reference_type='parent';
         IF p_count = 1 THEN
            SET p_ref_result = 5;
         ELSE
            SET p_ref_result =0; 
         END IF;
         RETURN p_ref_result;
      end";
$retval = mysqli_query( $connection, $sql );
if(! $retval ) {
    die('Could not create function: ');
}
echo "Function3 created successfully\n";

?>
