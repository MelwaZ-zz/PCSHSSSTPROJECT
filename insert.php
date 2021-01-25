<?php?>
<html>

<head>
<title>Insert Page</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Insert Data : Project</h2>
    <form action="insertdata.php" method="post" name="project">
        <table border="1">
            <tr>
                <td>ProjectID : </td>
                <td><input type="text" name="ProjectID"></td>
            </tr>
            <tr>
                <td>Branch : </td>
                <td><input type="text" name="Branch"></td>
            </tr>
            <tr>
                <td>ProjectName : </td>
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
                <td><input type="text" name="Year"></td>
            </tr>
            <tr>
                <td>Datalink : </td>
                <td><input type="text" name="Datalink"></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Insert Data">
    </form>
    <a class="gbt" href="index.php">กลับหน้าหลัก</a>
</body>

</html>