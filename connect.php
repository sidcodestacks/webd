<?php
$dbhost 	= "127.0.0.1";
$dbuser 	= "root";
$dbpass 	= "";
$dbname 	= "testDB";
$charset    = "utf8";

$dbcon = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$dbcon) {
    die("Connection failed" . mysqli_connect_error());
}

mysqli_select_db($dbcon, $dbname);