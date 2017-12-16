<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 16-Dec-17
 * Time: 6:10 PM
 */

$connection = mysqli_connect('localhost','root','');
mysqli_select_db($connection,'EMS_DB')or die("Error occurred");


$sql= "Create function distance_result(student_id varchar(20))
    returns int
      begin
         declare d_result int;
         declare distance numeric(5,2);
         set d_result =0;
         select distanceToSchl into distance from apply where application_ID = student_id;
         IF distance <= 1 THEN
            SET d_result = 60;
         ELSEIF distance <=3 THEN
            SET d_result = 48;
         ELSEIF distance <=5 THEN
            SET d_result = 36;
         ELSE
            SET d_result = 24; 
         END IF;
         RETURN d_result;
      end";
$retval = mysqli_query( $connection, $sql );
if(! $retval ) {
    die('Could not create function: ');
}
echo "Function created successfully\n";

?>
