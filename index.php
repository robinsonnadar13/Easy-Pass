<?php


error_reporting(0);

require_once "Signup/pdo.php";
require 'Signup/Dbconnect.php';

date_default_timezone_set("Asia/Kolkata");

$time = date("h:i:sa");
$timetostart = "01:00:00pm";

$date = date("Y-m-d");

// $prev_date = date('d', strtotime($date .' -1 day'));
// echo $prev_date;

$datetostart = "2022-01-08";

$stmt = $conn->prepare("SELECT regdateandtime, dateinwords, totalseatsyoucanbook, dbtablename, massdateandtime FROM automated ORDER BY timestamp DESC LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();
$row=$result->fetch_assoc();
$regdateandtime = $row['regdateandtime'];
$dateinwords = $row['dateinwords'];
$totalseatsyoucanbook = $row['totalseatsyoucanbook'];
$dbtablename = $row['dbtablename'];
$massdateandtime = $row['massdateandtime'];
$suffix = substr($dbtablename,3);


if (new DateTime() < new DateTime($regdateandtime)) {
	header("Location: early.php");
}

if (new DateTime() > new DateTime($massdateandtime)) {
    header("Location: watchlive.php");
}

else{
	
	session_start();

	$failure = false; 
	$failure1 = false;

	$stmt = $conn->prepare("SELECT MAX(id) FROM $dbtablename");
	$stmt->execute();
	$result = $stmt->get_result();
	$row=$result->fetch_assoc();
	$suffix = "D".$suffix."-";
	$pass = 101 + $row['MAX(id)'];  
	$passno = $suffix.$pass;

	$stmt = $conn->prepare("SELECT SUM(noofmembers) FROM $dbtablename");
	$stmt->execute();
	$result = $stmt->get_result();
	$row=$result->fetch_assoc();
	$ticketsbooked = $row['SUM(noofmembers)'];
	$seats = $totalseatsyoucanbook - $row['SUM(noofmembers)'];       

	if($ticketsbooked >= $totalseatsyoucanbook){
		header("Location: booked.php");
	}

	try {
		if ( isset($_POST['submit'] ) ) {

			$salt = "dhjl@bxjkns238njknwqs".$_POST['password'];
			$hashed = hash('md5',$salt);
			
			if ( strlen($_POST['name']) < 1 )  {
				$failure = "Name is required";
			} 
			
			elseif ( strlen($_POST['mobilenumber']) < 1 )  {
				$failure = "Mobile Number is required";
			} 
			
			elseif ( strlen($_POST['mobilenumber']) !== 10 )  {
				$failure = "Mobile Number should consist of 10 digits.";
			} 
			
			elseif ( strlen($_POST['address']) < 1 )  {
				$failure = "Address is required";
			} 
			
			elseif ( strlen($_POST['password']) < 3 )  {
				$failure = "Password is required.";
			} 
			
			elseif ( ($seats - $_POST['noofmembers']) < 0 )  {
				$failure = "You can only book ".$seats." seats left.";
			} 







	else{	


			$timestamp = date("Y-m-d H:i:s");


 



			$sql = "INSERT INTO $dbtablename (name, mobilenumber, address, noofmembers, password, passno, timestamp) VALUES (:name, :mobilenumber, :address, :noofmembers, :password, :passno, :timestamp)";






			$stmt = $pdo->prepare($sql);



				// try {

					$stmt->execute(array(



			':name' => $_POST['name'],



			':mobilenumber' => $_POST['mobilenumber'],



			':address' => $_POST['address'],



			':noofmembers' => $_POST['noofmembers'],



			':passno' => $passno,



			':password' => $hashed,


			':timestamp' => $timestamp));
  
// }

// //catch exception
// catch(Exception $e) {
//   echo 'Message: ' .$e->getMessage();
// }

			








             
			 



			







			$_SESSION['name'] = $_POST['name'];



			$_SESSION['mobilenumber'] = $_POST['mobilenumber'];



			$_SESSION['noofmembers'] = $_POST['noofmembers'];



			$_SESSION['passno'] = $passno;







			header('Location: pass.php');



		}



	}



}



	  catch (\PDOException $e) {



		if ($e->errorInfo[1] == 1062) {



			$failure = "Mobile Number already registered.";



		}



	}







	try {







		if ( isset($_POST['submit1'] ) ) {



		



			$salt1 = "dhjl@bxjkns238njknwqs".$_POST['password1'];



			$hashed1 = hash('md5',$salt1);



		  



			if ( strlen($_POST['name1']) < 1 )  {



				$failure1 = "உங்கள் பெயர் தேவை";



			} 



		



			elseif ( strlen($_POST['mobilenumber1']) < 1 )  {



				$failure1 = "உங்கள் தொலைபேசி எண் தேவை";



			} 



		



			elseif ( strlen($_POST['mobilenumber1']) !== 10 )  {



				$failure1 = "உங்கள் கைப்பேசி எண் 10 எண்ணிக்கை (10 digits)";



			} 



		



			elseif ( strlen($_POST['address1']) < 1 )  {



				$failure1 = "முகவரி தேவை";



			} 



		



			elseif ( strlen($_POST['password1']) < 3 )  {



				$failure1 = "Password தேவை";



			} 



			



			else{


				    $timestamp = date("Y-m-d H:i:s");




					$sql = "INSERT INTO $dbtablename (name, mobilenumber, address, noofmembers, password, passno, timestamp)



					VALUES (:name, :mobilenumber, :address, :noofmembers, :password, :passno, :timestamp)";



					$stmt = $pdo->prepare($sql);



					$stmt->execute(array(



					':name' => $_POST['name1'],



					':mobilenumber' => $_POST['mobilenumber1'],



					':address' => $_POST['address1'],



					':noofmembers' => $_POST['noofmembers1'],



					':passno' => $passno,



					':password' => $hashed1,


					':timestamp' => $timestamp));  



					



					session_start();



					$_SESSION['name'] = $_POST['name1'];



					$_SESSION['mobilenumber'] = $_POST['mobilenumber1'];



					$_SESSION['noofmembers'] = $_POST['noofmembers1'];



					$_SESSION['passno'] = $passno;



		



					header('Location: pass.php');



				}



			}



		}



			  catch (\PDOException $e) {



				if ($e->errorInfo[1] == 1062) {



					$failure = "Mobile Number already registered.";



				}



			}



	



		}




echo'



<!DOCTYPE html>



<html>



<head>



	<title style="color: rgba(40,57,101,.9);">St. Anthony&#39;s Chapel Pass</title>



  	<meta charset="utf-8">



  	<meta name="viewport" content="width=device-width, initial-scale=1">



  	<link rel="icon" type="image/png" href="Images/10.jfif">



	<link rel="stylesheet" type="text/css" href="css/index.css">

	<script>

	var w = window.innerWidth;

    var h = window.innerHeight;';

	$width = "<script>document.writeln(w)</script>";

	// $height = document.writeln(h);

	$width;

	echo'

	</script>

	<meta name="google-site-verification" content="4BEt7QaWr5iXtE8x777eV2PMhieueDfZcGLOLz4hTgU" />



</head>



<body>



<header>



<h1>St. Anthony&#39;s Chapel</h1>

<h3 style="text-align: center;">Sub station of Holy Family Church, Pestom Sagar.</h3>

<br />

<!-- <h3 style="text-align: center; color: blue">Dear devotees of St. Anthony, we are happy to come together once again to celebrate the Eucharist. </h3>

<ul style="color: blue;" class="alignkaros">

 <li>Dear devotees of St. Anthony, we are happy to come together once again to celebrate the Eucharist.</li>

 <li>To ensure that social distancing is maintained, a limit of 60 persons per Mass has been set.</li> 

</ul> --!>



<div class="login-wrap">



	<div class="login-html">



	<h4 style="color: white; text-align: center;">'; echo htmlentities($dateinwords); echo '</h4>



	<h3 style="color: white; text-align: center;">Number of Seats Left: <a id ="seatsleft" style="color: yellow;">';



	echo htmlentities($seats); 



	echo'</a></h3>



	<br />



	<form method="post">



		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">English</label>



		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Tamil</label>



		<div class="login-form">



			<div class="sign-in-htm">';







            if ( $failure !== false ) {



			echo('<p style="color: red; text-align:centre;">'.htmlentities($failure)."</p>\n");



			}



			echo'







			    <div class="group">



					<label for="name" class="label">Name</label>



					<input id="name" type="text" class="input" name="name">



				</div>



				<div class="group">



					<label for="mobilenumber" class="label">Mobile Number</label>



					<input id="mobilenumber" type="number" class="input" name="mobilenumber">



				</div>



				<div class="group">



					<label for="address" class="label">Address</label>



					<input id="address" type="text" name="address" class="input">



				</div>



				<div class="group">



					<label for="noofmembers" class="label">Numbers Including Yourself: (Max 4)</label>



					<select name="noofmembers" id="noofmembers" class="input">



  						<option value="1">1</option>



  						<option value="2">2</option>



  						<option value="3">3</option>



  						<option value="4">4</option>



					</select>



				</div>



				<div class="group">



					<label for="password" class="label">Secure Password (To Regenerate/Cancel Pass) Use minimum 3 characters.</label>



					<input id="password" type="password" class="input" name="password">



				</div>



				<div class="group">



					<input type="submit" class="button" value="Book" name="submit">



				</div>



				<div class="forgot">



					<br />



					<a href="cancel.php">Want to cancel your pass?</a>



				</div>



				<div class="hr"></div>



            </form> 



			</div>



	



			<div class="sign-up-htm">';



			



            if ( $failure1 !== false ) {



	        echo('<p style="color: red; text-align:centre;">'.htmlentities($failure1)."</p>\n");



			}



			echo'



			<form method="post">



				<div class="group">



					<label for="name1" class="label">பெயர்</label>



					<input id="name1" type="text" class="input" name="name1">



				</div>



				<div class="group">



					<label for="mobilenumber1" class="label">கைபேசி எண்</label>



					<input id="mobilenumber1" type="number" class="input" name="mobilenumber1">



				</div>



				<div class="group">



					<label for="address1" class="label">முகவரி</label>



					<input id="address1" type="text" class="input" name="address1">



				</div>



				<div class="group">



					<label for="noofmembers1" class="label">நீங்கள் உட்பட கலந்துகொள்ளும் நபர்களின் எண்ணிக்கை: (அதிகபட்சம் 4)</label>



					<select name="noofmembers1" id="noofmembers1" class="input" name="noofmembers1">



  						<option value="1">1</option>



  						<option value="2">2</option>



  						<option value="3">3</option>



  						<option value="4">4</option>



					</select>



				</div>



				<div class="group">



					<label for="password1" class="label">உங்கள் Password உருவாக்கவும்</label>



					<input id="password1" type="password" class="input" name="password1">



				</div>



				<div class="group">



					<input type="submit" class="button" value="பதிவு" name="submit1">



				</div>



				<div class="forgot">



					<br />



					<a href="cancel.php">உங்கள் பாஸை ரத்து செய்ய வேண்டுமா?</a>



				</div>



				<div class="hr"></div>



				</div>



                </form>



                </header>



	</div>



</div>







<br />



<br />



<div>



<h3 style="text-align: center; color: blue;">Guidelines to be followed:</h3>



<p style="text-align: center; color: blue">Dear devotees of St. Anthony, we are happy to come together once again to celebrate the Eucharist. </p>



<br />



<h3 style="text-align: center; color: blue;">Please follow these guidelines for safe celebration:</h3>



<ul style="color: blue;" class="alignkaro">



<li>To ensure that social distancing is maintained, a limit of 60 persons per Mass has been set.</li>



<li>Children below 10 years, adults over 65 years and those who are having cold and fever are advised to stay home.</li>



<li>Please enlist in advance to attend Mass.</li>



<li>Observe personal hygiene.</li>



<li>Wear a mask when you come to chapel and ensure there are no gaps on either side of the mask, adjust to fit.</li>



<li>Come to church early.</li>



<li>Follow the instructions of the ushers.</li>



<li>Bring along a bottle of sanitizer liquid or sanitize yourself at the entrance of the chapel with the sanitizer provided.</li>



<li>Get your temperature checked before you enter.</li>



<li>Avoid close contact with others.</li>



<li>Holy Communion is to be received in the hand. Follow the instructions of the priest celebrant and ushers.</li>



<li>Avoid venerating the statues by kissing or touching.</li>



<li>It is advised to avoid the use of the church toilet.</li>



<li>Leave by the designated exit only.</li>



<li>Avoid chatting after Mass in the church compound.</li>



<li>Use a handkerchief or tissue paper to wipe your face and dispose it properly in the dustbin. Do not leave them in the church when you leave.</li>



</ul>



</div>



</body>



</html>';





?>