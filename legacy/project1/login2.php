<?php
session_start(); //starting session
$error = '';
if(isset($_POST['submit'])){
	if(empty($_POST['name']) || empty($_POST['password'])){
				 $error = "Username or Password is invalid";
				 }
				 else{
					//define $username and $password'
						 $username = $_POST['name'];
						 	   $password = $_POST['password'];
							   	     //establish connection with Server
								     		 $connection = mysql_connect("localhost", "root", "");
										 	     //injection protection
											     		 $username = stripslashes($username);
													 	   $password = stripslashes($password);
														   	     $username = mysql_real_escape_string($username);
															     	       $password = mysql_real_escape_string($password);
																       		 //select database
																		 	  $db = mysql_select_db("blog", $connection);
																			      $query = mysql_query("SELECT * FROM users WHERE password = '$password' AND username = '$username'", $connection);
																			      	     $rows = mysql_num_rows($query);
																				     	   if($rows == 1){
																					   	       $_SESSION['login_user']=$username;
																						         header("Location: home.php"); //redirecting to homepage
																							 		   }else{
																									     $error = "Username or Password is invalid";
																									     	    }
																										     mysql_close($connection); //closing connection
																										     }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.25" />
</head>

<body>
	
</body>

</html>
