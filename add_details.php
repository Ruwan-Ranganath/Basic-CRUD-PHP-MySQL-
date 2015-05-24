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
    <header><h1> School System | Registration Form</h1></header>

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
       <input type="submit" name="submit" value="submit"/>
       <input type="submit" name="submit" value="Close"/>

    </form>



    <?php
    // Form sending name , price , product description and image name to the database
      if (isset($_POST['submit']))
      	{
          // include the connection  file
      	include 'connect.php';

        // Get values from form
        $first_name = mysql_real_escape_string($_POST['first_name']);
        $last_name = mysql_real_escape_string($_POST['last_name']);
        $email = mysql_real_escape_string($_POST['email']);
        $reg_date = mysql_real_escape_string($_POST['reg_date']);
        $catagory = mysql_real_escape_string($_POST['catagory']);

        // Insert data into mysql
        $sql="INSERT INTO schoolinfo (first_name,last_name,email,reg_date,catagory)
        VALUES ('$first_name', '$last_name', '$email', '$reg_date', '$catagory')";
        $result = mysql_query($sql);

        // if successfully insert data into database, displays message "Successful".
        if($result){
          echo "successful";
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


  </body>
</html>
