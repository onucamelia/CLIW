<?php


$mysql_host = 'localhost';

$mysql_username = 'root';

$mysql_password = '';

$mysql_database='CArmy';

mysql_connect("localhost", "root", "") or die('Error connecting to MySQL server: ' . mysql_error());
$conn=mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());
?>