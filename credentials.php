<?php

error_reporting(0);
require_once "Signup/pdo.php";
$failure = false; 

session_start();
if ( ! isset($_SESSION["adminname"] )) {
    die("ACCESS DENIED");
}

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

            $sql = "INSERT INTO admin (name, password)
            VALUES (:name, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
            ':name' => $_POST['name'],
            ':password' => $hashed));

            $_SESSION['adminname'] = $_POST['name'];
            header('Location: admin.php');
          
            }
        }


    
        if ( isset($_POST['submit1'] ) ) {
    
            $salt1 = "dhjl@bxjkns238njknwqs".$_POST['password1'];
            $hashed1 = hash('md5',$salt1);
          
            if ( strlen($_POST['name1']) < 1 )  {
                $failure = "Name is required";
            } 
        
            elseif ( strlen($_POST['password1']) < 1 )  {
                $failure = "Password is required.";
            } 
            
            else{
    
                $sql = "INSERT INTO admin (name, password)
                VALUES (:name, :password)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                ':name' => $_POST['name1'],
                ':password' => $hashed1));

                session_start();
                $_SESSION['adminname'] = $_POST['name1'];
                header('Location: admin.php');
              
                }
            }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quick Pass - Admin Update</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="../Images/Anthony.png">
      <link rel="stylesheet" type="text/css" href="css/credentials.css">
    
</head>
<body>
<nav>
   <ul>
      <li class="talk">Admin</li>
      <li><a href="admin.php">Attendees</a></li>
      <li><a href="stats.php">Stats</a></li>
      <li class="active">Update</li>
      <li style="float:right"><a href="Signup/logout.php">Log Out</a></li>
   </ul>
</nav>
<h2>Quick Pass - Admin Update</h2>
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
					<input type="submit" class="button" value="Update" name="submit">
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