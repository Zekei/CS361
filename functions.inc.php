<!--javascript functions-->
<script language='javascript' type='text/javascript'>
function check(input) {
	if (input.value != document.getElementById('password').value) {
		input.setCustomValidity('The two passwords must match.');
	} else {
		// input is valid -- reset the error message
		input.setCustomValidity('');
	}
}
</script>


<?php
require_once("connect.inc.php");
//Gives us the $link mysqli object.

//---------------php variables-----------------------
$error_codes = [
	"db_fail" => "Cannot connect to database.",
	"login_fail" => "Invalid username/password combination.",
	"pwd_short" => "Password must be at least 8 characters.",
	"user_exists" => "The username you specified already exists.",
	"email_exists" => "The email you specified already exists.",
	"empty_reg" => "All fields must be filled out.",
];

//---------------php functions-----------------------

//Sets a cookie with name and value and optional time
//Note: time defaults to expire upon browser's behest (0).
function make_cookie($name, $value, $time = 0)
{
	setcookie($name, $value, $time, "/", "web.engr.oregonstate.edu", TRUE, FALSE);
}

//Returns 0 if email doesn't exist in the table. Otherwise return nonzero.
function email_exists($email)
{
	$stmt = $link->prepare("SELECT email FROM users WHERE email = :email");
	$stmt->bindParam(':email', $email);

	$stmt->execute();
	if($stmt->num_rows()) {
		return 1;
	} else {
		return 0;
	}
}

//Returns 0 if username doesn't exist in the table. Otherwise return nonzero.
function user_exists($username)
{
	$stmt = $link->prepare("SELECT username FROM users WHERE username = ");
	$stmt->bindParam(':username', $username);
	
	$stmt->execute();
	if($stmt->num_rows()) {
		return 1;
	} else {
		return 0;
	}
}

//Returns 0 if username, password combination is invalid. Otherwise return nonzero.
function validate_user($username, $password)
{
	$stmt = $link->prepare("SELECT username, password FROM users WHERE username = :username AND password = :password");
	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':password', $password);

	$stmt->execute();
	if($stmt->num_rows()) {
		return 1;
	} else {
		return 0;
	}
	//SQL code. Select username, password from user table where username = $username and password = $password
}
?>
