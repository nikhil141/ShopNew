<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pg";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

function IndTime(){
	date_default_timezone_set("Asia/Kolkata");
return date('d-m-Y h:i:s A');
}


?>