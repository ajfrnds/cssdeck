<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'users');
define('DB_USER','root');
define('DB_PASSWORD','');

$conn=mysql_pconnect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$conn) or die("Failed to connect to MySQL: " . mysql_error());

?>