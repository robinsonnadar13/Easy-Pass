<?php

require_once "Signup/pdo.php";
session_start();
$failure = false; 

require 'Signup/Dbconnect.php';
$stmt = $conn->prepare("SELECT MAX(id) FROM booking");
$stmt->execute();
$result = $stmt->get_result();
$row=$result->fetch_assoc();
$suffix = "AN ";
$pass = 101 + $row['MAX(id)'];  
$passno = $suffix.$pass;

require 'Signup/Dbconnect.php';
$stmt = $conn->prepare("SELECT SUM(noofmembers) FROM booking");
$stmt->execute();
$result = $stmt->get_result();
$row=$result->fetch_assoc();
$seats = 100 - $row['SUM(noofmembers)'];       


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
	


?> 

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
<div class="login-wrap">

	<div class="login-html">
	<h3 style="color: white;">Number of Seats Left: <a id ="seatsleft" style="color: yellow;"><?php echo htmlentities($seats); ?></a></h3>
	<br />
	<form method="post">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">English</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Tamil</label>
		<div class="login-form">
			<div class="sign-in-htm">

			<?php
            if ( $failure !== false ) {
	        echo('<p style="color: red; text-align:centre;">'.htmlentities($failure)."</p>\n");
			}
			?>

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
			<div class="sign-up-htm">
			<?php
            if ( $failure1 !== false ) {
	        echo('<p style="color: red; text-align:centre;">'.htmlentities($failure1)."</p>\n");
			}
			?>
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
</html>