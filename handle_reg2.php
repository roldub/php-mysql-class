<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<style type="text/css" media="screen"> .error { color: red; }</style>
</head>
<body>
<h1>Registration Results</h1>
<?php
// empty() is a function that checks if the given variable has an "empty" value. These are the
// 		"empty" values: no value, has a value of zero, or has a value of FALSE.
//
// isset() is a function that returns TURE is variable has any value including zero and FALSE
//		and empty string.
//
// is_numeric() is a function that returns TRUE if the given variable has a valid numerical value.
//		Also, important that when using on a variable that doesn't exsist will return FALSE and 
//		generate a warning.
//
/* This script recieves seven values from register.html:
	-email, password, confirm, year, terms, color, submit */
	
// Address error management, if you want - Check

// Flag variable to track success: 
$okay = true;

// Error handling
// email
if (empty($_POST['email'])) {
	print '<p class="error">Please enter email</p>';
	$okay = false;
}
// password
if (empty($_POST['password'])) {
	print '<p class="error">Please enter password</p>';
	$okay = false;
}
// confirm password
if ($_POST['password'] !== $_POST['confirm']) {
	print '<p class="error">Passwords do no match</p>';
	$okay = false;
}
// birthdate
if (empty($_POST['year'])) {
	print '<p class="error">Please enter your DOB</p>';
	$okay = false;
}
// color
if (empty($_POST['color'])) {
	print '<p class="error">Please select a color</p>';
	$okay = false;
}
// checkbox
if (empty($_POST['terms'])) {
	print '<p class="error">Agree to terms</p>';
	$okay = false;
}

// If there were no errors, print a success messasge:
if($okay) {
	print '<p>You have been successfully fegistered (but not really).</p>';
}
?>
</body>
</html>
