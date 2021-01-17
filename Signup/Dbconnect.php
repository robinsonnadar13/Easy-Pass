<?php
$conn = new mysqli("localhost", "id15869609_root", "Root-12345678", "id15869609_quickpass");
if($conn->connect_error){
    die("Connection Failed!".$conn->connect_error);
}
?>