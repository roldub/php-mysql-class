<?php // Script 9.6 - login.php #3
/* This page lets people log into the site (almost!). */

// Set the page title and include the header file:
define('TITLE', 'Login');
include('templates/header.html');

// Print some introductory text:
print '<h2>Login Form</h2>
	<p>Users who are logged in can take advantage of certain features like this, that, and the other thing.</p>';
	
// Check if the form has been submitted.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	// Handle form
	if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {
		if( (strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass') ) {
			
			// Correct
			// Session stuff
			session_start();
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['loggedin'] = time();
			
			// Redirect user to welcome page
			ob_end_clean(); // Destroy buffer
			header ('Location: welcome.php');
			exit();
			
		} else { // Incorrect
			
			print '<p class="text--error">The submitted email address and password do not match those on file<br>Try again</p>';
		}
	} else { // Forgot a feild
		
		print '<p class="text--error">Please make sure you enter both an email address and password<br>Try again</p>';
	}
} else { // Display form

	print '<form action="login.php" method="post" class="form--inline">
	<p><label for="email">Email Address:</label><input type="email" name="email" size="20"></p>
	<p><label for="password">Password:</label><input type="password" name="password" size="20"></p>
	<p><input type="submit" name="submit" value="Log In" class="button--pill"></p>
	</form>';

}

include('templates/footer.html');
?>
