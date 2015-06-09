<?php
session_start();

function check_admin_credentials($user, $pass) {
	return $user == "admin" && $pass == "demo";
}

?>