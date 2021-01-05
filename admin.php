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

require 'Signup/Dbconnect.php';
$stmt = $conn->prepare("SELECT SUM(noofmembers) FROM booking");
$stmt->execute();
$result = $stmt->get_result();
$row=$result->fetch_assoc();
$seatsbooked = $row['SUM(noofmembers)'];
$seats = 100 - $row['SUM(noofmembers)'];   

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quick Pass - Admin</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="icon" type="image/png" href="Images/Anthony.png">
    <script src="https://use.fontawesome.com/196e4f3cc5.js"></script>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<nav>
   <ul>
      <li class="talk">Admin</li>
      <li class="active">Attendees</li>
      <li><a href="stats.php">Stats</a></li>
      <li><a href="Credentials.php">Update</a></li>
      <li style="float:right"><a href="Signup/logout.php">Log Out</a></li>
   </ul>
</nav>
<div class="container">
<section class="filterBar">
   <div class="search-ui">
 <label for="search">Search</label>
 <div class="search-container">
    <form method="post">
      <input type="text" placeholder="Search by name ..." name="namesearched">
      <button type="submit" name="search"><i class="fa fa-search"></i></button>
    </form>
  </div>
   </div>
</section>

<?php 
include "config.php";
?>

<div class="container">
 
 <form method='post' action='download.php'>
 
  <table style='border-collapse:collapse;'>
    <tr>
     <th>Pass No</th>
     <th>Name</th>
     <th>Mobile Number</th>
     <th>Address</th>
     <th>Attendees</th>
    </tr>
    <?php 
     $query = "SELECT * FROM booking";
     $result = mysqli_query($con,$query);
     $user_arr = array();
     while($row = mysqli_fetch_array($result)){
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
   <?php
    }
   ?>
   <tr>
      <td class="activeUser"></td>
      <td class="username"></td>
      <td class="email"></a></td>
      <td>Total</td>
      <td class="commenter"><?php echo htmlentities($seatsbooked); ?></td>
   </tr>
   </table>
   <?php 
    $serialize_user_arr = serialize($user_arr);
   ?>
  <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
  <input type='submit' class="stylebutton" value='Export in Excel' name='Export'>
  <input type = "submit" class="stylebutton" style="float:right;" value= 'Print' name='Print' onclick="window.print()">
  </form>
 
</div>

</body>
</html>

