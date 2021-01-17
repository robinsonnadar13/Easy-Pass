<?php
session_start();
if ( ! isset($_SESSION["adminname"] )) {
    die("ACCESS DENIED");
}

if ( isset($_POST['search'] ) ) {
   $_SESSION['namesearched'] = $_POST['namesearched'];
   header("Location: search.php");
   return;
}

require '../Signup/Dbconnect.php';
$stmt = $conn->prepare("SELECT SUM(noofmembers) FROM day2");
$stmt->execute();
$result = $stmt->get_result();
$row=$result->fetch_assoc();
$seatsbooked = $row['SUM(noofmembers)'];
$seats = 100 - $row['SUM(noofmembers)'];   

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quick Pass - Print</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="icon" type="image/png" href="../Images/Anthony.png">
    <script src="https://use.fontawesome.com/196e4f3cc5.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
<?php 
include "../config.php";
?>

<div class="container">
<div class="print-title">
    <h1 
    style=
    "font-variant: small-caps;
     text-align: center;
     font: 400 50px/1.3 'Berkshire Swash', Helvetica, sans-serif;
     color: #2b2b2b;
     text-shadow: 1px 1px 0px #ededed, 4px 4px 0px rgba(0,0,0,0.15);"
   >St. Anthony Chapel</h1>
</div>
 <form method='post' action='../download.php'>
 <h3>Day 2</h3>
  <table style='border-collapse:collapse;'>
    <tr>
     <th>Pass No</th>
     <th>Name</th>
     <th>Mobile Number</th>
     <th>Address</th>
     <th>Attendees</th>
    </tr>
    <?php 
      $user_arr = array();
    
     include '../Signup/Dbconnect.php';
                        $stmt = $conn->prepare("SELECT * FROM day2");
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while  ($row = $result->fetch_assoc()):
                            $id = $row['passno'];
      $uname = $row['name'];
      $name = $row['mobilenumber'];
      $gender = $row['address'];
      $email = $row['noofmembers'];
       $user_arr[] = array($id,$uname,$name,$gender,$email);
   ?>
      <tr>
       <td><?php echo $id; ?></td>
       <td><?php echo $uname; ?></td>
       <td><?php echo $name; ?></td>
       <td><?php echo $gender; ?></td>
       <td><?php echo $email; ?></td>
      </tr>
   
   <?php endwhile; ?>
  
   <tr>
      <td class="activeUser"></td>
      <td class="username"></td>
      <td class="email"></a></td>
      <td>Total</td>
      <td class="commenter"><?php echo htmlentities($seatsbooked); ?></td>
   </tr>
   </table>
   <input type = "submit" class="stylebutton" value= 'Go Back' name='goback'>
  <input type = "submit" style="float:right;" class="stylebutton" value= 'Print' name='Print' onclick="window.print()">
  </form>
 
</div>

</body>
</html>