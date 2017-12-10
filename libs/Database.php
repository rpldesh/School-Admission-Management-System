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
        parent::__construct($DB_TYPE . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASS);
    }

    /**
     * @param $table
     * @param $data
     */
    public function insert($table, $data){
        ksort($data);
        $fieldNames=implode('`,`', array_keys($data));
        $fieldValues=':'.implode(', :', array_keys($data));

        $stmt= $this->prepare("INSERT into $table (`$fieldNames`) VALUES ($fieldValues)");

        foreach ($data as $key=>$value){
            $stmt->bindValue(":$key",$value);

        }

        //print_r($data);
        //echo "INSERT into $table (`$fieldNames`) VALUES ($fieldValues)";

        $stmt->execute();
    }

    public function update($table,$data,$where){
        ksort($data);
        $fieldDetails=null;
        foreach ($data as $key=>$value){
              $fieldDetails.="`$key`=:$key, ";
        }

        $stmt=$this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        foreach ($data as $key=>$value){
            $stmt->bindValue(":$key ",$value);
        }
        $stmt->execute();
    }

}
?>