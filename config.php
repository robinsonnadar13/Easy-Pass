<?php

$host = "localhost:3308"; /* Host name */

$user = "root"; /* User */

$password = "root"; /* Password */

$dbname = "quickpass"; /* Database name */



$con = mysqli_connect($host, $user, $password,$dbname);

// Check connection

if (!$con) {

 die("Connection failed: " . mysqli_connect_error());

}