<?php

error_reporting(0);

date_default_timezone_set("Asia/Kolkata");

require_once "Signup/pdo.php";
require 'Signup/Dbconnect.php';

$stmt = $conn->prepare("SELECT massdateandtime, ytlink FROM automated ORDER BY timestamp DESC LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();
$row=$result->fetch_assoc();
$massdateandtime = $row['massdateandtime'];
$ytlink = $row['ytlink'];

if (new DateTime() > new DateTime($massdateandtime)) {


    header("Location: watchlive.php");


}

?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>St. Anthony's Pass</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="Images/10.jfif">

  <style>

  body{margin:0;padding:0;font-family:sans-serif;background-image:url(https://c0.wallpaperflare.com/preview/436/102/406/holy-cross-bible-prayer-old-book.jpg);background-repeat: no-repeat;background-attachment: fixed;
  background-size: cover; background-size: 800px 630px; background-position: center;}

.text-center{text-align:center}

.main{min-height:calc(100vh - 160px); margin:0 auto;max-width:600px;display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;align-items:center;justify-content:center}

.logo{padding:10px 0 5px;text-align:center}

.header{margin-bottom:10px}

.setting-wrap{text-align:center}

h1{font-size:26px}

.footer{padding:20px;color:brown;}

@media all and (max-width: 480px) {

.languageSwicher{margin-top:7px}

}

@media (min-width: 1000px) and (max-width: 1400px){
    body
    {
        background-size: 1400px 630px;
    }
}
@media (min-width: 800px) and (max-width: 1000px){
    body
    {
        background-size: 1000px 630px;
    }
}
@media (min-width: 638px) and (max-width: 800px){
    body
    {
        background-size: 800px 630px;
    }
}

@media (max-width: 638px){
    body
    {
        background-size: 640px 630px;
    }
}

.title{

    font-variant: small-caps;

     text-align: center;

     font: 400 50px/1.3 'Berkshire Swash', Helvetica, sans-serif;

     color: darkblue;

     text-shadow: 1px 1px 0px #ededed, 4px 4px 0px rgba(0,0,0,0.15);

}

  </style>

</head>

<body>

    <div>

        <div class="header col-xs-12">

            <div class="col-xs-2 "></div>

            <div class="col-xs-8 text-center logo">

                <h1 class="title">St. Anthony's Chapel</h1>

            </div>



        </div>

        <br />

        <br />

        <div class="text-center">

                

        <div>

        <h1 style="color: red; text-shadow: 1px 1px 0px #ededed, 4px 4px 0px rgba(0,0,0,0.15); font-size: 35px;">Sorry, All Seats have been booked!</h1>

        <h3 style="color: darkblue;">Keep Checking, you might get a pass if someone else cancels.</h3>

        <h3 style="color: darkblue;">You can watch the live stream of the mass on <img src="https://cdn-icons-png.flaticon.com/128/174/174883.png" height="25px;" style="position: absolute;"> <a style="color: darkred; position: relative; left: 30px;" href="<?= $ytlink ?>"><?= $ytlink ?></a></h3>

        </div>

        

        <br />

        <!--</div>-->

        

        <!--<div class="container main">-->

        <!--<div class=" setting-wrap">-->

        <h1 style="color: red; text-shadow: 1px 1px 0px #ededed, 4px 4px 0px rgba(0,0,0,0.15); font-size: 30px;">மன்னிக்கவும், அனைத்து இருக்கைகளும் முன்பதிவு செய்யப்பட்டுள்ளன!</h1>

        <h3 style="color: darkblue;">தொடர்ந்து சோதனை செய்யுங்கள், வேறு யாராவது ரத்துசெய்தால் உங்களுக்கு பாஸ் கிடைக்கும்.</h3>

<h3 style="color: darkblue;">நீங்கள் நேரடி திருப்பலி ஒளிபரப்பு காண இந்த <img src="https://cdn-icons-png.flaticon.com/128/174/174883.png" height="25px;" style="position: absolute;"><a style="color: darkred; position: relative; left: 30px;" href="<?= $ytlink ?>"> <?= $ytlink ?></a> <a style="position: relative; left: 30px;">link ஐ கிளிக் பண்ணவும்.</a></h3>



</div>

        </div>

        <br />

        <br />

        <div class="container footer">

                <div class="text-center">

                <footer style="color: darkblue;">&copy; Copyright 2022 St.Anthony Chapel, Ghatkopar</footer>

                </div>

         </div>  

    </div>


</body>

</html>