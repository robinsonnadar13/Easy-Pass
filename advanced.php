<?php

session_start();

require_once "Signup/pdo.php";
require 'Signup/Dbconnect.php';

$success = false;

date_default_timezone_set("Asia/Kolkata");
$timestamp = date("Y-m-d H:i:s");

if ( ! isset($_SESSION["adminname"] )) {

    die("ACCESS DENIED");

}


      if ( isset($_POST['submit'] ) ) {
         
         // if ( strlen($_POST['totalseatsyoucanbook']) < 1 )  {
         //    $failure = "Name is required";
         // } 
         
         // elseif ( ($seats - $_POST['noofmembers']) < 0 )  {
         //    $failure = "You can only book ".$seats." seats left.";
         // } 


         $sql = "INSERT INTO automated (dayno, dbtablename, totalseatsyoucanbook, regdateandtime,
         massdateandtime, dateinwords, passimg, ytlink, iframer, titleofyt, timestamp) VALUES (:dayno, :dbtablename, :totalseatsyoucanbook, :regdateandtime, :massdateandtime, :dateinwords, :passimg, :ytlink, :iframer, :titleofyt, :timestamp)";
         $stmt = $pdo->prepare($sql);

         $stmt->execute(array(
         ':dayno' => $_POST['dayno'],
         ':dbtablename' => $_POST['dbtablename'],
         ':totalseatsyoucanbook' => $_POST['totalseatsyoucanbook'],
         ':regdateandtime' => $_POST['regdateandtime'],
         ':massdateandtime' => $_POST['massdateandtime'],
         ':dateinwords' => $_POST['dateinwords'],
         ':passimg' => $_POST['passimg'],
         ':ytlink' => $_POST['ytlink'],
         ':iframer' => $_POST['iframer'],
         ':titleofyt' => $_POST['titleofyt'],
         ':timestamp' => $timestamp));  


         $success = "Successfully Updated!!!";
      
      }







?>

<!DOCTYPE html>

<html>

<head>

    <title>St. Anthony's Pass - Admin</title>

    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="Images/10.jfif">

    <script src="https://use.fontawesome.com/196e4f3cc5.js"></script>

    <link rel="stylesheet" type="text/css" href="css/admin.css">

</head>

<body>

<nav>

   <ul>

      <li class="talk">Admin</li>

      <li><a href="admin.php">Attendees</a></li>

      <li><a href="stats.php">Stats</a></li>

      <!--<li><a href="credentials.php">Update</a></li>-->

      <li class="active">Advanced</li>

      <li style="float:right"><a href="Signup/logout.php">Log Out</a></li>

   </ul>

</nav>

<br />
<br />

<h1>Automate</h1>

<br />
<br />

<?php

if ( $success == true ) {

   echo('<p style="color: green; text-align:centre;">'.htmlentities($success)."</p>\n");

}

?>

