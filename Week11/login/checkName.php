<?php

$takenEmails = array ("bill", "ted");
$takenUsernames = array ("bill", "ted");

sleep(1);

if (!empty($_GET)) {
	if ($_GET["username"] && in_array( $_GET["username"], $takenUsernames )) {
		echo "denied";
	} else if ($_GET["email"] && in_array( $_GET["email"], $takenEmails )) {
		echo "denied";
	} else {
		echo "okay";
	}
}
?>
