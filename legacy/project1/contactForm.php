<?php
	mysql_connect("localhost", "root", "");
	mysql_select_db("contact");
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

<title>contact</title>
</head>
<body>
	
	<div style = "width : 960 px; background-color: #778899 ;padding:9px; border:9px solid white;" class="menu">
	     <?php include 'menu.php';?>
	     </div>
	     <h2>Contact!</h2>
	     <?php
		if(!(isset($_SESSION['send'])&& $_SESSION['send']!='')){
							if(isset($_POST['submit'])){
										$name= $_POST['name'];
												$email = $_POST['email'];
														$phone = $_POST['phone'];
														       	  $message = $_POST['message'];


															  	      $sql = mysql_query("INSERT INTO contact(name, email,phone,message) VALUE('$name', '$email','$phone','$message')");
																      	     }
																	      else{
																	        ?>
																		  <form action = 'contactForm.php' method = 'post'>
																		  	       <br/>
																			         Name: <input type = 'text' name ='name'/><br />
																				       	      <br/>
																					        
																						  Phone number: <input type = 'text' name='phone'/><br>
																						  		<br/>
																								  Email: <input type = 'text' name='email'/><br/>
																								  	 	
																										  Message: <br/>
																										  	    <textarea name="message" style="margin: 0px; width: 713px; height: 273px;"></textarea>
																											    	      		     <br/>

																														       <input type = 'submit' name = 'submit' value='send'/>
																														       	      	   </form>

																																    <?php

																																      }
																																        }
																																	 ?>
</body>

</html>
