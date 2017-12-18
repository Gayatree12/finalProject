<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>My Task Application</title>
    <meta name="description" content="Todo Task Management Application">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>

<h1>Final Project - IS601</h1>
<h1>
<?php
//this how to print some data;
$config = Manage::config();
echo $config['site_name'];
?></h1>
<h2>Register</h2>

<form action="index.php?page=accounts&action=register" method="post">
    
    <div class=container>
      <label>Firstname:</label>
      <input type="text" name="fname" placeholder="Enter firstname" required/><br><br>
      <label>Lastname:</label> 
      <input type="text" name="lname" placeholder="Enter lastname" required/><br><br>
      <label>Email:</label> 
      <input type="email" name="email" placeholder="Enter email address" required/><br><br>
      <label>Phone:</label> 
      <input type="tel" name="phone" placeholder="Enter phone number" required/><br><br>
      <label>Birthday:</label> 
      <input type="text" name="birthday" placeholder="yyyy-mm-dd" required/><br><br>
      <label>Gender:</label>
      <input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female<br><br>     
      <label>Password:</label> 
      <input type="password" name="password" required><br><br>
      <input type="submit" value="Submit form">
</div>
</form>

<script src="js/scripts.js"></script>
</body>
</html>
