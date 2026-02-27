<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm...soups</h1>
<?php // Script 7.3 - soups3.php /* This script creates and prints array */

// Create array:
$soups = [
	'Monday' => 'Calm Chowder',
	'Tuesday' => 'White Chicken Chili',
	'Wednesay' => 'Chicken Noodle',
	'Thursday' => 'Vegetarian',
	'Friday' => 'Gumbo',
	'Saturday' => 'Tomato Basil',
	'Sunday' => 'French Onion',
];

// Print each key and value:
foreach ($soups as $day => $soup) {
	print "<p>$day: $soup</p>\n";
}

?>
</body>
</html>
