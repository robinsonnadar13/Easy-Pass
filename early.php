<?php

date_default_timezone_set("Asia/Kolkata");

require_once "Signup/pdo.php";
require 'Signup/Dbconnect.php';

$stmt = $conn->prepare("SELECT regdateandtime FROM automated ORDER BY timestamp DESC LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();
$row=$result->fetch_assoc();
$regdateandtime = $row['regdateandtime'];

$datetostart = substr($regdateandtime,8,2);
$timeinpm = substr($regdateandtime,11,2);

if ($timeinpm > 12){
  $statictime = $timeinpm - 12;
  $postfixtime = "pm"; 
}
elseif($timeinpm == 12){
  $statictime = $timeinpm;
  $postfixtime = "pm"; 
}
else{
  $statictime = $timeinpm;
  $postfixtime = "am";
  if ($timeinpm < 10){
    $statictime = "0" + $statictime;
  }
}

if (new DateTime() > new DateTime($regdateandtime)) {


    header("Location: index.php");


}

?>



<!doctype html>



<html lang="de">



<head>



  <meta charset="utf-8">



  <link rel="icon" type="image/png" href="Images/10.jfif">



  <title>St.Anthony&#39;s Chapel Pass</title>

  <link rel="stylesheet" type="text/css" href="css/early.css">

  <meta name="description" content="St.Anthony&#39;s Chapel Pass" /><meta property="og:type" content="website" />

<script>

let timeinpm = <?= $timeinpm ?>;
let datetostart = <?= $datetostart ?>;

const year = new Date().getFullYear();
const mstoday = new Date(year, 0, datetostart, timeinpm).getTime();
const month = new Date().getMonth();

// countdown
let timer = setInterval(function() {

  // get today's date
  const today = new Date().getTime();

  // get the difference
  let diff;
  
 
  diff = mstoday - today;
  

  // math
  let days = Math.floor(diff / (1000 * 60 * 60 * 24));
  let hours = Math.floor((diff  % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((diff % (1000 * 60)) / 1000);

  // display
  document.getElementById("timer").innerHTML =
    "<div class=\"days\"> \
  <div class=\"numbers\">" + days + "</div>days</div> \
<div class=\"hours\"> \
  <div class=\"numbers\">" + hours + "</div>hours</div> \
<div class=\"minutes\"> \
  <div class=\"numbers\">" + minutes + "</div>minutes</div> \
<div class=\"seconds\"> \
  <div class=\"numbers\">" + seconds + "</div>seconds</div> \
</div>";

}, 1000);

</script>

<style type="text/css">
@media (min-width: 1000px) and (max-width: 1400px){
    body
    {
        height: 500px;
    }
}
@media (min-width: 800px) and (max-width: 1000px){
    body
    {
        height: 280px;
    }
}
@media (min-width: 638px) and (max-width: 800px){
    body
    {
        height: 270px;
    }
}

@media (max-width: 638px){
    body
    {
        height: 240px;
        background-size: 240px;
    }
}
</style>





<body style="background: url(https://c1.wallpaperflare.com/preview/588/646/538/the-rosary-prayer-faith-christianity.jpg); background-repeat: no-repeat; background-attachment: fixed;
  background-size: cover; background-position: center;">

<a class="comeon">St. Anthony's Chapel</a>
<a class="comeon">Sub station of Holy Family Church, Pestom Sagar.</a>


<h1>Registrations will start at <?= $statictime ?> <?= $postfixtime ?></h1>
<div class="container">

  <div class="balloon white">
    <div class="star-red"></div>
  <div class="face">
    <div class="eye"></div>
    <div class="mouth happy"></div>
  </div>
  <div class="triangle"></div>
  <div class="string"></div>
</div>

<div class="balloon red">
  <div class="star"></div>
  <div class="face">
    <div class="eye"></div>
    <div class="mouth happy"></div>
  </div>
  <div class="triangle"></div>
  <div class="string"></div>
</div>

<div class="balloon blue">
  <div class="star"></div>
  <div class="face">
    <div class="eye"></div>
    <div class="mouth happy"></div>
  </div>
  <div class="triangle"></div>
  <div class="string"></div>
</div>
  <div id="timer"></div>
</div>




</body>



</html>

