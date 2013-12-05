<?php
require_once("functions.inc.php");
$username = $_POST['username'];
$password = $_POST['password'];
if(validate_user($username, $password) != 0) {
	setcookie("username", $username);
	setcookie("password", $password);
} else {



?>

	
