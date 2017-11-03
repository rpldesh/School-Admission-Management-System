<?php
$connection = mysqli_connect('localhost','root','');
$sql='CREATE Database EMS_DB';
$retval=mysqli_query($connection,$sql);
if(! $retval){
    die('Could not create the database: ');
}

echo "Database EMS_DB created successfully\n";
mysqli_close($connection);
?>
