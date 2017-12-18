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

<h2>Edit Account Details</h2>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">
    <label>First name:</label> 
    <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br>
    <label>Last name:</label> 
    <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
    <label>Email:</label> 
    <input type="text" name="email" value="<?php echo $data->email; ?>"><br>
    <label>Phone:</label> 
    <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
    <label>Birthday:</label> 
    <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
    <label>Gender:</label> 
    <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <input type="submit" value="Submit form">
</form>

<a href="index.php?page=accounts&action=all"><button type="button">Go Back</button></a>

<script src="js/scripts.js"></script>
</body>
</html>