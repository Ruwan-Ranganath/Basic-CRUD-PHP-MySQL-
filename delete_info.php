<?php
  include("connect.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	mysql_query("DELETE FROM schoolinfo WHERE id = '$id'")
	or die(mysql_error());  	
	
	header("Location: Search_data.php");
?> 