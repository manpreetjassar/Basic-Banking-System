<?php

//Development connection
//$servername="localhost";
//$username="root";
//$password="";
//$dbname="customer";

//Remote database connection
$servername="remotemysql.com";
$username="8XLDOMMr8I";
$password="dSbuEy52S0";
$dbname="8XLDOMMr8I";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
