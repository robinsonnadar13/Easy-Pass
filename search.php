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

$namesearched =  $_SESSION['namesearched'];

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
      <li><a href="admin.php">Attendees</a></li>
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

<table>
   <tr class="table-header">
      <th>Pass No</th>
      <th>Name</th>
      <th>Mobile Number</th>
      <th>Address</th>
      <th>Attendees</th>
   </tr>
   <?php
                        include 'Signup/Dbconnect.php';
                        $stmt = $conn->prepare("SELECT * FROM booking where name like ? ");
                        $stmt->bind_param("s",$namesearched); 
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while  ($row = $result->fetch_assoc()):
            
                    ?>
   <tr>
      <td class="activeUser"><?= $row['passno'] ?></td>
      <td class="username"><?= $row['name'] ?></td>
      <td class="email"><?= $row['mobilenumber'] ?></a></td>
      <td><?= $row['address'] ?></td>
      <td class="commenter"><?= $row['noofmembers'] ?></td>
   </tr>
   <?php endwhile; ?>
</table>
</div>
</body>
</html>


