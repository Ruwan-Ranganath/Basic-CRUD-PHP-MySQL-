<?php
// Form sending name , price , product description and image name to the database
  if (isset($_POST['submit']))
  	{
      // include the connection mysql file
  	include 'connect.php';

    // Get values from form
    $first_name      = $_POST['first_name'];
    $last_name  	 = $_POST['last_name'];
    $email   		 = $_POST['email'];
    $reg_date  		 = $_POST['reg_date'];
    $catagory  		 = $_POST['catagory'];


    // Insert data into mysql
    $sql="INSERT INTO products (name,price,prodesc,featured,tag,image)
    VALUES ('$name', '$price', '$prodesc', '$featured', '$food_type','$image')";
    $result = mysql_query($sql);

    // if successfully insert data into database, displays message "Successful".
    if($result){
    //  echo "successful.$result";
      // Successfull Message area. test for debugs if needed
    }
    else {
      // if error throws a error with mysql_error details
    echo "ERROR" . mysql_error();
    }
    // close mysql
    mysql_close($db_server);

  	        }
  ?>