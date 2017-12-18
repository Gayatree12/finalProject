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

<h1>Edit Todos Details</h1>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h2>Hello <?=$user_data->fname?></h2>
								
<ul>
  <li><a href="index.php?page=accounts&action=all">My Account</a>
  </li>
  <li><a href="index.php?page=tasks&action=all">All Todos</a>
  </li>
  <li>
  <a href="index.php?page=accounts&action=logout">Logout</a>
  </li>
</ul>

<form action="index.php?page=tasks&action=store&id=<?php echo $data->id; ?>" method="post">
	<label>Title:</label>
  <input type="text" name="title" id="title" value="<?php echo $data->title; ?>" required><br>
	<label>Body:</label> 
  <textarea name="body" id="body" required><?php echo $data->body; ?></textarea><br>
	<label>Is Done:</label> 
  <input type="checkbox" name="isdone" id="isdone" value="1" <?php if($data->isdone == '1'){echo 'checked="checked"';}?>><br>
	<input type="hidden" name="id" id="id" value="<?php echo $data->id; ?>">
  <input type="submit" value="Submit form">
</form>

<a href="index.php?page=tasks&action=all">Go Back</a>
<script src="js/scripts.js"></script>
</body>
</html>