<html>

<head>
<title>Update Page</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
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

$sql = "UPDATE project SET Branch = '$Branch', ProjectName = '$ProjectName', DevName_1 = ' $DevName_1', DevName_2 = '$DevName_2', DevID_1 = '$DevID_1', DevID_2 = '$DevID_2', Phonenumber_1 = '$Phonenumber_1', Phonenumber_2 = '$Phonenumber_2', Teacher = '$Teacher', Year = '$Year', Datalink = '$Datalink' WHERE ProjectID = ' $ProjectID' ; ";


$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

if ($objQuery) {
	echo "Record was Updated.";
} else {
	echo "Error : Update";
}
mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
?>
<a class="gbt" href="update1.php">กลับหน้าหลัก</a>

</body>
</html>