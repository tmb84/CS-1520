<?php
	mysql_connect("localhost", "root", "");
	mysql_select_db("users");
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: #35465c;
    color: white;

}
h2{
	font-family: lucida console
}
</style>

<title>Signup</title>
</head>
<body>
	
	<div style = "width : 960 px; background-color: #778899 ;padding:9px; border:9px solid white;" class="menu">
	     <?php include 'menu.php';?>
	     </div>
	     <h2>Signup to start posting!</h2>
	     <?php
		if(!(isset($_SESSION['login'])&& $_SESSION['login']!='')){
							if(isset($_POST['submit'])){
										$username = $_POST['username'];
												$password = $_POST['password'];
														


															  $sql = mysql_query("INSERT INTO users(username, password) VALUE('$username','$password')");
															       	 }
																  else{
																    ?>
																      <form action = 'done.php' method = 'post'>
																      	    	   <br/>
																		     
																		       Username: <input type = 'text' name ='username'/><br />
																		       		 	
																					  <br/>
																					    Password: <input type = 'password' name='password'/><br>
																					    	      	     <br/>
																							       

																							         <input type = 'submit' name = 'submit' value='Signup'/>
																								 	     </form>

																									      <?php

																									        }
																										  }
																										   ?>
</body>

</html>
