
<html>
 
 <head>
 	<title>My Webpage</title>
 	<link rel="stylesheet" type="text/css" href="styles.css">
 </head>
 
 <body>
  
  <h2>Login</h2>
  
    <form action= "login.php" method= "post" enctype= "multipart/form-data">
      <div class="input">	
  	  <input type="text" placeholder="Username" name="username" required /><br><br>
  	  <input type="text" placeholder="Firstname" name="firstname" required /><br><br>
  	  <input type="text" placeholder="Lastname" name="lastmname" required /><br><br>
  	  <input type="password" placeholder="Password" name="password" required /><br><br>
  	  </div>
      <input type="submit" value="login">
  	
  	<p>Not registered? <a href="index.php">Sign up</a></p>
    </form>
  
 </body>

</html>