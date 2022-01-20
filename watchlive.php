<?php

require_once "Signup/pdo.php";
require 'Signup/Dbconnect.php';

$stmt = $conn->prepare("SELECT iframer, dateinwords, titleofyt FROM automated ORDER BY timestamp DESC LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();
$row=$result->fetch_assoc();
$iframer = $row['iframer'];
$dateinwords = $row['dateinwords'];
$titleofyt = $row['titleofyt'];


?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>St. Anthony's Pass</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="Images/10.jfif">

  <style>

  body{
    margin:0;padding:0;font-family:sans-serif;background:linear-gradient(to right, #24243e, #302b63, #24243e); height: 100%;}

.text-center{text-align:center}

.main{min-height:calc(100vh - 160px); margin:0 auto;max-width:600px;display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;align-items:center;justify-content:center}

h1{font-size:26px}


@media all and (max-width: 480px) {

.languageSwicher{margin-top:7px}

}

.title{

    font-variant: small-caps;

     text-align: center;

     font: 400 50px/1.3 'Berkshire Swash', Helvetica, sans-serif;

     color: floralwhite;

     text-shadow: 1px 1px 0px #ededed, 4px 4px 0px rgba(0,0,0,0.15);

}

@media (min-width: 1000px) and (max-width: 1400px){
    iframe
    {
        height: 500px;
    }
}
@media (min-width: 800px) and (max-width: 1000px){
    iframe
    {
        height: 280px;
    }
}
@media (min-width: 638px) and (max-width: 800px){
    iframe
    {
        height: 270px;
    }
}

@media (max-width: 638px){
    iframe
    {
        height: 240px;
    }
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

        <h1 style="color: #9AF379; text-align: center;"><?= $dateinwords ?></h1>
        <h1 style="color: #9AF379; text-align: center;"><?= $titleofyt ?></h1>

<br />
<br />

    <iframe style = "margin: 0 auto; background-color: #777; display: block; border-style:none; " width="80%"  src="<?= $iframer ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <br />
    <br />
    <br />
    <br />

</div>

</body>

</html>