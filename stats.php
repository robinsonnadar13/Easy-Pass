<?php

require_once "Signup/pdo.php";
session_start();
$totalnoofseats = 100;

if ( ! isset($_SESSION["adminname"] )) {
    die("ACCESS DENIED");
}

require 'Signup/Dbconnect.php';
$stmt = $conn->prepare("SELECT SUM(noofmembers) FROM booking");
$stmt->execute();
$result = $stmt->get_result();
$row=$result->fetch_assoc();
$noofseatsleft = $totalnoofseats - $row['SUM(noofmembers)'];   
$noofseatsbooked = $row['SUM(noofmembers)']; 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quick Pass - Admin</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="icon" type="image/png" href="Images/Anthony.png">
    <script src="https://use.fontawesome.com/196e4f3cc5.js"></script>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<nav>
   <ul>
      <li class="talk">Admin</li>
      <li><a href="admin.php">Attendees</a></li>
      <li class="active">Stats</li>
      <li><a href="Credentials.php">Update</a></li>
      <li style="float:right"><a href="Signup/logout.php">Log Out</a></li>
   </ul>
</nav>
<div class="box">
  <div class="box__header">
    <h3 class="box__header-title">Stats - Day 1</h3>
  </div>
  <div class="box__body">
    <div class="stats stats--main">
      <div class="stats__amount"><?php echo htmlentities($noofseatsbooked);?></div>
      <div class="stats__caption">Seats Booked</div>
    </div>

    <div class="stats">
      <div class="stats__amount"><?php echo htmlentities($noofseatsleft);?></div>
      <div class="stats__caption">Seats Left</div>
    </div>

    <div class="stats">
      <div class="stats__amount"><?php echo htmlentities($totalnoofseats);?></div>
      <div class="stats__caption">Total Seats</div>
    </div>
  </div>
</div>

</body>
</html>


