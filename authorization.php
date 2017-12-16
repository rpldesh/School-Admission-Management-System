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

//$db->query("DELETE FROM USER");
$db->query("CREATE USER 'principal'@'localhost'");
$db->query("CREATE USER 'interviewer'@'localhost' ");
$db->query("CREATE USER 'inserter'@'localhost' ");
$db->query("CREATE USER 'admin'@'localhost' ");
$db->query("CREATE USER 'clerk'@'localhost' ");
$db->query("GRANT ALL PRIVILEGES ON *.* TO 'principal'@'localhost' ");
$db->query("GRANT ALL PRIVILEGES ON *.* TO 'interviewer'@'localhost' ");
$db->query("GRANT ALL PRIVILEGES ON *.* TO 'inserter'@'localhost' ");
$db->query("GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' ");
$db->query("GRANT ALL PRIVILEGES ON *.* TO 'clerk'@'localhost' ");
//$db->query("REVOKE SELECT ON school_staff FROM 'inserter'@'%localhost'");
//$db->query("REVOKE UPDATE,INSERT ON *.* FROM 'clerk'@'%localhost'");

?>