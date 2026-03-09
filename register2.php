<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<style type="text/css" media="screen">
		.error { color: red; }
	</style>
</head>
<body>
<h1>Register</h1>
<?php // Script 11.6 - register2.php
/* This script registers a user by storing their information in a text file and creating a directory for them */

// Identify the directory and file to use:
$dir = 'C:/xampp/users/';
$file = $dir . 'users.txt';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form

	$problem = FALSE; // No problems so far.
	
	// Check for each value...
	if (empty($_POST['username'])) {
		$problem = TRUE;
		print '<p class="error">Please enter a username!</p>';
	}
	
	if (empty($_POST['password1'])) {
		$problem = TRUE;
		print '<p class="error">Please enter a password!</p>';
	}
	
	if ($_POST['password1'] != $_POST['password2']) {
		$problem = TRUE;
		print '<p class="error">Your password did not match your confirmed password!</p>';
	}
	
	if (!$problem) { // If there was no problems...
	
		if (is_writable($file)) { // Open file.
			
			// Create data to be written
			$subdir = time() . rand(0, 4596);
			$data = $_POST['username'] . "\t" . sha1(trim($_POST['password1'])) . "\t" .  $subdir . PHP_EOL;
			
			// Write data
			file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
			
			// Create directory
			mkdir ($dir . $subdir);
			
			// Print message:
			print '<p>You are now registered!</p>';
			
		} else { // Couldnt write to file
			print '<p class="error">You could not be registered due to system error</p>';
		}
		
	} else { // Forgot a feild
		print '<p class="error">Please go back and try again</p>';
	}
	
} else { // Display form

// Leave PHP and display form
?>

<form action="register2.php" method="post">
	<p>Username: <input type="text" name="username" size="20"></p>
	<p>Password: <input type="password" name="password1" size="20"></p>
	<p>Confirm Password: <input type="password" name="password2" size="20"></p>
	<input type="submit" name="submit" value="Register">
</form>

<?php } // End of submission If ?>
</body>
</html>
