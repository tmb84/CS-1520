<?php
include('login2.php');//include login script 

if(isset($_SESSION['login_user'])){
	header("Location: home.php"); //homepage
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<style>
		body {
			background-color: #35465c;
						color: white;
						       }
							h1{
									font-family: lucida console
										     }

										     </style>
										     <title>Login</title>
										     <meta http-equiv="content-type" content="text/html;charset=utf-8" />
										     <meta name="generator" content="Geany 1.25" />
										     <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="main">
	<h1>Welcome to the Blog!</h1>
	<div id="login">
	<h2>Please login</h2>
	<form action="" method="post">
	<label>Username :</label>
	<input id="name" name="name" placeholder="username" type="text">
	</br>
	</br>
	<label>Password :</label>
	<input id="password" name="password" placeholder="**********" type="password">
	</br>
	<input name="submit" type="submit" value=" Login ">
	<span><?php echo $error; ?></span>
	</form>
	</div>
	</div>
</body>

</html>
