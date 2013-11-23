<?php
// Create connection
$link = mysqli_connect("oniddb.cws.oregonstate.edu","quinnsa-db","wScgeUPlbiueDdlM","quinnsa-db");

// Check connection
if (mysqli_connect_errno($link)) {
	$error = "db_fail";
}
?>
