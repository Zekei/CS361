//This is a the home page 

//Connect to MySql server 
<?php
// Create connection
$con=mysqli_connect("oniddb.cws.oregonstate.edu","quinnsa-db","wScgeUPlbiueDdlM","quinnsa-db");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
