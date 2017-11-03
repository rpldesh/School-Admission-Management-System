<?php

class database{
    private $host;
    private $user;
    private $password;
    private $dbName;
    private $connection;
    private $results;

    private static $dbInstance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (! self::$dbInstance){
            self::$dbInstance = new self();
        }
        return self::$dbInstance;
    }

    function connect($host, $user, $password, $dbName){
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbName = $dbName;
        $this->connection = mysqli_connect($this->host,$this->user,$this->password,$this->dbName);
    }

    public function closeConnection(){
        mysqli_close($this->connection);
    }

    public function doQuery($sql){
        $this->results = mysqli_query($this->connection, $sql) or die("Database access failed..!!");
    }

    public function loadObjList(){
        $objArray = null;
        if($this->results){
            $objArray = mysqli_fetch_assoc($this->results);
        }
        return $objArray;
    }

    public function getConnection(){
        return $this->connection;
    }
    public function getResult(){
        return $this->results;
    }
}

?>