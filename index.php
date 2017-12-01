
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
    <div class="input">	
  	  <input type="text" placeholder="Username" name="username" required /><br><br>
  	  <input type="email" placeholder="Email" name="email" required /><br><br>
  	  <input type="text" placeholder="Firstname" name="firstname" required /><br><br>
  	  <input type="text" placeholder="Lastname" name="lastmname" required /><br><br>
  	  <input type="password" placeholder="Password" name="password" required /><br><br>
  	  <input type="password" placeholder="Confirm Password" name="confirm password" required /><br><br>
  	 </div>
  	  <input type="submit" value="Register">
  	
  	<p>Already registered? <a href="login.php">Sign in</a></p>
    </form>
  
 </body>

</html>