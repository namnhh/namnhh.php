<?php
session_start();
$_SESSION["user"] = "NamNHH";
if (isset($_SESSION["user"])) {
	echo "Session 'user': ".$_SESSION["user"];
} else {
	echo "Session doesn't exist";
}
//remove session
//all session
//session_destroy();

//session user
//unset($_SESSION["user"]);
?>