<?php

$conn = new mysqli("localhost", "Enter Username here", "Enter Password here", "Enter Database Name here");

if($conn->connect_error){

    die("Connection Failed!".$conn->connect_error);

}

?>