<?php

require 'Signup/Dbconnect.php';

if(isset($_POST["Export"])){
     
     header('Content-Type: text/csv; charset=utf-8');  
     header('Content-Disposition: attachment; filename=BookingList.csv');  
     $output = fopen("php://output", "w");  
     fputcsv($output, array('ID', 'Name', 'Mobile Number', 'Address', 'Attendees'));  
     $query = "SELECT * from booking";  
     $result = mysqli_query($con, $query);  
     while($row = mysqli_fetch_assoc($result))  
     {  
          fputcsv($output, $row);  
     }  
     fclose($output);  

}

?>