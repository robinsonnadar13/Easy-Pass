<?php

if(isset($_POST['Export'])){

$filename = 'Day1-Attendees.csv';
$export_data = unserialize($_POST['export_data']);

// file creation
$file = fopen($filename,"w");
fputcsv($file, array('St. Anthony Chapel')); 
fputcsv($file, array('Day 1')); 
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