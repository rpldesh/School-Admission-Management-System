<?php

/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 11/5/2017
 * Time: 11:28 AM
 */
class Database extends PDO
{
    function __construct($DB_TYPE,$DB_HOST,$DB_NAME,$DB_USER,$DB_PASS)
    {
        parent::__construct($DB_TYPE . ':host=' . $DB_HOST .
            ';dbname=' . $DB_NAME, $DB_USER, $DB_PASS);
    }

    /**
     * @param $table
     * @param $data
     */
    public function insert($table, $data){
        ksort($data);
        $fieldNames=implode('`,`', array_keys($data));
        $fieldValues=':'.implode(', :', array_keys($data));
        echo "INSERT into $table (`$fieldNames`) VALUES ($fieldValues)";
        die;

        $stmt= $this->db->prepare("INSERT into $table (`$fieldNames`) VALUES ($fieldValues)");
        foreach ($data as $key=>$value){
            $stmt->bindValue(":$key",$value);
        }
        $stmt->execute();
    }
    public function update($table,$data,$where){
        ksort($data);
        $fieldDetails=null;
        foreach ($data as $key=>$value){
              $fieldDetails.="`$key`=:$key, ";
        }

        $stmt=$this->db->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        foreach ($data as $key=>$value){
            $stmt->bindValue(":$key ",$value);
        }
        $stmt->execute();

    }
    public function select($table,$fields,$where){
        $stmt=$this->db->prepare("SELECT $fields FROM $table WHERE $where");
        $stmt->execute();
    }
}
?>