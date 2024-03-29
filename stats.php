<?php



error_reporting(0);

require_once "Signup/pdo.php";

session_start();

$totalseatsyoucanbook = 50;



if ( ! isset($_SESSION["adminname"] )) {

    die("ACCESS DENIED");

}



require 'Signup/Dbconnect.php';

$stmt = $conn->prepare("SELECT SUM(noofmembers) FROM day8");

$stmt->execute();

$result = $stmt->get_result();

$row=$result->fetch_assoc();

$noofseatsleft = $totalseatsyoucanbook - $row['SUM(noofmembers)'];   

$noofseatsbooked = $row['SUM(noofmembers)']; 



?>



<!DOCTYPE html>

<html>

<head>

	<title>St. Anthony's Pass - Admin</title>

  	<meta charset="utf-8">

  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="icon" type="image/png" href="Images/10.jfif">

    <script src="https://use.fontawesome.com/196e4f3cc5.js"></script>

	<link rel="stylesheet" type="text/css" href="css/stats.css">

</head>

<body>

<nav>

   <ul>

      <li class="talk">Admin</li>

      <li><a href="admin.php">Attendees</a></li>

      <li class="active">Stats</li>

      <!--<li><a href="Credentials.php">Update</a></li>-->

      <li><a href="advanced.php">Advanced</a></li>

      <li style="float:right"><a href="Signup/logout.php">Log Out</a></li>

   </ul>

</nav>

<br />

<br />

<div class="cards-container">

<a href="Days/Day1.php" style="text-decoration: none;">

  <div class="card-wrapper">

    <div class="card-image">

      <img src="Images/1.png" alt="St. Anthony">

  </div>

    <div class="card-content">

      <h3>Day 1</h3>

    </div>

  </div>

  </a>

  <a href="Days/Day2.php" style="text-decoration: none;">

  <div class="card-wrapper">

    <div class="card-image">

      <img src="Images/2.jpg" alt="St. Anthony">

  </div>

    <div class="card-content">

      <h3>Day 2</h3>

    </div>

  </div>

  </a>

  <a href="Days/Day3.php" style="text-decoration: none;">

  <div class="card-wrapper">

    <div class="card-image">

      <img src="Images/3.png" alt="St. Anthony">

  </div>

    <div class="card-content">

      <h3>Day 3</h3>

    </div>

  </div>

  </a>

  <a href="Days/Day4.php" style="text-decoration: none;">

  <div class="card-wrapper">

    <div class="card-image">

      <img src="Images/4.jfif" alt="St. Anthony">

  </div>

    <div class="card-content">

      <h3>Day 4</h3>

    </div>

  </div>

  </a>

  <a href="Days/Day5.php" style="text-decoration: none;">

  <div class="card-wrapper">

    <div class="card-image">

      <img src="Images/5.jfif" alt="St. Anthony">

  </div>

    <div class="card-content">

      <h3>Day 5</h3>

    </div>

  </div>

  </a>

  <a href="Days/Day6.php" style="text-decoration: none;">

  <div class="card-wrapper">

    <div class="card-image">

      <img src="Images/6.png" alt="St. Anthony">

  </div>

    <div class="card-content">

      <h3>Day 6</h3>

    </div>

  </div>

  </a>

  <a href="Days/Day7.php" style="text-decoration: none;">

  <div class="card-wrapper">

    <div class="card-image">

      <img src="Images/7.png" alt="St. Anthony">

  </div>

    <div class="card-content">

      <h3>Day 7</h3>

    </div>

  </div>

  </a>

  <a href="Days/Day8.php" style="text-decoration: none;">

  <div class="card-wrapper">

    <div class="card-image">

      <img src="Images/8.png" alt="St. Anthony">

  </div>

    <div class="card-content">

      <h3>Day 8</h3>

    </div>

  </div>

  </a>

  <a href="Days/Day9.php" style="text-decoration: none;">

  <div class="card-wrapper">

    <div class="card-image">

      <img src="Images/9.jpg" alt="St. Anthony">

  </div>

    <div class="card-content">

      <h3>Day 9</h3>

    </div>

  </div>

  </a>

  <br />

  <a href="Days/Day10.php" style="text-decoration: none;">

  <div class="card-wrapper">

    <div class="card-image">

      <img src="Images/10.jfif" alt="St. Anthony">

  </div>

    <div class="card-content">

      <h3>Day 10</h3>

    </div>

  </div>

  </a>

</div>



</body>

</html>





