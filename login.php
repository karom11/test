<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "start";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//=================================


//check user & password






$x = 1223 ; 

$emil = $_REQUEST['emil'];
$password =  $_REQUEST['password'];

$sql = "SELECT *  FROM User  WHERE emil='$emil' and password='$password' ";
$result = $conn->query($sql);

if ($result->num_rows >0) {
  // output data of each row
 
  header("Location: ll.html");

} else {
  echo " GG ";
}

$conn->close();

?>
