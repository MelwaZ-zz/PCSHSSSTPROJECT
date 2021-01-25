<?php?>
<html>

<head></head>

<body>
    <?php
    $update_ID    = $_REQUEST['ProjectID'];
    $ProjectID   = $update_ID;
    ?>
    <h2>Update Data : Project</h2>
    <form action="updatedata.php?ProjectID=<?php echo $ProjectID; ?>" method="post" name="project">
        <table border="1">
            <tr>
                <td>ProjectID : </td>
                <td><input type="text" name="ProjectID" value="<?php echo $ProjectID; ?>" disabled></td>
            </tr>
            <tr>
                <td>Branch : </td>
                <td><input type="text" name="Branch"></td>
            </tr>
            <tr>
                <td>Project Name : </td>
                <td><input type="text" name="ProjectName"></td>
            </tr>
            <tr>
                <td>DevName 1 : </td>
                <td><input type="text" name="DevName_1"></td>
            </tr>
            <tr>
                <td>DevName 2 : </td>
                <td><input type="text" name="DevName_2"></td>
            </tr>
            <tr>
                <td>DevID 1 : </td>
                <td><input type="text" name="DevID_1"></td>
            </tr>
            <tr>
                <td>DevID 2 : </td>
                <td><input type="text" name="DevID_2"></td>
            </tr>
            <tr>
                <td>Phonenumber 1 : </td>
                <td><input type="text" name="Phonenumber_1"></td>
            </tr>
            <tr>
                <td>Phonenumber 2 : </td>
                <td><input type="text" name="Phonenumber_2"></td>
            </tr>
            <tr>
                <td>Teacher : </td>
                <td><input type="text" name="Teacher"></td>
            </tr>            
            <tr>
                <td>Year : </td>
                <td><input type="year" name="Year"></td>
            </tr>
            <tr>
                <td>Datalink : </td>
                <td><input type="text" name="Datalink"></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Update Data">
    </form>
    <?php
    mysqli_close($conn); // ปิดฐานข้อมูล
    ?>
</body>

</html>