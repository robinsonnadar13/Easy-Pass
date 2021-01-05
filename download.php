<?php

if(isset($_POST['Export'])){

$filename = 'Booked-Attendees.csv';
$export_data = unserialize($_POST['export_data']);

// file creation
$file = fopen($filename,"w");
fputcsv($file, array('Pass No', 'Name', 'Mobile Number', 'Address', 'Attendees')); 

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

?>