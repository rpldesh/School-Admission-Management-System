<?php
/**
 * Created by PhpStorm.
 * User: DiniX
 * Date: 07-Nov-17
 * Time: 7:43 PM
 */
$db=new Database(DB_TYPE,DB_HOST,DB_NAME,'root',DB_PASS);

$db->query("CREATE USER 'principal'@'%localhost' IDENTIFIED WITH mysql_native_password AS '***'");
$db->query("CREATE USER 'interviewer'@'%localhost' IDENTIFIED WITH mysql_native_password AS '***'");
$db->query("CREATE USER 'inserter'@'%localhost' IDENTIFIED WITH mysql_native_password AS '***'");
$db->query("CREATE USER 'admin'@'%localhost' IDENTIFIED WITH mysql_native_password AS '***'");
$db->query("CREATE USER 'clerk'@'%localhost' IDENTIFIED WITH mysql_native_password AS '***'");



?>+