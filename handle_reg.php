<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
</head>
<body>
<h1>Registration Results</h1>
<?php // Script 6.2 - handle_reg.php
/* This script recieves seven values from register.html:
	-email, password, confirm, year, terms, color, submit */
	
// Address error management, if you want - Check

// Flag variable to track success: 
$okay = true;

// Error handling
// email
if (empty($_POST['email'])) {
	print '<p>Please enter email</p>';
	$okay = false;
}
// password
if (empty($_POST['password'])) {
	print '<p>Please enter password</p>';
	$okay = false;
}
// confirm password
if ($_POST['password'] !== $_POST['confirm']) {
	print '<p>Passwords do no match</p>';
	$okay = false;
}
// birthdate
if (empty($_POST['year'])) {
	print '<p>Please enter your DOB</p>';
	$okay = false;
}
// color
if (empty($_POST['color'])) {
	print '<p>Please select a color</p>';
	$okay = false;
}
// checkbox
if (empty($_POST['terms'])) {
	print '<p>Agree to terms</p>';
	$okay = false;
}

// If there were no errors, print a success messasge:
if($okay) {
	print '<p>You have been successfully fegistered (but not really).</p>';
}
?>
</body>
</html>
