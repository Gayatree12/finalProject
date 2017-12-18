<?php

/*Created using Sublime Text
User: gt86@njit.edu
Project Title: Todo Task Management Application
*/

//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//autoloader class to load all the different directories
include_once "autoload.php";

//database credentials here
include_once "database.php";

//this starts the program as a static. Trace the program from here
$response = http\processRequest::createResponse();
?>





