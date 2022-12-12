<?php
include('connectionData.php');
echo $_POST["name"];
//$sql = "INSERT INTO tytable  VALUES($_POST["name"],$_POST["email"],$_POST["grno"],$_POST["rollno"],$_POST["city"],$_POST["cgpa"])";

mysqli_query($connect,$sql);	

?>