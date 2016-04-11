<?php 

// Connecting to Mysqli database
/**
Trying to build more secure method for mysqli connection. Needs more testing in real work environment.

$db['db_host'] = "localhost";
$db['db_name'] = "cms";
$db['db_user'] = "root";
$db['db_pass'] = "";

foreach($db as $key => $value) 
{
	define(strtoupper($key), $value);
}
 
*/

	$mysqli = mysqli_connect('localhost', 'root', '', 'cms');

?>