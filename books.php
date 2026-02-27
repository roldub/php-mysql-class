<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Larry Ullman's Books and Chapters</title>
</head>
<body>
<h1>Some of Larry Ullman's Books</h1>
<?php // Script 7.4 - books.php
/* This script creates and prints out a multidimensional array. */

// Create 1st array:
$phpvqs = [1 => 'Getting Started with PHP', 'Variables', 'HTML Forms and PHP', 'Using Numbers'];

// Create 2nd array:
$phpadv = [1 => 'Advanced PHP Techniques', 'Developing Web Apps', 'Advanced Database Concepts',
'Basic Object-Oriented Programming'];

// Create 3rd array:
$phpmysql = [1 => 'Intro to PHP', 'Programming with PHP', 'Creating Dynamic Websites', 'Intro to
MySQL'];

// Create multidimensional array:
$books = [
	'PHP VQS' => $phpvqs,
	'PHP Advanced VQP' => $phpadv,
	'PHP and MySQL VQP' => $phpmysql
];

// Print values:
print "<p>The third chapter of my first book is <i>{$books['PHP VQS'][3]}</i>.</p>";
print "<p>The first chapter of my second book is <i>{$books['PHP Advanced VQP'][1]}</i>.</p>";
print "<p>The fourth chapter of my fourth book is <i>{$books['PHP and MySQL VQP'][4]}</i>.</p>";

// See what happens with foreach:
foreach ($books as $key => $value) {
	print "<p>$key: $value</p>\n";
}

?>
</body>
</html>
