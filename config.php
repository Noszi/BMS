<?php

$host =  "localhost";
$username = "root";
$password = "";
$db = "admin";

$connection =mysqli_connect("$host", "$username", "$password", "$db") or die(mysqli_error($connection));

mysqli_set_charset($connection, "utf8");

?>
