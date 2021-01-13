<?php
$host = "localhost"; /* Host name */
$user = "id15869609_root"; /* User */
$password = "Root-12345678"; /* Password */
$dbname = "id15869609_quickpasss"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}