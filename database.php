<?php
//adding a directory using namespace
namespace database;
//connecting to the database
//defining constants
define('DATABASE','gt86');
define('USERNAME','gt86');
define('PASSWORD','RAFRIUUsM');
define('SERVER','sql2.njit.edu');

class dbConn {
	//variable to hold connection object
    protected static $db;
    
    private function __construct() {
      
        try {
           self::$db = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE, USERNAME, PASSWORD);
           //set PDO error mode to exception
           self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           //echo "Successfully connected to the database";
        }
        //output error message if connection failed
        catch(PDOException $e) {
          echo "Unable to connect to the database:" . '<br>' . $e->getMessage();
        }
    }
    //accessible without instantiation
    public static function getConnection() {
   	
   	if(!self::$db) {
   		//create new connection object
   		new dbConn();
   	}
   	//return the connection
   	return self::$db;
    }
}

