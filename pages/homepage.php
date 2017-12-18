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
<h1><?php
  //to print some data;
  $config = Manage::config();
  echo $config['site_name'];
?></h1>

<h2>Login</h2>
<form action="index.php?page=accounts&action=login" method="POST">
   
    <div class="container">
        <label>Username:</label>
        <input type="text" placeholder="Enter your email" name="email" required/><br><br>

        <label>Password:</label>
        <input type="password" placeholder="Enter Password" name="password" required/><br><br>

        <button type="submit">Login</button>
    </div>

<h3><a href="index.php?page=accounts&action=register">Register</a></h3>
</form>

<script src="js/scripts.js"></script>
</body>
</html>
