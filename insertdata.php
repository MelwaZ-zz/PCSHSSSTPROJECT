<?php?>

<?php
require('server.php');

$ProjectID   = $_REQUEST['ProjectID'];
$Branch		  = $_REQUEST['Branch'];
$ProjectName		  = $_REQUEST['ProjectName'];
$DevName_1		  = $_REQUEST['DevName_1'];
$DevName_2	  = $_REQUEST['DevName_1'];
$DevID_1	  = $_REQUEST['DevID_1'];
$DevID_2	  = $_REQUEST['DevID_2'];
$Phonenumber_1 = $_REQUEST['Phonenumber_1'];
$Phonenumber_2   = $_REQUEST['Phonenumber_2'];
$Teacher		  = $_REQUEST['Teacher'];
$Year		  = $_REQUEST['Year'];
$Datalink		= $_REQUEST['Datalink'];		

$sql = "
	INSERT INTO project
	VALUES ('$ProjectID', '$Branch', '$ProjectName', '$DevName_1', '$DevName_2', '$DevID_1', '$DevID_2', '$Phonenumber_1', '$Phonenumber_2', '$Teacher', '$Year', '$Datalink');
	";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	echo "New record Inserted successfully";
} else {
	echo "Error : Input";
}

mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
?>