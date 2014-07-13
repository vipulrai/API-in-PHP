<?php
$hostname="DB_hostname";
$username="DB_Username";
$password="DB_password";

$con=mysql_connect($hostname,$username,$password) or die(mysql_error());
$con_pop=mysql_select_db("DB_name") or die("table unavailable");

?>