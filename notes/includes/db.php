<?php
$servername = "localhost";
$username = "sqluser";
$password = "sqlpass";
//$port = 33061;
$dbname = "notes";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Connection failed " . mysqli_connect_error());
} echo "Connection Successuf!";