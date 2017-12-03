<?php

/*Created using: Sublime Text
  User: gt86
  Title: Todo Task Management Application
*/

//turn on display errors
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);
 //load different files
  include_once "autoload.php";
  include_once "database.php";
?>

<html>
 
 <head>
 	<title>Application Management</title>
 	<link rel="stylesheet" type="text/css" href="styles.css">
 </head>
 
 <body>
  <h1>Final Project - IS601</h1>
  <h1>Todo Task Management Application</h1>
  <h2>Create an account</h2>
  
    <form action= "index.php" method= "post" enctype= "multipart/form-data">
      <div class= "warning-error"><?php $_SESSION['message']?></div>
      <div class="input">	
      <!--validation applied-->
  	  <input type="text" placeholder="Username" name="username" required /><br><br>
  	  <input type="email" placeholder="Email" name="email" required /><br><br>
  	  <input type="text" placeholder="Firstname" name="firstname" required /><br><br>
  	  <input type="text" placeholder="Lastname" name="lastmname" required /><br><br>
  	  <input type="password" placeholder="Password" name="password" required /><br><br>
  	  <input type="password" placeholder="Confirm Password" name="confirmpassword" required /><br><br>
  	  </div>
  	  <input type="submit" value="Register">
  	
  	<p>Already registered? <a href="login.php">Sign in</a></p>
    </form>
  
 </body>

</html>