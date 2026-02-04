<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Feedback</title>
</head>
<body>
<?php // Script 3.3 handle_form.php

ini_set('display_errors', 1); //Let me learn from my mistakes!

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

<!--
// What security issues do errors and their reporting cause?
	-The main reason the page is left blank by default is because the errors expose
		sensitive information and should not be common knowledge.
		
// What would be a vulnerability for hackers?
	-Any user input that is trusted without proper server-sided validation can allow
		hackers to submit malicious data.