<form method="post">

  <div class="mb-3">
  <label for="dayno" class="label">Day Of Feast</label>
  <select class="form-select" aria-label="Default select example" id="dayno" name="dayno">
     <option value="Day 1">Day 1</option>
     <option value="Day 2">Day 2</option>
     <option value="Day 3">Day 3</option>
     <option value="Day 4">Day 4</option>
     <option value="Day 5">Day 5</option>
     <option value="Day 6">Day 6</option>
     <option value="Day 7">Day 7</option>
     <option value="Day 8">Day 8</option>
     <option value="Day 9">Day 9</option>
     <option value="Day 10">Day 10</option>
  </select>
  </div>

  <br />
  <br />

  <div class="mb-3">
  <label for="dbtablename" class="label">Database table</label>
  <select class="form-select" aria-label="Default select example" id="dbtablename" name="dbtablename">
     <option value="day1">Day 1</option>
     <option value="day2">Day 2</option>
     <option value="day3">Day 3</option>
     <option value="day4">Day 4</option>
     <option value="day5">Day 5</option>
     <option value="day6">Day 6</option>
     <option value="day7">Day 7</option>
     <option value="day8">Day 8</option>
     <option value="day9">Day 9</option>
     <option value="day10">Day 10</option> 
  </select>
  </div>

  <br />
  <br />

  <div class="mb-3">
    <label for="totalseatsyoucanbook" class="form-label">Total number of seats</label>
    <input type="number" class="form-control" id="totalseatsyoucanbook" name= "totalseatsyoucanbook" placeholder="eg. 70">
  </div>

  <br />
  <br />

  <div class="mb-3">
    <label for="regdateandtime" class="form-label">Registration - Date and Time</label>
    <input type="text" class="form-control" id="regdateandtime" name= "regdateandtime" placeholder="eg. 2022-01-16 12:00:00">
  </div>

  <br />
  <br />

  <div class="mb-3">
    <label for="massdateandtime" class="form-label">Mass - Date and Time</label>
    <input type="text" class="form-control" id="massdateandtime" name= "massdateandtime" placeholder="eg. 2022-01-17 18:00:00">
  </div>

  <br />
  <br />

  <div class="mb-3">
    <label for="dateinwords" class="form-label">Date in words</label>
    <select class="form-select" aria-label="Default select example" id="dateinwords" name="dateinwords">
     <option value="17th January 2022">17th January 2022</option>
     <option value="18th January 2022">18th January 2022</option>
     <option value="19th January 2022">19th January 2022</option>
     <option value="20th January 2022">20th January 2022</option>
     <option value="21st January 2022">21st January 2022</option>
     <option value="22nd January 2022">22nd January 2022</option>
     <option value="23rd January 2022">23rd January 2022</option>
     <option value="24th January 2022">24th January 2022</option>
     <option value="25th January 2022">25th January 2022</option>
     <option value="26th January 2022">26th January 2022</option> 
  </select>
  </div>

  <br />
  <br />

  <div class="mb-3">
  <label for="passimg" class="label">Pass Images</label>
  <select class="form-select" aria-label="Default select example" id="passimg" name="passimg">
     <option value="1.png">Day 1</option>
     <option value="2.jpg">Day 2</option>
     <option value="3.png">Day 3</option>
     <option value="4.jfif">Day 4</option>
     <option value="5.jfif">Day 5</option>
     <option value="6.png">Day 6</option>
     <option value="7.png">Day 7</option>
     <option value="8.png">Day 8</option>
     <option value="9.jpg">Day 9</option>
     <option value="10.jfif">Day 10</option> 
  </select>
  </div>

  <br />
  <br />

  <div class="mb-3">
    <label for="ytlink" class="form-label">Youtube Link</label>
    <input type="text" class="form-control" id="ytlink" name= "ytlink" placeholder="eg. https://youtu.be/_t2GVaQasRY">
  </div>

  <br />
  <br />

  <div class="mb-3">
    <label for="iframer" class="form-label">IFrame Link</label>
    <input type="text" class="form-control" id="iframer" name= "iframer" placeholder="eg. https://www.youtube.com/embed/14LJlNUJDLQ">
  </div>

  <br />
  <br />

  <div class="mb-3">
  <label for="titleofyt" class="label">Title of Youtube Video</label>
  <select class="form-select" aria-label="Default select example" id="titleofyt" name="titleofyt">
     <option value="Flag Hoisting and Holy Mass in English">Flag Hoisting and Holy Mass in English</option>
     <option value="Holy Mass in Tamil">Holy Mass in Tamil</option>
     <option value="Retreat and Holy Mass in Tamil">Retreat and Holy Mass in Tamil</option>
     <option value="Feast Mass in Tamil">Feast Mass in Tamil</option>
  </select>
  </div>

  <br />
  <br />

  <button type="submit" class="btn btn-primary" value="Update" name="submit">Submit</button>

</form>

</body>

</html>
