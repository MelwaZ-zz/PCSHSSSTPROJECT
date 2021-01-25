<?php?>
<html>

<head></head>

<body>
  <?php
  require('server.php');

  $sql = '
    SELECT * 
    FROM project;
    ';

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  ?>
  <table border="1.5">
    <tr>
      <th width="50">
        <div align="center">ProjectID</div>
      </th>
      <th width="50">
        <div align="center">Branch</div>
      </th>
      <th width="50">
        <div align="center">ProjectName</div>
      </th>
      <th width="50">
        <div align="center">DevName 1</div>
      </th>
      <th width="50">
        <div align="center">DevName 2</div>
      </th>
      <th width="50">
        <div align="center">DevID 1</div>
      </th>
      <th width="50">
        <div align="center">DevID 2</div>
      </th>
      <th width="50">
        <div align="center">Phonenumber 1</div>
      </th>
      <th width="50">
        <div align="center">Phonenumber 2</div>
      </th>
      <th width="50">
        <div align="center">Teacher</div>
      </th>
      <th width="50">
        <div align="center">Year</div>
      </th>
      <th width="50">
        <div align="center">Link</div>
      </th>
    </tr>
    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        <td><?php echo $objResult["ProjectID"]; ?></td>
        <td><?php echo $objResult["Branch"]; ?></td>
        <td><?php echo $objResult["ProjectName"]; ?></a></td>
        <td><?php echo $objResult["DevName_1"]; ?></td>
        <td><?php echo $objResult["DevName_2"]; ?></td>
        <td><div align="center"><?php echo $objResult["DevID_1"]; ?></td></div>
        <td><div align="center"><?php echo $objResult["DevID_2"]; ?></td></div>
        <td><div align="center"><?php echo $objResult["Phonenumber_1"]; ?></td></div>
        <td><div align="center"><?php echo $objResult["Phonenumber_2"]; ?></td></div>
        <td><?php echo $objResult["Teacher"]; ?></td>
        <td><div align="center"><?php echo $objResult["Year"]; ?></td></div>
        <td><div align="center"><a href = "<?php echo $objResult["Datalink"]; ?>"><?php echo $objResult["Datalink"]; ?></a></td></div>
        <td align="center"><a href="deletedata.php?ProjectID=<?php echo $objResult["ProjectID"]; ?>">Delete</a></td>
        <td align="center"><a href="update2.php?ProjectID=<?php echo $objResult["ProjectID"]; ?>">Update</a></td>
        
      </tr>
    <?php
      $i++;
    }
    ?>
    
  </table>
  <a class="gbt" href="index.php">กลับหน้าหลัก</a>

  <?php
  mysqli_close($conn); // ปิดฐานข้อมูล
  
  ?>
</body>

</html>