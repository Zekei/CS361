<?php require_once("functions.inc.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
<?php
	define(U_TOKEN, "tokentokentoken1");
	define(P_TOKEN, "tokentokentokentokentokentoken1");
	
	if(isset($_COOKIE["username"] && isset($_COOKIE["password"]) {
		$username = $_COOKIE["username"];
		$password = $_COOKIE["password"];
		check_creds($username, $password);
		$token = 0;
	} else {
		$username = U_TOKEN;
		$password = P_TOKEN;
		$token = 1;
	}
	
	if(isset($_GET["login"]) && ) {
		include_once("login.inc.php");
	}


	if(isset($_GET["register"]) && $_GET["register"] == 0) {
		include_once("register_form.inc.php");
	} elseif(isset($_GET["register"]) && $_GET["register"] == 1) {
		include_once("register_attempt.inc.php");
	}
?>