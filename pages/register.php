<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Todo Task Management Application</title>
    <meta name="description" content="Todo Task Management Application">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<h1>
<?php
//to print some data
$config = Manage::config();
echo $config['site_name'];
?></h1>

<div class="container">
<h2>Register</h2>
<form action="index.php?page=accounts&action=register" method="post">    
      
      <div class="form-group row">
        <div class="col-xs-3">
          <label for="fname">First Name:</label>
          <input type="text" placeholder="Enter Firstname" class="form-control" id="fname" name="firstname" required />
       </div>
      </div>
      
      <div class="form-group row">
        <div class="col-xs-3">
          <label for="lname">Last Name:</label>
          <input type="text" placeholder="Enter Lastname" class="form-control" id="lname" name="lastname" required />
        </div>
      </div>
      
      <div class="form-group row">
        <div class="col-xs-3">
          <label for="uname">Username:</label>
          <input type="text" placeholder="Enter Username" class="form-control" id="uname" name="username" required />
        </div>
      </div>
      
      <div class="form-group row">
        <div class="col-xs-3">
          <label for="email">Email:</label>      
          <input type="email" placeholder="Enter Email" class="form-control" name="email" required />
        </div>
      </div>

      <div class="form-group row">
        <div class="col-xs-3">
          <label for="contact">Contact number:</label>      
          <input type="tel" placeholder="Enter Contact Number" class="form-control" id="contact" name="contactnumber" required/>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-xs-3">
          <label for="dob">Birthdate:</label>      
          <input type="text" placeholder="mm-dd-yyyy" class="form-control" id="dob" name="birthdate" required/>
        </div>
      </div>
      
       <!--<div class="form-group">-->
      
        <label>Gender:</label><br>        
        <label class="radio-inline"><input type="radio" name="optradio">Male</label>
        <label class="radio-inline"><input type="radio" name="optradio">Female</label>              
      
      <div class="form-group row">         
        <div class="col-xs-3">
          <label for="pwd">Password:</label>        
          <input type="password" placeholder="Enter Password" class="form-control" id="pwd" name="password" required />
        </div>
      </div>          
      
      <button type="submit" class="btn btn-default">Submit</button>

</form>
</div>

</body>
</html>


      