<?php

require_once "Signup/pdo.php";
require 'Signup/Dbconnect.php';

$stmt = $conn->prepare("SELECT dbtablename, dayno FROM automated ORDER BY timestamp DESC LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();
$row=$result->fetch_assoc();
$dbtablename = $row['dbtablename'];
$dayno = $row['dayno'];



if(isset($_POST['Export'])){



$filename = $dbtablename.'-Attendees.csv';

$export_data = unserialize($_POST['export_data']);



// file creation

$file = fopen($filename,"w");

fputcsv($file, array("St. Anthony's Chapel")); 

fputcsv($file, array($dayno)); 

fputcsv($file, array()); 

fputcsv($file, array('Pass No', 'Name', 'Mobile Number', 'Address', 'Attendees'));

fputcsv($file, array());  



foreach ($export_data as $line){

 fputcsv($file,$line);

}



fclose($file);



// download

header("Content-Description: File Transfer");

header("Content-Disposition: attachment; filename=".$filename);

header("Content-Type: application/csv; "); 



readfile($filename);



// deleting file

exit();

header("Location: admin.php");



}

else{

    header("Location: admin.php");

}



if ( isset($_POST['Print'] ) ) {

    header("Location: print.php");

    return;

 }



 if ( isset($_POST['goback'] ) ) {

    header("Location: admin.php");

    return;

 }



?>