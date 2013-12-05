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
	"login_fail" => "Invalid username/password combination.",
	"db_fail" => "Cannot connect to database.",
];

//---------------php functions-----------------------

//Sets a cookie with name and value and optional time
//Note: time defaults to expire upon browser's behest (0).
function make_cookie($name, $value, $time = 0)
{
	setcookie($name, $value, $time, "/", "web.engr.oregonstate.edu", TRUE, FALSE);
}

//Returns 0 if username doesn't exist in the table. Otherwise return nonzero.
function user_exists($username)
{
	//SQL code. Select username from user table where username = $username
}

//Returns 0 if username, password combination is invalid. Otherwise return nonzero.
function validate_user($username, $password)
{
	//SQL code. Select username, password from user table where username = $username and password = $password
}
?>
