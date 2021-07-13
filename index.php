<?php


error_reporting(0);


date_default_timezone_set("Asia/Kolkata");

$time = date("h:i:sa");

$timetostart = "03:59:00pm";

$date = date("Y-m-d");
// $prev_date = date('d', strtotime($date .' -1 day'));
// echo $prev_date;

$datetostart = "2021-01-09";





if (new DateTime() < new DateTime("2021-01-26 12:00:00")) {

	echo '

    <!doctype html>

<html lang="de">

<head>

  <meta charset="utf-8">

  <link rel="icon" type="image/png" href="Images/Anthony.png">

  <title>St.Anthony&#39;s Chapel Pass</title>

  <meta name="description" content="St.Anthony&#39;s Chapel Pass" /><meta property="og:type" content="website" />



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

  <img class="background-fullsize" alt="St Anthony Chapel" title="St Anthony Chapel" 


  src="data:image/jpeg;base64,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">

  <div class="wrapper">

    <h1>You are a little early</h1>

    <h3>Registrations for 26<sup>th</sup> January Mass will start at 12 pm</h3>

  </div>

</body>

</html>

';

}

else{



require_once "Signup/pdo.php";

session_start();

$failure = false; 

$failure1 = false;



$totalseatsyoucanbook = 70;



require 'Signup/Dbconnect.php';

$stmt = $conn->prepare("SELECT MAX(id) FROM done");

$stmt->execute();

$result = $stmt->get_result();

$row=$result->fetch_assoc();

$suffix = "D10-";

$pass = 101 + $row['MAX(id)'];  

$passno = $suffix.$pass;



require 'Signup/Dbconnect.php';

$stmt = $conn->prepare("SELECT SUM(noofmembers) FROM done");

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
 
            
		

			$sql = "INSERT INTO done (name, mobilenumber, address, noofmembers, password, passno)

			VALUES (:name, :mobilenumber, :address, :noofmembers, :password, :passno)";

			$stmt = $pdo->prepare($sql);

			$stmt->execute(array(

			':name' => $_POST['name'],

			':mobilenumber' => $_POST['mobilenumber'],

			':address' => $_POST['address'],

			':noofmembers' => $_POST['noofmembers'],

			':passno' => $passno,

			':password' => $hashed));  



			 

			



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



					$sql = "INSERT INTO done (name, mobilenumber, address, noofmembers, password, passno)

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



if (new DateTime() > new DateTime("2021-01-26 12:00:00")) {

echo'

<!DOCTYPE html>

<html>

<head>

	<title>St. Anthony&#39;s Chapel Pass</title>

  	<meta charset="utf-8">

  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="icon" type="image/png" href="Images/Anthony.png">

	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script>
	var w = window.innerWidth;
    var h = window.innerHeight;';
	$width = "<script>document.writeln(w)</script>";
	// $height = document.writeln(h);
	$width;
	echo'
	</script>

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

	<h4 style="color: white; text-align: center;">7<sup>th</sup> February 2021</h4>

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

		}

?>