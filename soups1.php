<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm...soups</h1>
<?php // Script 7.1 - soups1.php /* This script creates and prints array */

// Create array:
$soups = [
	'Monday' => 'Calm Chowder',
	'Tuesday' => 'White Chicken Chili',
	'Wednesay' => 'Vegetarian',
	'Thursday' => 'Chicken Noodle',
	'Friday' => 'Gumbo',
	'Saturday' => 'Tomato Basil',
	'Sunday' => 'French Onion',
];

// Try to print:
print "<p>$soups</p>";

// Print the contents of array:
print_r($soups);

?>
</body>
</html>
