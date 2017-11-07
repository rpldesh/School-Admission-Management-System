<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 07-Nov-17
 * Time: 7:43 PM
 */
include "libs/Database.php";
include "config.php";
$db=new Database(DB_TYPE,DB_HOST,DB_NAME,'root',DB_PASS);

$db->query("DELETE FROM USER");
$db->query("CREATE USER 'principal'@'%localhost' IDENTIFIED WITH mysql_native_password AS '***'");
$db->query("CREATE USER 'interviewer'@'%localhost' IDENTIFIED WITH mysql_native_password AS '***'");
$db->query("CREATE USER 'inserter'@'%localhost' IDENTIFIED WITH mysql_native_password AS '***'");
$db->query("CREATE USER 'admin'@'%localhost' IDENTIFIED WITH mysql_native_password AS '***'");
$db->query("CREATE USER 'clerk'@'%localhost' IDENTIFIED WITH mysql_native_password AS '***'");
$db->query("GRANT SELECT, INSERT, UPDATE ON *.* TO 'principal'@'%localhost' ");
$db->query("GRANT SELECT, INSERT, UPDATE ON *.* TO 'interviewer'@'%localhost' ");
$db->query("GRANT SELECT, INSERT, UPDATE ON *.* TO 'inserter'@'%localhost' ");
$db->query("GRANT SELECT, INSERT, UPDATE ON *.* TO 'admin'@'%localhost' ");
$db->query("GRANT SELECT, INSERT, UPDATE ON *.* TO 'clerk'@'%localhost' ");
?>