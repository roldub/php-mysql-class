<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sticky Text Inputs</title>
</head>
<body>
<?php // Script 10.3 - sticky2.php
/* This script defines and calls a function that creates a sticky text input. */

// This function makes a sticky text input
// This function requires two arguments be passed to it.
// A third arg is optional (default value)

function make_text_input($name, $label, $size = 20) {
	
	// Begin paragraph and label
	print '<p><label>' . $label . ':';
	
	// Begin input:
	print '<input type="text" name="' . $name . '" size="' . $size . '" ';
	
	// Add value:
	if (isset($_POST[$name])) {
		print ' value="' . htmlspecialchars($_POST[$name]) . '"';
	}
	
	// Complete input, label and paragraph
	print '></label></p>';
	
} // End of make_text_input

// Make the form
print '<form action="" method="post">';

// Create text
make_text_input('first_name', 'First Name');
make_text_input('last_name', 'Last Name', 30);
make_text_input('email', 'Email Address', 50);

print '<input type="submit" name="submit" value="Register!"></form>';

?>
</body>
</html>
