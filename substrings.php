<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Finding Substrings</title>
</head>
<body>
<?php
// Example 1 - strlen() - Counts characters in a string
$name = "Roland William Dreher";
$length = strlen($name);
echo "$length<br>";
?>

<?php
// Example 2 - strpos() - Finds position(0) of substring
$text = "I am finding position of this";
$position = strpos($text, "this");
echo "$position<br>";
?>

<?php
// Example 3 - str_replace() - Replacess part of string
$message = "I have a pet dog";
$new_message = str_replace("cat", "dog", $message);
echo "$new_message<br>";
?>
</body>
</html>
