<?php

  namespace database;
  
  class dbConn {
    //variable to hold connection object
    protected static $db;
    //private construct - class cannot be instatiated externally
    private function __construct() {
        try {
            //assign PDO object to db variable
            self::$db = new \PDO('mysql:host=' . CONNECTION . ';dbname=' . DATABASE, USERNAME, PASSWORD);
            self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            //output error  
            echo "Connection Failed: " . $e->getMessage();
        }
    }
    // get connection function
    public static function getConnection() {
        //create connection object if none exists
        if (!self::$db) {
            //new connection object
            new dbConn();
        }
        //return connection
        return self::$db;
    }
}
?>
