<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentsvit";

// Create connection
$connect = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($connect->connect_error) 
{
  echo "Connection failed: ";
}
else
echo "Connected successfully";

?>