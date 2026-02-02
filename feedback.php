<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Feedback Form</title>
</head>
<body>
<!-- Script 3.1 - feedback.html -->
<div><p>Please complete this form to submit your feedback:</p>

<form action="handle_form.php">

	<p>Name: <select name="title"required>
	<option value="Mr.">Mr.</option>
	<option value="Mrs.">Mrs.</option>
	<option value="Ms.">Ms.</option>
	</select> <input type="text" name="first_name:" size="20" required>
	<input type="text" name="last_name:" size="20" required>
	</p>
	
	<p>Email Address: <input type="email" name="email" size="20" required></p>
	
	<p>Response: This is... <input type="radio" 
	name="response" value="excellent" required> excellent
	<input type="radio" 
	name="response" value="okay" required> okay
	<input type="radio" 
	name="response" value="boring" required> boring</p>
	
	<p>Comments: <textarea name="comments" rows="3" cols="30" required></textarea></p>
	
	<input type="submit" name="submit" value="Send My Feedback">
	
</form>
</div>
</body>
</html>

<!-- 
	Why did you add validation to a form field?
		To ensure quality of data and is usable before it is processed or stored.

	Did you notice there is no PHP code in this form? Why?
		Yes, this purpose of this form is to collect data, and PHP is used server side to process and interpert.
-->
