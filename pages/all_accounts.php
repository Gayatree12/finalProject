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
  //to print some data;
  $config = Manage::config();
  echo $config['site_name'];
?></h1>

<h2>Account Details</h2>

  <?php    
    $user_data = accounts::findUserbyId($userID);
  ?>

<h1>Hello <?=$user_data->fname?></h1>
								
<ul>
  <li><a href="index.php?page=tasks&action=all">Todos</a>
  </li>
  <li>
  <a href="index.php?page=accounts&action=logout">Logout</a>
  </li>
</ul>

<?php
//to print something
print utility\htmlTable::genarateTableFromMultiArray($data);
?>

<script src="js/scripts.js"></script>
</body>
</html>