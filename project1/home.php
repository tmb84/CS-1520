
<?php
//connect to database
mysql_connect("localhost","root","");
mysql_select_db("blog");
?>

<html>
<head>
	<style>
		h1{
				font-family: lucida console
					     }
						body {
							background-color: #35465c;
										color: white
										       }
											#box {
												border-radius: 25px;
														border: 2px solid white;
															    padding: 20px; 
															    	     	   height: 150px; 
																	   	   	  margin: auto;
																			  	   width: 60%   
																				   	  }
																					   .center{
																					     margin: auto;
																					     	      width: 60%;

																						      	     }
																							     </style>
																							     
																							     <title>The Blog</title>
																							     </head>
<body>
	<div class="menu">
	<div style = "width : 960 px; background-color: #778899 ;padding:9px; border:9px solid white;" class="menu">
	<?php include 'menu.php';?>
	</div>
	<h1>The Blog</h1><hr />
	<?php
		$sql = mysql_query("SELECT * FROM blog_posts ORDER BY id DESC");
		     while($row = mysql_fetch_array($sql)){

		     		$title = $row['title'];
				       $post = $row['post'];
				       	     $author_id = $row['author_id'];
					     		$date_posted = $row['date_posted'];
							?>
							

							<h2 class = "center"><?php echo $title; ?></h2>
							<p id ="box"><?php echo $post; ?></p>
							<b><div class="center">Posted By: <?php echo $author_id; ?> on <?php echo $date_posted; ?></div></b>
							</br>
							</br>
							<?php
								}
								?>
</body>
</html>
