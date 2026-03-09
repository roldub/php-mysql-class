<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Upload A File</title>
</head>
<body>
<?php // Script 11.4 - upload_file.php
/* This script displays and handles an HTML form. This script takes a file upload and stores it on the server. */

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form

	// Try to move uploaded files
	if (move_uploaded_file ($_FILES['the_file']['tmp_name'], "C:/xampp/uploads/{$_FILES['the_file']['name']}")) {
		
		print '<p>Your file has been uploaded.</p>';
		
	} else { // Problem
		
		print '<p style="color: red;">Your file could not be uploaded because: ';
		
		// Print message based on error:
		switch ($_FILES['the_file']['error']) {
			case 1:
				print 'The file exceeds the upload_max_filesize setting in php.ini';
				break;
			case 2:
				print 'The file exceeds the MAX_FILE_SIZE setting in the HTML form';
				break;
			case 3:
				print 'The file was only partially uploaded';
				break;
			case 4:
				print 'No file was uploaded';
				break;
			case 6:
				print 'The temporary folder does not exist';
				break;
		}
		
		print '.</p>'; // Complete paragraph
		
	} // End of move_uploaded_file IF
	
} // End of submission IF

// Leave PHP and display form
?>

<form action="upload_file.php" enctype="multipart/form-data" method="post">
	<p>Upload a file using this form:</p>
	<input type="hidden" name="MAX_FILE_SIZE" value="300000">
	<p><input type="file" name="the_file"></p>
	<p><input type="submit" name="submit" value="Upload This File"></p>
</form>

</body>
</html>
