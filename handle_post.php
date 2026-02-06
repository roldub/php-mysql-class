<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>
<body>
<?php // Script 5.2 = handle_post.php
/* This script recieves five values from posting.html:
	first_name
	last_name
	email
	posting
	submit */

// Address error management, if you want.

// Get values from the $_POST array:
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = $_POST['posting'];

// Create a full name variable:
$name = $first_name . ' ' . $last_name;

// Print message:
print "<div>Thank you, $name, for your posting: <p>$posting</p></div>";

?>
</body>
</html>
