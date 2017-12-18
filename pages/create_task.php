<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Task Application</title>
    <meta name="description" content="Todo Task Management Application">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
 <h1><?php
 //to print some data
 $config = Manage::config();
 echo $config['site_name'];
 ?></h1>

 <h1>Add Todos</h1>

<?php
  $userID = $_SESSION["userID"];
  $user_data = accounts::findUserbyId($userID);
?>

<h1>Hello <?=$user_data->fname?></h1>
								
<ul>
  <li><a href="index.php?page=accounts&action=all">My Account</a>
  </li>
  <li><a href="index.php?page=tasks&action=all">All Todos</a>
  </li>
  <li>
  <a href="index.php?page=accounts&action=logout">Logout</a>
  </li>
</ul>

 <form action="index.php?page=tasks&action=save" method="post">
 <label>Title:</label><br>
   <input type="text" name="title" id="title" required/><br>
 <label>Body:</label><br>  
	 <textarea name="body" id="body" required></textarea><br>
 <label>Is Done:</label><br>
   <input type="checkbox" name="isdone" id="isdone" value="1"><br>
   <input type="submit" value="Submit form">
</form>

<a href="index.php?page=tasks&action=all">Go Back</a>
<script src="js/scripts.js"></script>
</body>
</html>