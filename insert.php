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








$name = $_REQUEST['name'];
$emil =  $_REQUEST['emil'];
$password =  $_REQUEST['password'];


$sql = "INSERT INTO adduser (name , emil, password)
VALUES ('$name', '$emil', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>