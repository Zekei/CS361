<?php
//Include this if $_GET["error"] is set.
//Show an error box which displays $error.
//$error_codes is an associative array that maps an error code to an error string. (functions.inc.php)
//$_GET["error"] is an error code which exists in $error_codes
//$error is the full string of text which will be displayed in the error box.

$error = "Error: " . $error_codes[$_GET["error"]];
?>
