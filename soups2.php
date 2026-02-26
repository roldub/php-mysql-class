<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm...soups</h1>
<?php // Script 7.2 - soups2.php /* This script creates and prints array */

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

// Count and print the current number of elements:
$count1 = count($soups);
print "<p>The soups array originally had $count1 elements.</p>";

// Add three items to array:
$soups['Thursday'] = 'Chicken Noodle';
$soups['Friday'] = 'Tomato';
$soups['Saturday'] = 'Cream of Broccoli';

// Count and print again:
$count2 = count($soups);
print "<p>After adding 3 more soups, the array now had $count2 elements.</p>";

// Print the contents of array:
print_r($soups);

?>
</body>
</html>
