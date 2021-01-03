<?php

require_once "pdo.php";
$failure = false; 

    if ( isset($_POST['submit'] ) ) {
    
        $salt = "dhjl@bxjkns238njknwqs".$_POST['password'];
        $hashed = hash('md5',$salt);
      
        if ( strlen($_POST['name']) < 1 )  {
            $failure = "Name is required";
        } 
    
        elseif ( strlen($_POST['password']) < 1 )  {
            $failure = "Password is required.";
        } 
        
        else{

            $sql = "SELECT name FROM admin
            WHERE name = :nm AND password = :pw";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
            ':nm' => $_POST['name'],
            ':pw' => $hashed));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row === false) {
              $failure = "Invalid login credentials.";
            }
            else {
                session_start();
                $_SESSION['adminname'] = $_POST['name'];
                header('Location: ../admin.php');
               
            }  
          
            }
        }
    
        if ( isset($_POST['submit1'] ) ) {
    
            $salt1 = "dhjl@bxjkns238njknwqs".$_POST['password1'];
            $hashed1 = hash('md5',$salt1);
          
            if ( strlen($_POST['name1']) < 1 )  {
                $failure1 = "Name is required";
            } 
        
            elseif ( strlen($_POST['password1']) < 1 )  {
                $failure1 = "Password is required.";
            } 
            
            else{
    
                $sql = "SELECT name FROM admin
                WHERE name = :nm AND password = :pw";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                ':nm' => $_POST['name1'],
                ':pw' => $hashed1));
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
                if ($row === false) {
                  $failure1 = "தவறான Password";
                }
                else {
                    session_start();
                    $_SESSION['adminname'] = $_POST['name1'];
                    header('Location: ../admin.php');
                   
                }  
              
                }
            }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quick Pass - Admin Login</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="icon" type="image/png" href="../Images/Anthony.png">
	<link rel="stylesheet" type="text/css" href="../css/admin-login.css">
</head>
<body>
<h2>Quick Pass - Admin Login</h2>
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

			    <div class="group">
					<label for="name" class="label">Name</label>
					<input id="name" type="text" class="input" name="name">
				</div>
				<div class="group">
					<label for="password" class="label">Password</label>
					<input id="password" type="password" class="input" name="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Login" name="submit">
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
					<label for="password1" class="label">நிர்வாகம் Password </label>
					<input id="password1" type="password" class="input" name="password1">
				</div>
				<div class="group">
					<input type="submit" class="button" value="பதிவு" name="submit1">
				</div>
				<div class="hr"></div>
				</div>
                </form>
	</div>
</div>
</body>
</html>