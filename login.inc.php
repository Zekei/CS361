<?php
require_once("functions.inc.php");
$username_check = $_POST['username'];
$password_check = $_POST['password'];
if(validate_user($username_check, $password_check) != 0) {
	setcookie("username", $username_check);
	setcookie("password", $password_check);
} else {

}

?>

	
