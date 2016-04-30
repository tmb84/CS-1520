<?php
	mysql_connect("localhost", "root", "");
	mysql_select_db("blog");
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

<title>Post a new entry</title>
</head>
<body>
	
	<div style = "width : 960 px; background-color: #778899 ;padding:9px; border:9px solid white;" class="menu">
	     <?php include 'menu.php';?>
	     </div>
	     <h2>Make a post!</h2>
	     <?php
		if(!(isset($_SESSION['login'])&& $_SESSION['login']!='')){
							if(isset($_POST['submit'])){
										$title= $_POST['title'];
													$post = $_POST['post'];
															$author_id = $_POST['author_id'];
																      $date_posted = $_POST['date_posted'];


																      		      $sql = mysql_query("INSERT INTO blog_posts(title, post,author_id,date_posted) VALUE('$title', '$post','$author_id','$date_posted')");
																		      	     }
																			      else{
																			        ?>
																				  <form action = 'admin.php' method = 'post'>
																				  	       <br/>
																					         Title: <input type = 'text' name ='title'/><br />
																						 	       <br/>
																							         Post: <br/>
																								        <textarea name="post" style="margin: 0px; width: 713px; height: 273px;"></textarea>
																										  	      <br/>
																											        Date Posted: <input type = 'date' name='date_posted'/><br>
																												     	     <br/>
																													       Author ID: <input type = 'text' name='author_id'/><br/>

																													       	      	  <input type = 'submit' name = 'submit' value='Post'/>
																															  	      </form>

																																       <?php

																																         }
																																	   }
																																	    ?>
</body>

</html>
