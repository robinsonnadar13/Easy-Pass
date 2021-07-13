<?php

error_reporting(0);
require_once "Signup/pdo.php";
$failure = false; 
$comment = false;

session_start();


    if ( isset($_POST['submit'] ) ) {
    
        $salt = "dhjl@bxjkns238njknwqs".$_POST['password'];
        $hashed = hash('md5',$salt);
      
        if ( strlen($_POST['mobilenumber']) < 1 )  {
			$failure = "Mobile Number is required";
		} 
	
		elseif ( strlen($_POST['mobilenumber']) !== 10 )  {
			$failure = "Mobile Number should consist of 10 digits.";
		} 
    
        elseif ( strlen($_POST['password']) < 1 )  {
            $failure = "Password is required.";
        } 
        
        else{

            $sql = "SELECT name FROM done
            WHERE mobilenumber = :mn AND password = :pw";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
            ':mn' => $_POST['mobilenumber'],
            ':pw' => $hashed));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row === false) {
              $failure = "Invalid credentials.";
            }
            else {
                $sql = "DELETE FROM done WHERE
                mobilenumber = :mn";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
				':mn' => $_POST['mobilenumber']));
				header("Location: thankyou.php");
    
             }
          
            }
        }


    
        if ( isset($_POST['submit1'] ) ) {
    
            $salt1 = "dhjl@bxjkns238njknwqs".$_POST['password1'];
            $hashed1 = hash('md5',$salt1);
          
            if ( strlen($_POST['mobilenumber1']) < 1 )  {
				$failure1 = "உங்கள் தொலைபேசி எண் தேவை";
			} 
		
			elseif ( strlen($_POST['mobilenumber1']) !== 10 )  {
				$failure1 = "உங்கள் கைப்பேசி எண் 10 எண்ணிக்கை (10 digits)";
			} 
        
            elseif ( strlen($_POST['password1']) < 1 )  {
                $failure1 = "Password is required.";
            } 
            
            else{
    
				$sql = "SELECT name FROM done
				WHERE mobilenumber = :mn AND password = :pw";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array(
				':mn' => $_POST['mobilenumber1'],
				':pw' => $hashed1));
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
				if ($row === false) {
				  $failure1 = "Invalid credentials.";
				}
				else {
					$sql = "DELETE FROM done WHERE
					mobilenumber = :mn";
					$stmt = $pdo->prepare($sql);
					$stmt->execute(array(
					':mn' => $_POST['mobilenumber1']));
					header("Location: thank.php");
					$comment1 = "Pass வெற்றிகரமாக ரத்து செய்யப்பட்டது.";
		
				 }
			  
				}
            }

?>

<!DOCTYPE html>
<html>
<head>
	<title>St. Anthony's Pass - Cancel</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="Images/Anthony.png">
      <link rel="stylesheet" type="text/css" href="css/cancel.css">
    
</head>
<body>
<h1>St. Anthony's Pass - Cancel</h1>
<div class="login-wrap">

	<div class="login-html">
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
            
            <?php
            if ( $comment !== false ) {
	        echo('<p style="color: yellow; text-align:centre;">'.htmlentities($comment)."</p>\n");
			}
			?>

			    <div class="group">
					<label for="mobilenumber" class="label">Mobile Number</label>
					<input id="mobilenumber" type="number" class="input" name="mobilenumber">
				</div>
				<div class="group">
					<label for="password" class="label">Password</label>
					<input id="password" type="password" class="input" name="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Cancel Pass" name="submit">
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
            
            <?php
            if ( $comment1 !== false ) {
	        echo('<p style="color: yellow; text-align:centre;">'.htmlentities($comment1)."</p>\n");
			}
			?>
			<form method="post">
			    <div class="group">
					<label for="mobilenumber1" class="label">கைபேசி எண்</label>
					<input id="mobilenumber1" type="number" class="input" name="mobilenumber1">
				</div>
				<div class="group">
					<label for="password1" class="label">Password</label>
					<input id="password1" type="password" class="input" name="password1">
				</div>
				<div class="group">
					<input type="submit" class="button" value="PASS ரத்துசெய்" name="submit1">
				</div>
				<div class="hr"></div>
				</div>
                </form>
	</div>
</div>
</body>
</html>