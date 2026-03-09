<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myblog";

/* Create connection */
$conn = new mysqli($servername, $username, $password, $database);

/* Check connection */
if($conn -> connect_error) {
	die("Connection failed:" . $conn -> connection_error);
}

echo "Connected successfully to myblog database";

?>
