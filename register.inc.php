<?php
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) {
		$username_check = $_POST['username'];
		$password_check = $_POST['password'];
		$password_check = $_POST['password2'];
		$email_check = $_POST['email'];
	} else {
		if(!http_redirect("?register=0&error=empty_reg") {
			exit(-1);
		}
	}	
	if(user_exists($username_check)) {
		if(!http_redirect("?register=0&error=user_exists") {
			exit(-1);
		}
	}
	if(email_exists($email_check)) {
		if(!http_redirect("?register=0&error=email_exists") {
			exit(-1);
		}
	}
	if(mb_strlen($password_check) < 8) {
		if(!http_redirect("?register=0&error=pwd_short") {
			exit(-1);
		}
	}
	if(mb_strlen($password_check) > 30) {
		if(!http_redirect("register=0&error=pwd_short") {
			exit(-1);
		}
	}
	if(

?>
