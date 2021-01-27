<?php

$conn = new mysqli("localhost", "root", "root", "quickpass");

if($conn->connect_error){

    die("Connection Failed!".$conn->connect_error);

}

?>