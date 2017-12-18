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

<h2>All Todos</h2>

<?php
  $userID = $_SESSION["userID"];
  $user_data = accounts::findUserbyId($userID); 
?>

<h3>Hello <?=$user_data->fname?></h3>

<ul>
  <li><a href="index.php?page=accounts&action=all">My Account</a>
  </li>
  <li><a href="index.php?page=tasks&action=create">Add Todos</a>
  </li>
  <li>
  <a href="index.php?page=accounts&action=logout">Logout</a>
  </li>
</ul>

<?php
  //to print something
  if(!empty($data)) {
	  print utility\htmlTable::genarateTableFromMultiArray($data);
  } else {
	echo 'Data not found';
}
?>

<script src="js/scripts.js"></script>
</body>
</html>