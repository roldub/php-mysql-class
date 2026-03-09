<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Connect to MySQL</title>
</head>
<body>
<?php // Script 12.2 - mysqli_connect2.php
/* This script connects to the MySQL database */

// Attempt to connect to MySQL and print message:
if ($dbc = @mysqli_connect('localhost', 'root', '', 'myblog')) {
	
	print '<p>Successfully connected to the database!</p>';
	
	mysqli_close($dbc); // Close connection

} else {
	
	print '<p style="color: red;">Could not connect to database:<br>' . mysqli_connect_error() . '</p>';

}

?>
</body>
</html>
