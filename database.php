<?php

//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//define database credentials
define('CONNECTION', 'sql2.njit.edu');
define('DATABASE', 'gt86');
define('USERNAME', 'gt86');
define('PASSWORD', 'RAFRIUUsM');


class dbConn {
    //variable to hold connection object
    protected static $db;
    //private construct-class cannot be instatiated externally
    private function __construct() {
           
            try {
              //assigning PDO object to db variable
              self::$db = new PDO('mysql:host=' . CONNECTION .';dbname=' . DATABASE, USERNAME, PASSWORD);
              //error reporting and throws exceptions
              self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             }

            catch (PDOException $e) {
              //output error if any
              echo "Connection couldn't be established" . '<br>' . $e->getMessage();
             }
        }
    
    //get connection function
    public static function getConnection() {
          //if no connection object exists then create one
          if (!self::$db) {
            //new connection object
            new dbConn();
            }
        
          //return connection
          return self::$db;
        }
}
