<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>My Task Application</title>
    <meta name="description" content="Todo Task Management Application">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>

<body>
<h1><?php
  //this how to print some data;
  $config = Manage::config();
  echo $config['site_name'];
?></h1>

<h2>Show Account</h2>

  <h3>Email: <?php echo $data->email; ?></h3>
  <h3>First Name: <?php echo $data->fname; ?></h3>
  <h3>Last Name: <?php echo $data->lname; ?></h3>
  <h3>Phone: <?php echo $data->phone; ?></h3>
  <h3>Birthday: <?php echo $data->birthday; ?></h3>
  <h3>Gender: <?php echo $data->gender; ?></h3>

<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete" onClick="return confirm('Are you sure you want to delete this account?');">Delete</button>
</form>
<a href="index.php?page=accounts&action=all"><button type="button">Go Back</button></a>

<script src="js/scripts.js"></script>
</body>
</html>