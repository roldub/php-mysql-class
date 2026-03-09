<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View A Quotation</title>
</head>
<body>
<h1>Random Quotation</h1>
<?php // Script 11.3 - veiw_quote.php
/* This script displays and handles an HTML form. This script reads in a file and prints a random line from it */

// Read the file's contents into an array:
$data = file('C:/xampp/quotes.txt');

// Count number of items in the array:
$n = count($data);

// Pick random item:
$rand = rand(0, ($n - 1));

// Print the quotation:
print '<p>' . trim($data[$rand]) . '</p>';

?>
</body>
</html>
