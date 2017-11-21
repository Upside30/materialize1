<?php
function Connect()
{
 $dbhost = "fdb6.awardspace.net";
 $dbuser = "2508651_contact";
 $dbpass = "Password123";
 $dbname = "2508651_contact";
 $dbport = "3306";    

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname,$dbport) or die($conn->connect_error);
    
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";
}
?>