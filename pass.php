<?php



error_reporting(0);



session_start();

require_once "Signup/pdo.php";
require 'Signup/Dbconnect.php';

$stmt = $conn->prepare("SELECT massdateandtime, dateinwords, passimg FROM automated ORDER BY timestamp DESC LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();
$row=$result->fetch_assoc();
$massdateandtime = $row['massdateandtime'];
$dateinwords = $row['dateinwords'];
$passimg = $row['passimg'];

$masstime = substr($massdateandtime,11,2);

if ($masstime > 12){
  $statictime = $masstime - 12;
  $postfixtime = "pm"; 
}
elseif($masstime == 12){
  $statictime = $masstime;
  $postfixtime = "pm"; 
}
else{
  $statictime = $masstime;
  $postfixtime = "am";
  if ($masstime < 10){
    $statictime = "0" + $statictime;
  }
}


$name = $_SESSION['name'];



$mobilenumber = $_SESSION['mobilenumber'];



$noofmembers = $_SESSION['noofmembers'];



$passno = $_SESSION['passno'];







?>







<!DOCTYPE html>



<html>



<head>



	<title>St. Anthony's Pass</title>



  	<meta charset="utf-8">



  	<meta name="viewport" content="width=device-width, initial-scale=1">



  	<link rel="icon" type="image/png" href="Images/10.jfif" alt="St. Anthony Logo">



  	<link rel="stylesheet" type="text/css" href="css/pass.css">

    <meta name="google-site-verification" content="4BEt7QaWr5iXtE8x777eV2PMhieueDfZcGLOLz4hTgU" />



</head>



<body>



<div class="feedback" id="oldX"></div><div class="feedback" id="oldY"></div>



<div class="table">



  <div class="table-cell">



    <div id="ticket">



      <div class="row perforated first">



        <img class="logo" src="Images/<?= $passimg ?>" />



        <div class="right">



          <div class="label">Pass Number</div>



          <div class="num"><?php echo htmlentities($passno);?></div>



        </div>



      </div>



      <div class="row normRow">



        <div>



          <div class="label">Name</div>



          <div class="col"><?php echo htmlentities($name);?></div>



        </div>



        



      </div>



      <div class="row normRow">



        <div class="col6">



          <div class="label">Admit</div>



          <div class="countdown"><?php echo htmlentities($noofmembers);?></div>



        </div>



        <div class="col6">



          <div class="label">Phone number</div>



          <div><?php echo htmlentities($mobilenumber);?></div>



        </div>



      </div>



      <div class="row normRow">



      



        <div class="col6">



          <div class="label">Date</div>



          <div><?= $dateinwords ?></div>



        </div>



        <div class="col6">



          <div class="label">Time</div>



          <div><?= $statictime?><?= $postfixtime ?></div>



        </div>



        



      </div>



      <div class="row">



        <div class="sparkler"></div>



      <img id="qr" src='Images/QR.jpeg' alt='QR Code'><div class="smalltext">Scan the QR Code to get the chapel location.</div>



      

      </div>

      <div style="color: white; font-size: 14px;"><b>Take a screenshot/note down the details of your ticket.</b></div> 

      <div style="color: white; font-size: 14px;"><b>It will be checked when you come to the chapel.</b></div>

    </div>



  </div>



</div>



</body>



</html>