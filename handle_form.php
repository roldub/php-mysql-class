<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Feedback</title>
</head>
<body>
<?php // Script 3.3 handle_form.php

// This page receives data from feedback.html
// It will recieve: title, name, email, response, comments, and submit in $_POST

// Create shorthand versions of variables:
$title = $_POST['title'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$response = $_POST['response'];
$comments = $_POST['comments'];

//Print received data
print "<p>Thank you, $title $first_name $last_name, for your comments.</p>
<p>You stated that you found this example to be '$response' and added:<br>$comments</p>";

?>
</body>
</html>
