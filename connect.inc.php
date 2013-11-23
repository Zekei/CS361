<?php
// Create connection
$link = new mysqli("oniddb.cws.oregonstate.edu","quinnsa-db","wScgeUPlbiueDdlM","quinnsa-db");

// Check connection
if ($link->connect_error) {
	$error_name = "db_fail";
}
?>
