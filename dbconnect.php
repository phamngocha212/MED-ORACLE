<?php

/**
 * trang dbconnect d�ng d? k?t n�i t?i csdl
 */
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbdatabase="test";
$db= mysql_connect($dbhost,$dbuser,$dbpassword) or die("Could not connect to Database");
mysql_select_db($dbdatabase,$db) or die("Not Found Database");
mysql_set_charset("utf8",$db);

?>
