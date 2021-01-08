<?php

date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:sa");
$timetostart = "03:59:00pm";
$date = date("Y-m-d");
$datetostart = "2021-01-09";


if (new DateTime() < new DateTime("2021-01-08 17:05:00")) {
	echo '
    <!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">

  <title>Quick Pass</title>
  <meta name="description" content="Timeistheremsg" /><meta property="og:type" content="website" />

  <style>
    body {
      background-color: #232323;
      font-family: "Maison Neue", HelveticaNeue, Helvetica, Arial, sans-serif;
      font-weight: 300;
      color: #f2f2f2;
      text-align: center;
      line-height: 1;
      display: flex;
      min-height: 100vh;
      margin: 0;
      padding: 1rem;
    }
    
    img.background-fullsize {
      object-position: center center;
      object-fit: cover;
      position: absolute;
      z-index: -1;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      opacity: .7;
    }
    
    .wrapper {
      max-width: 720px;
      margin: auto;
      padding: 1.25rem;
      flex: 1;
      border: 5px solid red;
      border-radius: 4px;
      align-self: center;
      background: rgba(0,0,0,0.4);
    }
    
    h1 {
      font-size: 54px;
      font-size: calc(38px + 16 * ((100vw - 600px) /  400));
    }
    
    h3 {
      font-size: 20px;
      font-size: calc(16px + 4 * ((100vw - 600px) /  400));
      font-weight: normal;
      line-height: 1.5
    }
  </style>

</head>

<body>
  <img class="background-fullsize" alt="Dein neuer Lieblingskaffee" title="Dein neuer Lieblingskaffee" 
  srcset="https://cdn.coffeecircle.com/63a9279c-ccd1-4cf7-9557-d0e84171931b/-/resize/2480x/-/quality/lightest/-/progressive/yes/Finde-deinen-Lieblingskaffee.jpg 2x" 
  src="data:image/jpeg;base64,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">
  <div class="wrapper">
    <h1>You are a little early</h1>
    <h3>Registrations for 17th January Mass will start from <br>
      15th January at 9 am</h3>
  </div>
</body>
</html>
';
}
else{

require_once "Signup/pdo.php";
session_start();
$failure = false; 

$totalseatsyoucanbook = 100;

require 'Signup/Dbconnect.php';
$stmt = $conn->prepare("SELECT MAX(id) FROM booking");
$stmt->execute();
$result = $stmt->get_result();
$row=$result->fetch_assoc();
$suffix = "D1-";
$pass = 101 + $row['MAX(id)'];  
$passno = $suffix.$pass;

require 'Signup/Dbconnect.php';
$stmt = $conn->prepare("SELECT SUM(noofmembers) FROM booking");
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
		
			$sql = "INSERT INTO booking (name, mobilenumber, address, noofmembers, password, passno)
			VALUES (:name, :mobilenumber, :address, :noofmembers, :password, :passno)";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(array(
			':name' => $_POST['name'],
			':mobilenumber' => $_POST['mobilenumber'],
			':address' => $_POST['address'],
			':noofmembers' => $_POST['noofmembers'],
			':passno' => $passno,
			':password' => $hashed));  

			 
			
			session_start();
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

					$sql = "INSERT INTO booking (name, mobilenumber, address, noofmembers, password, passno)
					VALUES (:name, :mobilenumber, :address, :noofmembers, :password, :passno)";
					$stmt = $pdo->prepare($sql);
					$stmt->execute(array(
					':name' => $_POST['name1'],
					':mobilenumber' => $_POST['mobilenumber1'],
					':address' => $_POST['address1'],
					':noofmembers' => $_POST['noofmembers1'],
					':passno' => $passno,
					':password' => $hashed1));  
					
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

if (new DateTime() > new DateTime("2021-01-08 17:05:00")) {
echo'
<!DOCTYPE html>
<html>
<head>
	<title>Quick Pass</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="icon" type="image/png" href="Images/Anthony.png">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<h1>Quick Pass</h1>
<h3 style=" text-align: center;">Day 1 - 17th January 2020</h3>
<div class="login-wrap">

	<div class="login-html">
	<!-- <h4 style="color: white;">Day 1 - 17th January 2020</h4> -->
	<h3 style="color: white;">Number of Seats Left: <a id ="seatsleft" style="color: yellow;">';
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
					<label for="noofmembers" class="label">Numbers Including Yourself: (Max 6)</label>
					<select name="noofmembers" id="noofmembers" class="input">
  						<option value="1">1</option>
  						<option value="2">2</option>
  						<option value="3">3</option>
  						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
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
					<label for="noofmembers1" class="label">நீங்கள் உட்பட கலந்துகொள்ளும் நபர்களின் எண்ணிக்கை: (அதிகபட்சம் 6)</label>
					<select name="noofmembers1" id="noofmembers1" class="input" name="noofmembers1">
  						<option value="1">1</option>
  						<option value="2">2</option>
  						<option value="3">3</option>
  						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
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
	</div>
</div>
</body>
</html>';
		}
?>