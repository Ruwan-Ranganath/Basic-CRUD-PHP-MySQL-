 <html>
  <head>
   
    <title></title>
  </head>
  <style>
    body{
      text-align: center;
    }
  </style>

  <body>
      
      
      
      <?php
require("connect.php");
$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM schoolinfo WHERE id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$first_name=$test['first_name'] ;
				$last_name= $test['last_name'] ;					
				$email=$test['email'] ;
				$reg_date=$test['reg_date'] ;
                $catagory=$test['catagory'] ;

if(isset($_POST['save']))
{	
	$first_name_u = $_POST['first_name'];
	$last_name_u = $_POST['last_name'];
	$email_u = $_POST['email'];
	$reg_date_u = $_POST['reg_date'];
    $catagory = $_POST['catagory'];

	mysql_query("UPDATE schoolinfo SET first_name ='$first_name_u', last_name ='$last_name_u',
		 email ='$email_u',reg_date ='$reg_date_u',catagory = '$catagory' WHERE id = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: Search_data.php");			
}
mysql_close($db_server);
?>
             
      
    <header><h1> School System | Update Form</h1></header>
    <form method="POST" >
       <label> First Name :</label><br/>
       <input type="text" name="first_name" required="" /> <br/>
       <br/>
       <label> Last Name :</label><br/>
       <input type="text" name="last_name" required="" /> <br/>
        <br/>
       <label> E-mail :</label><br/>
       <input type="text" name="email" required="" /> <br/>
       <br/>
        <label> Registration Date :</label><br/>
       <input type="text" name="reg_date" required="" /> <br/>
       <br/>
         <label> Catagory :</label><br/>
       <select name="catagory">
         <option value="Teacher">Teacher</option>
         <option value="Student">Student</option>
       </select> <br/>
      <br/>
       <input type="submit" name="save" value="save"/>
       <input type="submit" name="submit" value="Close"/>

    </form>
    
    </body>
    </html>