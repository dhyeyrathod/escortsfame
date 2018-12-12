<?php 
$servername = "localhost";
$username = "escortsfame_index";
$password = "escorts@1234";
$dbname = "escortsfame_world";


//email id : info@escortsfame.com
//password : escorts@1234
 
// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

date_default_timezone_set("Asia/Kolkata");


?>