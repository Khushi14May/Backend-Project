<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "hospmngdb";

$conn = mysqli_connect($server, $username, $password, $database);
// echo "connection successfull";
 if (!$conn){
     die("Error". mysqli_connect_error());
 }

?>
