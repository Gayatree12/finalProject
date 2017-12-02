<?php

define('DATABASE','gt86');
define('USERNAME', 'gt86');
define('PASSWORD', 'RAFRIUUsM');
define('SERVER', 'sql2.njit.edu');

class dbaseConn {
  protected static $db;
  private function __construct() {
  	try {
  		self::$db = new PDO('mysql:host=' . SERVER . ';dbname=' . DATABASE, USERNAME, PASSWORD);
  		self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	}
  	catch(PDOException $e) {
      echo "Connection failed" . '<br>' . $e->getMessage();
  	}
  	
  }
}