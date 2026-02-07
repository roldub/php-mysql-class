<?php
$password = "helloclass";
$hashed_pw = password_hash($password, PASSWORD_DEFAULT);
echo $hashed_pw;

// Can you think of how to use this as a password verification?
// - The actual passwords are never compared directly, but the PHP verifies
?>
