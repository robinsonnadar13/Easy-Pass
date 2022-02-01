<?php

$host = "localhost"; /* Host name */

$user = "Enter Username here"; /* User */

$password = "Enter Password here"; /* Password */

$dbname = "Enter Database Name here"; /* Database name */



$con = mysqli_connect($host, $user, $password,$dbname);

// Check connection

if (!$con) {

 die("Connection failed: " . mysqli_connect_error());

}