
<html>
	<head>
		<title> View Details</title>
		<style>
			body{
				text-align: center;				
			}
		</style>
	</head>
	
	<body>
<table border="1">
	<th>ID </th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>E-Mail Address</th>
	<th>Registraion Date</th>
	<th>Catagory</th>
	
			<?php
	
			include("connect.php");
			
				
			$result=mysql_query("SELECT * FROM schoolinfo");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['id'];	
								
				echo "<tr align='center'>";	
				echo"<td>" .$test['id']."</td>";
				echo"<td>" .$test['first_name']['last_name']."</td>";
				echo"<td>" .$test['last_name']."</td>";
				echo"<td>". $test['email']. "</td>";
				echo"<td>". $test['reg_date']. "</td>";
				echo"<td>". $test['catagory']. "</td>";	
				echo"<td> <a href ='update.php?id=$id'>Edit</a>";
				echo"<td> <a href ='delete_info.php?id=$id'><center>Delete</center></a>";									
				echo "</tr>";
			}
			mysql_close($db_server);
			?>		
	</body>
</html>

