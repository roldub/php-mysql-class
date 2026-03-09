<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add A Quotation</title>
</head>
<body>
<?php // Script 11.2 - add_quote2.php
/* This script displays and handles an HTML form. This script takes text input and stores it in a text file */

// Identify the file to use:
$file = 'C:/xampp/quotes.txt';

// Check for a form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {// Handle the form
	
	if ( !empty($_POST['quote']) && ($_POST['quote'] != 'Enter your quotation here.') ) { // Need something to write.

		if (is_writable($file)) {
		// Confirm that the file is writeable
		
			file_put_contents($file, $_POST['quote'] . PHP_EOL, FILE_APPEND | LOCK_EX); // Write data

			// Print message:
			print '<p>Your quotation has been stored.</p>';
		
		} else { // Could not open file
			print '<p style="color: red;">Your quotation could not be stored due to system error.</p>';
		}
		
	} else { // Failed to enter a quotation
	print '<p style="color: red;">Please enter a quotation!</p>';
	
	}
	
} // End of submitted IF

// Leave PHP and display form
?>

<form action="add_quote.php" method="post">
	<textarea name="quote" rows="5" cols="30">Enter your quotation here.</textarea><br>
	<input type="submit" name="submit" value="Add This Quote!">
</form>

</body>
</html>
