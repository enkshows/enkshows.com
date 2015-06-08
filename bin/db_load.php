<?php 
require('db_config.php');

$con = mysql_connect($db_host, $db_username, $db_password);  
if (!$con) {
	die('Could not connect: ' . mysql_error());  
}
mysql_select_db($db_name, $con);


function db_query($query_string) {
	$res = mysql_query($query_string);
	if (!$res) {
		exit("Database error in query " . $query_string . ". Error: <strong>" . mysql_error() . "</strong>");
	}
	return $res;
}

function fetch_db_resource($resource) {
	$return = array();
	while ( $row = mysql_fetch_assoc($resource) ) {
		$return[] = $row;
	}
	return $return;
}

?>