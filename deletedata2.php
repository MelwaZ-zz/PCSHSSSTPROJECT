<?php?>
<?php

$delete_ID  = $_REQUEST['ProjectID'];

require('server.php');

$sql = 'DELETE FROM project WHERE ProjectID = ' . $delete_ID . ';';

$objQuery = mysqli_query($conn, $sql);
if ($objQuery) {
    echo "Record " . $delete_ID . " was Deleted.";
} else {
    echo "Error : Delete";
}

mysqli_close($conn); // ปิดฐานข้อมูล

echo '<A HREF = "update1.php "> กลับหน้าแรก </A>'

?>

